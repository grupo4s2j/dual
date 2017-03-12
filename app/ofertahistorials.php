<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idOferta
 * @property string $dataAccion
 * @property string $descAccion
 * @property string $retornarAccion
 * @property string $created_at
 * @property string $updated_at
 * @property Oferte $oferte
 */
class ofertahistorials extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idOferta', 'dataAccion', 'descAccion', 'retornarAccion', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'idOferta');
    }
}
