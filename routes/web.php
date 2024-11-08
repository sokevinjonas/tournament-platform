<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\RegistrationController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/tournois', [HomeController::class, 'tournois'])->name('tournois');
Route::get('/classement', [HomeController::class, 'classement'])->name('classement');
// Routes d'inscription
Route::get('/register', [RegistrationController::class, 'create'])->name('registration.create');
Route::post('/register', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/register/confirmation', [RegistrationController::class, 'confirmation'])->name('registration.confirmation');


//Logique pour inscrire un Joueur
Route::post('joueur_create', [JoueurController::class, 'store'])->name('joueur.store');
