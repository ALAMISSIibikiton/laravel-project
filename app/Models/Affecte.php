<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affecte extends Model
{
    use HasFactory;
    protected $table = 'affect';
    protected $fillable = [
        'name',
        'prenom',
        'nompro',  
    ];
    public function location(){
        return $this->belongsTo(Location::class,'location_id','id');
    }
}
