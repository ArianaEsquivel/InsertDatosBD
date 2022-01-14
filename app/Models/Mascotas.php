<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{

    use HasFactory;
    public function Personas()
    {
        return $this->belongsTo('App\Personas');
    }
    protected $fillable = [
        'nombre', 'edad', 'persona_id',
    ];
}
