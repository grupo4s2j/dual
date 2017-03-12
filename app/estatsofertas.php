<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $codiEstado
 * @property string $descEstado
 * @property integer $orden
 * @property string $created_at
 * @property string $updated_at
 * @property Ofertaestat[] $ofertaestats
 */
class estatsofertas extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codiEstado', 'descEstado', 'orden', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaestats()
    {
        return $this->hasMany('App\Ofertaestat', 'idEstado');
    }
}
