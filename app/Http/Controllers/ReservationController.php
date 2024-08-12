<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all(); // Récupère toutes les réservations
        return view('reservations.index', compact('reservations'));
    }

    public function store(Request $request)
    {
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->reservation_date = $request->reservation_date; // Utilisez 'reservation_date'
        $reservation->save();

        return redirect()->route('reservations.index');
    }

    public function all()
    {
        // Logique pour afficher toutes les réservations
        return view('reservations.all');
    }
}
