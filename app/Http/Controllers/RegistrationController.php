<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.register');
    }

    public function loginForm(){
        return view('registration.login');
    }
}
