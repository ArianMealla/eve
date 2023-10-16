<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inscripcion
 *
 * @property $id
 * @property $paterno
 * @property $materno
 * @property $nombres
 * @property $departamentos_id
 * @property $institucion
 * @property $celular
 * @property $correo
 * @property $generos_id
 * @property $profesion
 * @property $horarios_id
 * @property $places_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento $departamento
 * @property Genero $genero
 * @property Horario $horario
 * @property Place $place
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inscripcion extends Model
{
    
    static $rules = [
		'paterno' => 'required',
		'materno' => 'required',
		'nombres' => 'required',
        /*
		'departamentos_id' => 'required',
        */
		'institucion' => 'required',
		'celular' => 'required | numeric',
		'correo' => 'required | email',
		/*
        'generos_id' => 'required',
        */
		'profesion' => 'required',
        /*
		'horarios_id' => 'required',
		'places_id' => 'required',
        */
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['paterno','materno','nombres','departamentos_id','institucion','celular','correo','generos_id','profesion','horarios_id','places_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento', 'departamentos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genero()
    {
        return $this->belongsTo('App\Models\Genero', 'generos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function horario()
    {
        return $this->belongsTo('App\Models\Horario', 'horarios_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function place()
    {
        return $this->belongsTo('App\Models\Place', 'places_id', 'id');
    }
    

}
