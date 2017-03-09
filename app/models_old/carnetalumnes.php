<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdCarnet
 * @property integer $idAlumne
 * @property integer $idTipusCarnet
 * @property Alumne $alumne
 * @property Tipuscarnet $tipuscarnet
 */
class carnetalumnes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idAlumne', 'idTipusCarnet'];

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
    public function tipuscarnet()
    {
        return $this->belongsTo('App\Tipuscarnet', 'idTipusCarnet', 'IdTipusCarnet');
    }
}
