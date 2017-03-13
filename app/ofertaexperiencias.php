<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idOferta
 * @property integer $descExperiencia
 * @property integer $anysExperiencia
 * @property string $created_at
 * @property string $updated_at
 * @property Oferte $oferte
 */
class ofertaexperiencias extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idOferta', 'descExperiencia', 'anysExperiencia', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'idOferta');
    }
}
