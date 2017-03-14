<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idOferta
 * @property integer $formacion
 * @property integer $experiencia
 * @property integer $idioma
 * @property integer $idIdioma
 * @property boolean $mustFormacion
 * @property boolean $mustExperiencia
 * @property boolean $mustIdioma
 * @property string $created_at
 * @property string $updated_at
 * @property Idiome $idiome
 * @property Oferte $oferte
 */
class ofertaprioritats extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idOferta', 'formacion', 'experiencia', 'idioma', 'idIdioma', 'mustFormacion', 'mustExperiencia', 'mustIdioma', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function idiome()
    {
        return $this->belongsTo('App\Idiome', 'idIdioma');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'idOferta');
    }
}
