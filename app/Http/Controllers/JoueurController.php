<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
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
        dd($request->all());
        $joueur = $this->userService->storeUser($request->validated(), 'Joueur');

        if (!$joueur) {
            return redirect()->back()->with('error', 'Erreur lors de l’inscription. Veuillez réessayer.');
        }

        // auth()->login($joueur);
        return redirect()->route('dashboard')->with('success', 'Inscription réussie !');
    }

}
