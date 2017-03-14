<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $codiTipoVehiculo
 * @property string $descTipoVehiculo
 * @property string $created_at
 * @property string $updated_at
 * @property Vehiclesalumne[] $vehiclesalumnes
 */
class tipusvehicles extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codiTipoVehiculo', 'descTipoVehiculo', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiclesalumnes()
    {
        return $this->hasMany('App\Vehiclesalumne', 'idTipoVehiculo');
    }
}
