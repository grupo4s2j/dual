<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdOfertaExp
 * @property integer $IdOferta
 * @property integer $DescExperiencia
 * @property integer $AnysExperiencia
 * @property Oferte $oferte
 */
class ofertaexperiencias extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['IdOferta', 'DescExperiencia', 'AnysExperiencia'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'IdOferta', 'IdOferta');
    }
}
