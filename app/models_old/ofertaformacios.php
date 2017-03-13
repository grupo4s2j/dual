<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdOfertaFormacio
 * @property integer $idOferta
 * @property integer $idEstudis
 * @property Estudi $estudi
 * @property Oferte $oferte
 */
class ofertaformacios extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idOferta', 'idEstudis'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estudi()
    {
        return $this->belongsTo('App\Estudi', 'idEstudis', 'IdEstudi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'idOferta', 'IdOferta');
    }
}
