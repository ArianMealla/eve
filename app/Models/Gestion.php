<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gestion
 *
 * @property $id
 * @property $año
 * @property $created_at
 * @property $updated_at
 *
 * @property Evento[] $eventos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Gestion extends Model
{
    
    static $rules = [
		'año' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['año'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventos()
    {
        return $this->hasMany('App\Models\Evento', 'gestion_id', 'id');
    }
    

}
