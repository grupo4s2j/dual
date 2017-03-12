<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idAlumno
 * @property string $descCentro
 * @property integer $descEstudio
 * @property integer $añoObtencion
 * @property integer $horas
 * @property integer $idArea
 * @property string $created_at
 * @property string $updated_at
 * @property Areesprofessional $areesprofessional
 * @property Alumne $alumne
 */
class estudisnoreglats extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idAlumno', 'descCentro', 'descEstudio', 'añoObtencion', 'horas', 'idArea', 'created_at', 'updated_at'];

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
    public function alumne()
    {
        return $this->belongsTo('App\Alumne', 'idAlumno');
    }
}
