<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBien extends Model
{
    use HasFactory;
    protected $table = 'type_bien';
    protected $fillable = [
        'nom_ach'
        
    ];
}
