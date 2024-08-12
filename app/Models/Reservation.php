<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Table associée
    protected $table = 'reservations';

    // Les attributs qui sont assignables en masse
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'reservation_date',
        'number_of_guests',
        'special_requests',
    ];

    // Relation avec le modèle User (une réservation appartient à un utilisateur)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
