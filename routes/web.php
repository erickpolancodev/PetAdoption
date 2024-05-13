<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PetController::class, 'index'])->name('pets');
Route::get('/pets/{id}', [PetController::class, 'show']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
