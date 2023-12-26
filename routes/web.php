<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;


Route::get('/', function () {
    return view('home');
})->name('home');
Route::view('skills','skills')->name('skills');
Route::get('contact', [ContactController::class,'show'])->name('contact');
Route::get('services',[ServiceController::class, 'show'])->name('services');
