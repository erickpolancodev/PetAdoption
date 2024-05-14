<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/store', [ItemController::class, 'index'])->name('store')->middleware('auth');
Route::get('/store/{id}', [ItemController::class, 'show']);

Route::post('/buy/{id}',[ItemController::class, 'buy']);


Route::get('/', [PetController::class, 'index'])->name('pets');
Route::get('/pets/{id}', [PetController::class, 'show']);
Route::post('/adopt/{id}',[PetController::class, 'adopt'])->name('adopt')->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
