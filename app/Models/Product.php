<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Table associée
    protected $table = 'products';

    // Les attributs qui sont assignables en masse
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
    ];

    // Relation avec le modèle Order (un produit peut être dans plusieurs commandes)
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
}
