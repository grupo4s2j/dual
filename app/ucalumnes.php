<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idUC
 * @property integer $idAlumno
 * @property string $created_at
 * @property string $updated_at
 * @property Alumne $alumne
 * @property Qualificacionsprofessional $qualificacionsprofessional
 * @property Ofertauc[] $ofertaucs
 */
class ucalumnes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idUC', 'idAlumno', 'created_at', 'updated_at'];

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
    public function qualificacionsprofessional()
    {
        return $this->belongsTo('App\Qualificacionsprofessional', 'idUC');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaucs()
    {
        return $this->hasMany('App\Ofertauc', 'idUC');
    }
}
