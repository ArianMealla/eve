<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    
    protected $table = 'eventos';
    static $rules = [
        
        'nombre' => 'required',
        'fechainicio' => 'required',
        'fechafinal' => 'required',
        /*
        'categoria' => 'required',
        'año' => 'required',
        'nombre' => 'required',
        'nombre2' => 'required',
        */
        'cupo' => 'required | numeric' ,
        'disponible' => 'required',
        'descripcion' => 'required',
        
    ];

    protected $perPage = 20;



      
    protected $fillable = ['nombre','fechainicio','fechafinal','fechafinal','categoria', 'año', 'nombre', 'nombre2', 'cupo', 'disponible', 'descripcion'];

    use HasFactory;


    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria', 'categorias_id', 'id');
    }

    public function year()
    {
        return $this->belongsTo('App\Models\Gestion', 'gestions_id', 'id');
    }

    public function lugar()
    {
        return $this->belongsTo('App\Models\Lugar', 'lugars_id', 'id');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Models\Tiposevento', 'tiposeventos_id', 'id');
    }
}
