<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\RegistrationController;

// Route pour la page d'accueil (accessible par tous)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes protégées pour les utilisateurs connectés
Route::middleware(['auth'])->group(function () {
    //Route pour dashboard admins
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/tournois', [HomeController::class, 'tournois'])->name('tournois');
    Route::get('/classement', [HomeController::class, 'classement'])->name('classement');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');


});

// Routes non protégées pour les utilisateurs connectés
Route::middleware(['guest'])->group(function () {
    //Route pour les pages inscriptions et auth
    Route::get('/register', [RegistrationController::class, 'create'])->name('registration.create');
    Route::get('/me-connecter', [RegistrationController::class, 'loginForm'])->name('login');

    //Route pour les pages logiques inscriptions et auth
    Route::post('register-create', [JoueurController::class, 'store'])->name('joueur.store');
    Route::post('/connecter', [JoueurController::class, 'login'])->name('auth');

});
