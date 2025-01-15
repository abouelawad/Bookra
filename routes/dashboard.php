<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DiscountController;

Route::get('/', [DashboardController::class, 'index']);

// Discounts routes

// Route::get('discount', [DiscountController::class, 'index']);

Route::middleware('auth:admin')
          ->prefix('discount')
          ->name('discount.')
          ->group(function(){

  Route::get('/',[DiscountController::class, 'index'])->name('index');
  
  Route::get('/show/{discount}',[DiscountController::class, 'show'])->name('show');
  
  Route::get('/create',[DiscountController::class, 'create'])->name('create');
  Route::post('/',[DiscountController::class, 'store'])->name('store');

  Route::get('/edit/{discount}',[DiscountController::class, 'edit'])->name('edit');
  Route::Put('/{discount}',[DiscountController::class, 'update'])->name('update');

  Route::delete('/{discount}',[DiscountController::class, 'destroy'])->name('delete');


});