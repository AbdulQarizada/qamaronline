<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\QamarCareCard;

class QamarCareCardController extends Controller
{
  
    public function Index()
    {
      
      $qamarcarecards =   QamarCareCard::all();
      return view('QamarCardCard.Index', compact('qamarcarecards'));
    }
}
