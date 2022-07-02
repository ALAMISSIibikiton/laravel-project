<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;
    protected $table = 'acheteur';
    protected $fillable = [
        'nom_ach',
        'prenom_ach',
        'tel_ach',
    ];
}
