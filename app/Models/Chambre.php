<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;
    protected $table = 'chambre';
    protected $fillable = [
        'location_id',
        'location_nom_pro',
        'num_ch',
        'desc'   
    ];
    public function location(){
        return $this->belongsTo(Location::class,'location_id','id');
    }
}
