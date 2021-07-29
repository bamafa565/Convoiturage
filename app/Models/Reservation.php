<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable=[
        'nom',
        'prenom',
        'datenais',
        'villedepart',
        'villearriver',
        'datedepart',
        'datearriver'
        
        
    ];
}
