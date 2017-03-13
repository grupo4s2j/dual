<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idAlumno
 * @property integer $idTipusCarnet
 * @property string $created_at
 * @property string $updated_at
 * @property Alumne $alumne
 * @property Tipuscarnet $tipuscarnet
 */
class carnetalumnes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idAlumno', 'idTipusCarnet', 'created_at', 'updated_at'];

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
    public function tipuscarnet()
    {
        return $this->belongsTo('App\Tipuscarnet', 'idTipusCarnet');
    }
}
