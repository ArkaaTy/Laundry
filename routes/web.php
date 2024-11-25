<?php

use App\Http\Controllers\LaundryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//CRUD LAUNDRY
Route::get('/laundry',[LaundryController::class, 'index'])->name('laundry');
Route::delete('hapus-laundry/{param}', [LaundryController::class, 'delete'])->name('hapus-laundry');
