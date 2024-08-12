<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // Afficher la page de paiement
    public function index()
    {
        // Récupérer les informations nécessaires pour le paiement
        // par exemple, les informations de la commande en cours
        return view('payments.index');
    }

    // Gérer le paiement
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'payment_method' => 'required|in:credit_card,paypal',
            'amount' => 'required|numeric',
        ]);

        $paymentStatus = 'success'; // Simuler le statut de paiement pour l'exemple

        if ($paymentStatus == 'success') {
            // Créer un enregistrement de paiement
            $payment = Payment::create([
                'order_id' => $request->order_id,
                'payment_method' => $request->payment_method,
                'amount' => $request->amount,
                'status' => 'paid',
            ]);

            // Mise à jour du statut de la commande
            $order = Order::find($request->order_id);
            if ($order) {
                $order->status = 'paid';
                $order->save();
            }

            return redirect()->route('orders.show', $request->order_id)->with('success', 'Payment successful!');
        } else {
            return redirect()->back()->with('error', 'Payment failed, please try again.');
        }
    }
}