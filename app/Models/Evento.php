<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    static $rules = [
        'nombre' => 'required',
        'gestion' => 'required',
        'descripcion' => 'required',
        'cupo' => 'required',
        'categoria' => 'required',
        'disponible' => 'required',

    ];

    use HasFactory;
}
