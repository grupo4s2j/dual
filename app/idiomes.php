<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $codiIdioma
 * @property string $descIdioma
 * @property string $created_at
 * @property string $updated_at
 * @property Alumneidiome[] $alumneidiomes
 * @property Ofertaprioritat[] $ofertaprioritats
 */
class idiomes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codiIdioma', 'descIdioma', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumneidiomes()
    {
        return $this->hasMany('App\Alumneidiome', 'idIdioma');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaprioritats()
    {
        return $this->hasMany('App\Ofertaprioritat', 'idIdioma');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertes()
    {
        return $this->belongsToMany('App\ofertes', 'ofertesidiomes', 'idIdioma', 'idOferta');
    }
}
