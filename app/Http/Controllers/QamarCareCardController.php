<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\QamarCareCard;
use App\Models\Province;

class QamarCareCardController extends Controller
{
  








  // index
    public function Index()
    {
      
      return view('QamarCardCard.Index');
    }

  












    // list
    public function List()
    {
      
      $qamarcarecards =   QamarCareCard::all();
      return view('QamarCardCard.List', compact('qamarcarecards'));
    }


     // get one
     public function GetOne(QamarCareCard $data)
     {
      $provinces =   Province::all();
      
      return view('QamarCardCard.GetOne', compact('provinces'), ['data' => $data]);
     }














    // create
    public function Create()
    {
      $provinces =   Province::all();
      
      return view('QamarCardCard.Create', compact('provinces'));
    }

    public function Store()
    {
      QamarCareCard::create([
             'FirstName' => request('FirstName'),
             'LastName' => request('LastName'),
             'Email' => request('Email'),
             'PNumber' => request('PNumber'),
             'SNumber' => request('SNumber'),
             'Province' => request('Province'),
             'District' => request('District')



      ]);
      $qamarcarecards =   QamarCareCard::all();
      return view('QamarCardCard.List', compact('qamarcarecards'));
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
      return view('QamarCardCard.List', compact('qamarcarecards'));
    }















     // Delete
     public function Delete(QamarCareCard $data)
     {
       
          $data->delete();
          $qamarcarecards =   QamarCareCard::all();
          return view('QamarCardCard.List', compact('qamarcarecards'));

     }

    









  // arppoved
    public function Approved()
    {
      
      $approveds =   QamarCareCard::all();
      return view('QamarCardCard.Approved', compact('approveds'));
    }

      // print
      public function Print(QamarCareCard $data)
      {
        
        return view('QamarCardCard.Print',  ['data' => $data]);
      }
  

       // reject
    public function Reject()
    {
      
      $approveds =   QamarCareCard::all();
      return view('QamarCardCard.Rejected', compact('approveds'));
    }


}
