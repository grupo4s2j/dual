<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $descCentro
 * @property integer $idEstudio
 * @property integer $añoObtencion
 * @property integer $notaExpediente
 * @property integer $idAlumno
 * @property string $created_at
 * @property string $updated_at
 * @property Alumne $alumne
 * @property Estudi $estudi
 */
class estudisreglats extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['descCentro', 'idEstudio', 'añoObtencion', 'notaExpediente', 'idAlumno', 'created_at', 'updated_at'];

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
    public function estudi()
    {
        return $this->belongsTo('App\Estudi', 'idEstudio');
    }
}
