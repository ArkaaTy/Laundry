<?php

use App\Http\Controllers\LaundryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::view('/detail', [LaundryController::class, 'munir'])->name('detail-laundry');

//CRUD LAUNDRY
Route::get('/laundry',[LaundryController::class, 'index'])->name('laundry');
Route::delete('hapus-laundry/{param}', [LaundryController::class, 'delete'])->name('hapus-laundry');
Route::post('kirim-laundry', [LaundryController::class, 'store'])->name('kirim-laundry');
Route::get('/detail/{id}', [LaundryController::class, 'detail'])->name('detail-laundry');
Route::get('/data',[LaundryController::class, 'create'])->name('data');

Route::view('tampilan', 'template.template');