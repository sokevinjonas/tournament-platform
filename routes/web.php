<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\RegistrationController;

// Route pour la page d'accueil (accessible par tous)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes protégées pour les utilisateurs connectés
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/tournois', [HomeController::class, 'tournois'])->name('tournois');
    Route::get('/classement', [HomeController::class, 'classement'])->name('classement');

});
// Routes pour les joueurs
Route::post('joueur-create', [JoueurController::class, 'store'])->name('joueur.store');
Route::get('/test-joueur', [JoueurController::class, 'test'])->name('joueur.test');
Route::post('/connecter', [JoueurController::class, 'login'])->name('auth');
// Routes d'inscription (accessibles par tous)
Route::get('/register', [RegistrationController::class, 'create'])->name('registration.create');
Route::get('/me-connecter', [RegistrationController::class, 'loginForm'])->name('login');
Route::post('/register', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/register/confirmation', [RegistrationController::class, 'confirmation'])->name('registration.confirmation');
