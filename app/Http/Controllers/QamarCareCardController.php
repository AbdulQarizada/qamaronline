<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\QamarCareCard;
use App\Models\Province;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;


class QamarCareCardController extends Controller
{
  








  // index
    public function Index()
    {
      
      return view('QamarCardCard.Index');
    }

  






    // create
    public function Create()
    {
      $provinces =   Province::all();
      
      return view('QamarCardCard.Create', compact('provinces'));
    }

    public function Store(Request $request)
    {
      
       $validator = $request->validate([
      'FirstName' => 'bail|required|max:255',
      'LastName' => 'required|max:255',
      'TazkiraID' => 'required|digits_between:1,30',
      'QCC' => 'required|unique:qamar_care_cards|max:255',
      'Profile' => 'required|max:255',
      'DOB' => 'required|max:255',
      'Gender' => 'required|max:255',
      'Language' => 'required|max:255',
      'CurrentJob' => 'required|max:255',
      'FutureJob' => 'required|max:255',
      'EducationLevel' => 'required|max:255',
      'PrimaryNumber' => 'required|max:255',
      'SecondaryNumber' => 'required|max:255',
      'EmergencyNumber' => 'required|max:255',
      'Province' => 'required|max:255',
      'District' => 'required|max:255',
      'Village' => 'required|max:255',
      'Email' => 'required|max:255',
      'FatherName' => 'required|max:255',
      'SpuoseName' => 'required|max:255',
      'EldestSonAge' => 'required|max:255',
      'MonthlyFamilyIncome' => 'required|max:255',
      'MonthlyFamilyExpenses' => 'required|max:255',
      'NumberFamilyMembers' => 'required|digits_between:1,5',
      'IncomeStreem' => 'required|max:255',
      'LevelPoverty' => 'required|max:255',
      'Tazkira' => 'required|max:255',
       ]);

  
       
     

     
        QamarCareCard::create([
          'FirstName' => request('FirstName'),
          'LastName' => request('LastName'),
          'TazkiraID' => request('TazkiraID'),
          'QCC' => request('QCC'),
          'Profile' => request('Profile'),
          'DOB' => request('DOB'),
          'Gender' => request('Gender'),
          'Language' => request('Language'),
          'CurrentJob' => request('CurrentJob'),
          'FutureJob' => request('FutureJob'),
          'EducationLevel' => request('EducationLevel'),
          'PrimaryNumber' => request('PrimaryNumber'),
          'SecondaryNumber' => request('SecondaryNumber'),
          'EmergencyNumber' => request('EmergencyNumber'),
          'Province' => request('Province'),
          'District' => request('District'),
          'Village' => request('Village'),
          'Email' => request('Email'),
          'FatherName' => request('FatherName'),
          'SpuoseName' => request('SpuoseName'),
          'EldestSonAge' => request('EldestSonAge'),
          'MonthlyFamilyIncome' => request('MonthlyFamilyIncome'),
          'MonthlyFamilyExpenses' => request('MonthlyFamilyExpenses'),
          'NumberFamilyMembers' => request('NumberFamilyMembers'),
          'IncomeStreem' => request('IncomeStreem'),
          'LevelPoverty' => request('LevelPoverty'),
          'Tazkira' => request('Tazkira'),
          'Status' => 'Pending',
          'Created_By' => auth()->user()->name



          ]);

         return redirect()->route('AllQamarCareCard')->with('toast_success', 'Record Created Successfully!')->autoClose(5000);

      


  

    }

















    // update
    public function Edit(QamarCareCard $data)
    {
      $provinces =   Province::all();
      
      return view('QamarCardCard.Edit', compact('provinces'), ['data' => $data]);
    }

    public function Update(QamarCareCard $data )
    {
      
      $data -> update([

        'FirstName' => request('FirstName'),
        'LastName' => request('LastName'),
        'Email' => request('Email'),
        'PNumber' => request('PNumber'),
        'SNumber' => request('SNumber'),
        'Province' => request('Province'),
        'District' => request('District')

      ]);
      $qamarcarecards =   QamarCareCard::all();
      return view('QamarCardCard.All', compact('qamarcarecards'));
    }















     // Delete
     public function Delete(QamarCareCard $data)
     {
       
          $data->delete();
          return back()->with('success','Record deleted successfully');

     }

    








  

   // list
   public function All()
   {
     
     $qamarcarecards =   QamarCareCard::all();
     return view('QamarCardCard.All', compact('qamarcarecards'));
   }



    public function Approved()
    {
      
      $qamarcarecards =   QamarCareCard::where("Status", "=", 'Approved')->get();

      return view('QamarCardCard.Approved', compact('qamarcarecards'));
    }


    public function Rejected()
    {
      
      $qamarcarecards =   QamarCareCard::where("Status", "=", 'Rejected')->get();
      return view('QamarCardCard.Rejected', compact('qamarcarecards'));
    }

       
    public function Printed()
     {
         
         $qamarcarecards =   QamarCareCard::where("Status", "=", 'Printed')->get();
         return view('QamarCardCard.Printed', compact('qamarcarecards'));
    }

         
    public function Pending()
    {
      
      $qamarcarecards =   QamarCareCard::where("Status", "=", 'Pending')->get();
      return view('QamarCardCard.Pending', compact('qamarcarecards'));
    }





  


    // status
    public function Status(QamarCareCard $data)
    {
      
      return view('QamarCardCard.Status',  ['data' => $data]);
    }

    public function Approve(QamarCareCard $data )
    {
      
      $data -> update([

        'Status' => 'Approved'

      ]);
      $qamarcarecards =   QamarCareCard::all();
      return view('QamarCardCard.All', compact('qamarcarecards'));
    }

    public function Reject(QamarCareCard $data )
    {
      
      $data -> update([

        'Status' => 'Rejected'

      ]);
      $qamarcarecards =   QamarCareCard::all();
      return view('QamarCardCard.All', compact('qamarcarecards'));
    }


    public function ReInitiate(QamarCareCard $data )
    {
      
      $data -> update([

        'Status' => 'Pending'

      ]);
      $qamarcarecards =   QamarCareCard::all();
      return view('QamarCardCard.All', compact('qamarcarecards'));
    }

    










  // print
  public function Print(QamarCareCard $data)
  {
          
          return view('QamarCardCard.Print',  ['data' => $data]);
   }

   // Verify
   public function Verify()
   {
            $qamarcarecards = null;
            return view('QamarCardCard.Verify', compact('qamarcarecards'));
   }
  
   
   public function Search()
   {
      
      $qamarcarecards =   QamarCareCard::where("QCC", "=",  request('ID'))->get();
      return view('QamarCardCard.Verify', compact('qamarcarecards'));
   }


   

}
