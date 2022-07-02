<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    use HasFactory;
    protected $table = 'ajout_vente';
    protected $fillable = [
        'nom_pro',
        'tel_pro',
        'ville_pro',
        'quartier_pro',
        'nbr',
        'nego',
        'doc',
        'coord',
        'dist',
        'prox',
        'estdisponible',
        'type_bien',
        'img',
        'comm'
    ];
}
