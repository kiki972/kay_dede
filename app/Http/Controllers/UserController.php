<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        // Logique pour afficher la liste des utilisateurs
        $users = User::all();
        return view('users.index', compact('users'));
    }
}
