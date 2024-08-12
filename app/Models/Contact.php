<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Table associée
    protected $table = 'contacts';

    // Les attributs qui sont assignables en masse
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];
}
