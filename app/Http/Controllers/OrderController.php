<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // Logique pour récupérer et afficher les commandes
        return view('orders.index');  // Affiche la vue orders/index.blade.php
    }
}
