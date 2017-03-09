<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdTipusVehicle
 * @property string $CodiTipusVehicle
 * @property string $DescTipusVehicle
 * @property Vehiclesalumne[] $vehiclesalumnes
 */
class tipusvehicles extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['CodiTipusVehicle', 'DescTipusVehicle'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiclesalumnes()
    {
        return $this->hasMany('App\Vehiclesalumne', 'idTipusVehicle', 'IdTipusVehicle');
    }
}
