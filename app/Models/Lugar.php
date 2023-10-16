<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lugar
 *
 * @property $id
 * @property $nombre2
 * @property $created_at
 * @property $updated_at
 *
 * @property Evento[] $eventos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lugar extends Model
{
    
    static $rules = [
		'nombre2' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre2'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventos()
    {
        return $this->hasMany('App\Models\Evento', 'lugar_id', 'id');
    }
    

}
