<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Afficher le tableau de bord d'administration
    public function index()
    {
        $reservations = Reservation::all();
        $contacts = Contact::all();
        $orders = Order::all();
        $products = Product::all();
        $users = User::all();

        return view('admin.index', compact('reservations', 'contacts', 'orders', 'products', 'users'));
    }

    // Autres méthodes pour gérer les CRUD d'autres entités peuvent être ajoutées ici
}
