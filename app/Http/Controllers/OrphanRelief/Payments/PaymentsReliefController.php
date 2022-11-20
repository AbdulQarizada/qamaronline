<?php

namespace App\Http\Controllers\OrphanRelief\Payments;

use App\Http\Controllers\Controller;
use App\Mail\OrphanMails;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Cart;
use App\Models\QamarCareCard;
use App\Models\Orphan;
use App\Models\OrphanPayment;
use App\Models\AssignCareCardServices;
use App\Models\ServiceType;
use App\Models\ServiceProviders;
use Illuminate\Support\Facades\Hash;
use App\Models\Location;
use App\Models\LookUp;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;

class PaymentsReliefController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth', ['except' => ['Checkout', 'AddToCart', 'RemoveFromCart', 'StorePayment']]);
  }

  // Payment
  // list
  public function All()
  {
    $PageInfo = 'All';
    $provinces = Location::whereNull("Parent_ID")->get();
    $payments =   OrphanPayment::paginate(100);
    return view('OrphansRelief.Payment.All', ['datas' => $payments,'PageInfo' => $PageInfo,'provinces' => $provinces,]);
  }

  public function MyPayments()
  {

    $mypayments =  OrphanPayment::where("Email", "=", Auth::user()->email)
    -> paginate(100);
    return view('OrphansRelief.Payment.MyPayment', ['datas' => $mypayments]);
  }

  // status
  public function Reciept(OrphanPayment $data)
  {
      $payments =   OrphanPayment::where("orphan_payments.id", "=", $data->id)->get();
      return view('OrphansRelief.Payment.Reciept', ['datas' => $payments,]);
  }


  // orphan cart

  public function Checkout()
  {
    if (!Session::has('cart')) {
      return view('OrphansRelief.Orphan.AllGrid');
    }
    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);
    $total = $cart->totalPrice;
    return view('OrphansRelief.Payment.Checkout',  ['datas' => $cart->items, 'totalPrice' => $cart->totalPrice]);
  }



  public function AddToCart(Request $request, $id)
  {
    $product = Orphan::find($id);
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->add($product, $product->id);
    $request->session()->put('cart', $cart);
    return view('OrphansRelief.Payment.Checkout', ['datas' => $cart->items, 'totalPrice' => $cart->totalPrice]);
  }



  public function RemoveFromCart($id)
  {
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->removeItem($id);
    if (count($cart->items) > 0) {
      Session::put('cart', $cart);
    } else {
      Session::forget('cart');
    }
    return view('OrphansRelief.Payment.Checkout', ['datas' => $cart->items, 'totalPrice' => $cart->totalPrice]);
  }



  public function StorePayment(Request $request)
  {
    if (!Session::has('cart'))
    {
      return redirect()->route('AllGridOrphans');
    }



    $oldCart = Session::get('cart');
    $cart = new Cart($oldCart);

    // search if he is already a sponsor
    $userid = User::where('email', '=', request('Email'))->first();
    if (!$userid)
    {

      $AmountInCents = $request->input('PaymentAmount') * 100;
      Stripe::setApiKey(env('STRIPE_SECRET'));
      try
      {
        $charge = Charge::create(array(
          "amount" => $AmountInCents,
          "currency" => "usd",
          "source" => $request->input('stripeToken'), // obtained with Stripe.js
          "description" => "Orphan Sponsorship"
        ));
      }
      catch (\Exception $e)
      {
        return redirect()->route('CheckoutPayment')->with('error', $e->getMessage());
      }

      $RandomPassword = Str::random(8);
      OrphanPayment::create([
        'PaymentOption' => request('PaymentOption'),
        'PaymentAmount' => request('PaymentAmount'),
        'FullName' => request('FullName'),
        'Email' => request('Email'),
        'CardNumber' => request('CardNumber'),
        'Password' => $RandomPassword,
        'ChargeID' => $charge->id,
      ]);

      $userid = User::create([
        'FullName' => request('FullName'),
        'email' => request('Email'),
        'password' => Hash::make($RandomPassword),
        'Profile' => 'avatar-1.png',
        'IsActive' => 1,
        'IsEmployee' => 0,
        'IsOrphanSponsor' => 1,
      ]);

      $userid = User::where('email', '=', request('Email'))->first();
      foreach ($oldCart->items as $item) {
        $orphanid = Orphan::where('id', '=', $item['item']['id'])->first();
        $orphanid->update(['Sponsor_ID' => $userid->id]);
        $orphanid->update(['IsSponsored' => 1]);
      }

      $details = ['Email' => request('Email'), 'Password' => $RandomPassword, 'FullName' => request('FullName')];
      Mail::to(request('Email'))->send(new OrphanMails($details));
      Session::forget('cart');
      return redirect()->route('AllGridOrphans')->with('done', 'You have successfully sponosred an orphan, we have sent you an email that contains username and password and link to login, please login to the dashboard and track your orphan. Welcome to Qamar Family');
    }
    else
    {

      $AmountInCents = $request->input('PaymentAmount') * 100;
      Stripe::setApiKey(env('STRIPE_SECRET'));
      try
      {
        $charge = Charge::create(array(
          "amount" => $AmountInCents,
          "currency" => "usd",
          "source" => $request->input('stripeToken'), // obtained with Stripe.js
          "description" => "Orphan Sponsorship"
        ));
      }
      catch (\Exception $e)
      {
        return redirect()->route('CheckoutPayment')->with('error', $e->getMessage());
      }

      $RandomPassword = Str::random(12);
      OrphanPayment::create([
        'PaymentOption' => request('PaymentOption'),
        'PaymentAmount' => request('PaymentAmount'),
        'FullName' => request('FullName'),
        'Email' => request('Email'),
        'CardNumber' => request('CardNumber'),
        'Password' => $RandomPassword,
        'ChargeID' => $charge->id,
      ]);
      $userid = User::where('email', '=', request('Email'))->first();
      foreach ($oldCart->items as $item)
      {
        $orphanid = Orphan::where('id', '=', $item['item']['id'])->first();
        $orphanid->update(['Sponsor_ID' => $userid->id]);
        $orphanid->update(['IsSponsored' => 1]);
      }
      Session::forget('cart');
      return redirect()->route('AllGridOrphans')->with('done', 'You have successfully sponosred an orphan, we have sent you an email that contains username and password and link to login, please login to the dashboard and track your orphan. Welcome to Qamar Family');
    }
  }
}
