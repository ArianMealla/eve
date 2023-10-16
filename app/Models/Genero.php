<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Genero
 *
 * @property $id
 * @property $genero
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Genero extends Model
{
    
    static $rules = [
		'genero' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['genero'];



}
