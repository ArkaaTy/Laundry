<?php

use App\Http\Controllers\LaundryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Laundry
Route::get('/laundry',[LaundryController::class, 'index'])->name('laundry');
