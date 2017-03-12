<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idOferta
 * @property integer $idUC
 * @property string $created_at
 * @property string $updated_at
 * @property Oferte $oferte
 * @property Ucalumne $ucalumne
 */
class ofertaucs extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idOferta', 'idUC', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'idOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ucalumne()
    {
        return $this->belongsTo('App\Ucalumne', 'idUC');
    }
}
