<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdUCOferta
 * @property integer $idOferta
 * @property integer $idArea
 * @property Areesprofessional $areesprofessional
 * @property Oferte $oferte
 */
class ofertaareaprofessionals extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idOferta', 'idArea'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function areesprofessional()
    {
        return $this->belongsTo('App\Areesprofessional', 'idArea', 'IdArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'idOferta', 'IdOferta');
    }
}
