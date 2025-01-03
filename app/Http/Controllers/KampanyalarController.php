<?php

namespace App\Http\Controllers;

use App\Models\kampanyalar;
use Illuminate\Http\Request;

class KampanyalarController extends Controller
{
   public function index(){
        $kampanyalars=kampanyalar::all();
            return view('kampanyalar',compact('kampanyalars'));

    }
}
