<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;


Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes d'inscription
Route::get('/register', [RegistrationController::class, 'create'])->name('registration.create');
Route::post('/register', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/register/confirmation', [RegistrationController::class, 'confirmation'])->name('registration.confirmation');

