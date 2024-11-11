<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegistrationRequest;

class JoueurController extends Controller
{
    protected $UserService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function store(RegistrationRequest $request)
    {
        // Les données sont déjà validées ici
        $joueur = $this->userService->storeUser($request->validated(), 'joueur');
        if (!$joueur) {
            return redirect()->back()->with('error', 'Erreur lors de l’inscription. Veuillez réessayer.');
        }

        // // auth()->login($joueur);
        return redirect()->route('login')->with('success', 'Inscription réussie !');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard')->with('success', 'Connexion réussie !');
        }

        return redirect()->back()->with('error', 'Erreur lors de la connexion. Veuillez réessayer.');

    }


}
