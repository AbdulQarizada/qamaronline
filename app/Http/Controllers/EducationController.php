<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function __construct()
  {
    $this->middleware('auth', ['except' => ['Verify', 'Search']]);
  }

  // index
  public function Index()
  {

    return view('Education.Index');
  }


}
