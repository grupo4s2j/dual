<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idIdiomaAlumno
 * @property string $descCertificacion
 * @property string $equivalencia
 * @property string $created_at
 * @property string $updated_at
 * @property Alumneidiome $alumneidiome
 */
class idiomescertificacions extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idIdiomaAlumno', 'descCertificacion', 'equivalencia', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumneidiome()
    {
        return $this->belongsTo('App\Alumneidiome', 'idIdiomaAlumno');
    }
}
