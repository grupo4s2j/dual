<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $Idvehicle
 * @property integer idTipoVehiculo
 * @property integer $idAlumne
 * @property Alumne $alumne
 * @property Tipusvehicle $tipusvehicle
 */
class vehiclesalumnes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idTipoVehiculo', 'idAlumne'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumne()
    {
        return $this->belongsTo('App\Alumne', 'idAlumne', 'IdAlumne');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipusvehicle()
    {
        return $this->belongsTo('App\Tipusvehicle', 'idTipoVehiculo', 'idTipoVehiculo');
    }
}