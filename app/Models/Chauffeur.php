<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    protected $fillable=[
        'numpermis',
        'nom',
        'prenom',
        'age',
        'tel',
        'busAffecte',
        'ville',
    ];
}
