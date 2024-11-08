<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function dashboard(){
        return view('home.dashboard');
    }
    public function tournois(){
        return view('tournaments.index');
    }
    public function classement(){
        return view('classement.index');
    }
}
