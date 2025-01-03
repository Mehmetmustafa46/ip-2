<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KampanyalarController;
use App\Http\Controllers\OtelController;

use App\Http\Controllers\RezervasyonlarController;

// Rezervasyonlar için resource rotalarını tanımlıyoruz.
Route::get('/rezervasyonlar', [RezervasyonlarController::class,'index'])->name('rezervasyonlar');

Route::post('/rezervasyonlar', [RezervasyonlarController::class,'store'])->name('rezervasyonlar');



use App\Http\Controllers\SeyahatController;
use Illuminate\Support\Facades\Route;
Route::get('/oteller', [OtelController::class, 'index'])->name('oteller.index');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/seyahatlar', [SeyahatController::class, 'index'])->name('seyahatlar');
Route::get('/kampanyalar', [KampanyalarController::class, 'index'])->name('kampanyalar');

