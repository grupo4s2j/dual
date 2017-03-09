<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idOferta
 * @property integer $idEstudio
 * @property string $created_at
 * @property string $updated_at
 * @property Estudi $estudi
 * @property Oferte $oferte
 */
class ofertaformacios extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idOferta', 'idEstudio', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estudi()
    {
        return $this->belongsTo('App\Estudi', 'idEstudio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'idOferta');
    }
}
