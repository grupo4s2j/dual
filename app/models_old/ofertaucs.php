<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdUCOferta
 * @property integer $idOferta
 * @property integer $idUC
 * @property Oferte $oferte
 * @property Ucalumne $ucalumne
 */
class ofertaucs extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['IdUCOferta', 'idUC'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'idOferta', 'IdOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ucalumne()
    {
        return $this->belongsTo('App\Ucalumne', 'idUC', 'idUC');
    }
}
