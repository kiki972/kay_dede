<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Logique pour afficher la liste des utilisateurs
        $users = User::all();
        return view('users.index', compact('users'));
    }
}
