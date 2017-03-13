<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdUCAlumne
 * @property integer $idUC
 * @property integer $idAlumne
 * @property Alumne $alumne
 * @property Qualificacionsprofessional $qualificacionsprofessional
 * @property Ofertauc[] $ofertaucs
 */
class ucalumnes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idUC', 'idAlumne'];

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
    public function qualificacionsprofessional()
    {
        return $this->belongsTo('App\Qualificacionsprofessional', 'idUC', 'IdQP');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaucs()
    {
        return $this->hasMany('App\Ofertauc', 'idUC', 'idUC');
    }
}
