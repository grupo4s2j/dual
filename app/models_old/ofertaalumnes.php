<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdValoracioOferta
 * @property integer $idOferta
 * @property integer $idAlumne
 * @property integer $ValExp
 * @property integer $ValFor
 * @property integer $ValIdi
 * @property integer $ValoracioTotal
 * @property boolean $Apuntat
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
        return $this->belongsTo('App\Alumne', 'idAlumne', 'IdAlumne');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferte()
    {
        return $this->belongsTo('App\Oferte', 'idOferta', 'IdOferta');
    }
}
