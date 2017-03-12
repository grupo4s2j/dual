<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idOferta
 * @property integer $idArea
 * @property string $created_at
 * @property string $updated_at
 * @property Areesprofessional $areesprofessional
 * @property Oferte $oferte
 */
class ofertaareaprofessionals extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idOferta', 'idArea', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function areesprofessional()
    {
        return $this->belongsTo('App\Areesprofessional', 'idArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'idOferta');
    }
}
