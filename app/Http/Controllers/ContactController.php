<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Logique pour afficher la page des contacts
        return view('contacts.index');
    }
}
