<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idOferta
 * @property integer $idEstado
 * @property string $observacions
 * @property boolean $actiu
 * @property string $dataIniciEstat
 * @property string $dataCanviEstat
 * @property string $created_at
 * @property string $updated_at
 * @property Estatsoferta $estatsoferta
 * @property Oferte $oferte
 */
class ofertaestats extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idOferta', 'idEstado', 'observacions', 'actiu', 'dataIniciEstat', 'dataCanviEstat', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estatsoferta()
    {
        return $this->belongsTo('App\Estatsoferta', 'idEstado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'idOferta');
    }
}
