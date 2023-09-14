<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'nom_produit',
        'description_produit',
        'prix_produit',
        'quantite_produit',
    ];
}
