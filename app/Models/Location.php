<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table = 'location';
    protected $fillable = [
        'nom_pro',
        'tel_pro',
        'ville_lo',
        'quartier_lo',
        'nbr_jardin',
        'nbr_parking',
        'nbr_appart',
        'nbr_chambre',
        'nrb_cuisine',
        'super',
        'estmeuble',
        'nrb_bal',
        'nrb_guer',
        'img',
        'comm'
    ];    
}

