<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Table associée
    protected $table = 'orders';

    // Les attributs qui sont assignables en masse
    protected $fillable = [
        'user_id',
        'total_amount',
        'status',
        'payment_method',
        'delivery_address',
    ];

    // Relation avec le modèle User (une commande appartient à un utilisateur)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le modèle Product (une commande peut avoir plusieurs produits)
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
