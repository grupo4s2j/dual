<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdOfertaEstat
 * @property integer $idOferta
 * @property integer $Idestat
 * @property string $Observacions
 * @property boolean $Actiu
 * @property string $DataIniciEstat
 * @property string $DataCanviEstat
 * @property Estatsoferta $estatsoferta
 * @property Oferte $oferte
 */
class ofertaestats extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idOferta', 'Idestat', 'Observacions', 'Actiu', 'DataIniciEstat', 'DataCanviEstat'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estatsoferta()
    {
        return $this->belongsTo('App\Estatsoferta', 'Idestat', 'IdEstat');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'idOferta', 'IdOferta');
    }
}
