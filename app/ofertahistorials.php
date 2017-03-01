<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdHistorial
 * @property integer $idOferta
 * @property string $DataAccio
 * @property string $DescAccio
 * @property string $RetornAccio
 * @property Oferte $oferte
 */
class ofertahistorials extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idOferta', 'DataAccio', 'DescAccio', 'RetornAccio'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'idOferta', 'IdOferta');
    }
}
