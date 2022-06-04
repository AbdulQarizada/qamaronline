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
      $qamarcarecards =   QamarCareCard::all();
      return view('QamarCardCard.All', compact('qamarcarecards'));
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
          $qamarcarecards =   QamarCareCard::all();
          return view('QamarCardCard.All', compact('qamarcarecards'));

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
