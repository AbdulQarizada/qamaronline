<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\QamarCareCard;
use App\Models\Province;

class QamarCareCardController extends Controller
{
  
    public function Index()
    {
      
      $qamarcarecards =   QamarCareCard::all();
      return view('QamarCardCard.Index', compact('qamarcarecards'));
    }

  
    public function List()
    {
      
      $qamarcarecards =   QamarCareCard::all();
      return view('QamarCardCard.List', compact('qamarcarecards'));
    }

    public function Approved()
    {
      
      $approveds =   QamarCareCard::all();
      return view('QamarCardCard.Approved', compact('approveds'));
    }



    public function Create()
    {
      $provinces =   Province::all();
      
      return view('QamarCardCard.Create', compact('provinces'));
    }


   public function CreateQamarCareCard()
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
      return view('QamarCardCard.Index', compact('qamarcarecards'));
    }
}
