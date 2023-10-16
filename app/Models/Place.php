<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Place
 *
 * @property $id
 * @property $place
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Place extends Model
{
    
    static $rules = [
		'place' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['place'];



}
