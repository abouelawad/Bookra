<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function(){
    return view('dashboard.index');
})->middleware('auth:admin');



Auth::routes();

Route::post('adminlogout',[LoginController::class, 'adminLogout'])->name('adminLogout');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


