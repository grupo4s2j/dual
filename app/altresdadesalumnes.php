<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idAlumno
 * @property string $comentario
 * @property boolean $estudioAhora
 * @property boolean $movilidad
 * @property integer $radioMovilidad
 * @property boolean $trabajoAhora
 * @property boolean $discapacidad
 * @property integer $gradoDiscapacidad
 * @property string $created_at
 * @property string $updated_at
 * @property Alumne $alumne
 */
class altresdadesalumnes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idAlumno', 'comentario', 'estudioAhora', 'movilidad', 'radioMovilidad', 'trabajoAhora', 'discapacidad', 'gradoDiscapacidad', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumne()
    {
        return $this->belongsTo('App\Alumne', 'idAlumno');
    }
}
