<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdPrioritatOferta
 * @property integer $idOferta
 * @property integer $Formacio
 * @property integer $Experiencia
 * @property integer $Idioma
 * @property integer $IdIdioma
 * @property boolean $MustFormacio
 * @property boolean $MustExperiencia
 * @property boolean $MustIdioma
 * @property Idiome $idiome
 * @property Oferte $oferte
 */
class ofertaprioritats extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idOferta', 'Formacio', 'Experiencia', 'Idioma', 'IdIdioma', 'MustFormacio', 'MustExperiencia', 'MustIdioma'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function idiome()
    {
        return $this->belongsTo('App\Idiome', 'IdIdioma', 'IdIdioma');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'idOferta', 'IdOferta');
    }
}
