<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscription extends Model
{
    use HasFactory;
    protected $table = 'inscriptions';
    protected $fillable = [
        'nom',
        'prenom',
        'tel',
        'email',
        'password'
    ];
   
}
