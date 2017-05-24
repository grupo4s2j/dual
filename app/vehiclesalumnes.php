<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idTipoVehiculo
 * @property integer $idAlumno
 * @property string $created_at
 * @property string $updated_at
 * @property Alumne $alumne
 * @property Tipusvehicle $tipusvehicle
 */
class vehiclesalumnes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idTipoVehiculo', 'idAlumno', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumne()
    {
        return $this->belongsTo('App\Alumne', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipusvehicle()
    {
        return $this->belongsTo('App\tipusvehicle', 'idTipoVehiculo');
    }
}
