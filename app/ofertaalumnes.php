<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idOferta
 * @property integer $idAlumno
 * @property integer $valExp
 * @property integer $valFor
 * @property integer $valIdi
 * @property integer $valoracioTotal
 * @property boolean $apuntat
 * @property string $created_at
 * @property string $updated_at
 * @property Alumne $alumne
 * @property Oferte $oferte
 */
class ofertaalumnes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idOferta', 'idAlumno', 'valExp', 'valFor', 'valIdi', 'valoracioTotal', 'apuntat', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumne()
    {
        return $this->belongsTo('App\alumnes', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ofertes()
    {
        return $this->belongsTo('App\ofertes', 'idOferta');
    }
}
