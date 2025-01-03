<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oteller;

class OtelController extends Controller
{

  public function index(){
      $otellers = Oteller::all();
      return view('oteller', compact('otellers'));
  }
}
