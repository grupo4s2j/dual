<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdIdioma
 * @property string $codiIdioma
 * @property string $DescIdioma
 * @property Alumneidiome[] $alumneidiomes
 * @property Ofertaprioritat[] $ofertaprioritats
 */
class idiomes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codiIdioma', 'DescIdioma'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumneidiomes()
    {
        return $this->hasMany('App\Alumneidiome', 'idIdioma', 'IdIdioma');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaprioritats()
    {
        return $this->hasMany('App\Ofertaprioritat', 'IdIdioma', 'IdIdioma');
    }
}
