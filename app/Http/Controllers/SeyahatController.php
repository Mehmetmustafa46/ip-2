<?php

namespace App\Http\Controllers;

use App\Models\seyahatlar;
use Illuminate\Http\Request;

class SeyahatController extends Controller
{
    public function index(){
        $seyahatlars = seyahatlar::all(); // Veritabanından tüm seyahatleri al
        return view('seyahatlar', compact('seyahatlars'));
    }
}
