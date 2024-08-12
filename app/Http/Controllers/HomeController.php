<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome'); // Retourne la vue d'accueil
    }
}
