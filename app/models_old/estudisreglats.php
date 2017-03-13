<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdReglat
 * @property string $DescCentre
 * @property integer $idEstudi
 * @property integer $AnyObtencio
 * @property integer $NotaExpedient
 * @property integer $idAlumne
 * @property Alumne $alumne
 * @property Estudi $estudi
 */
class estudisreglats extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['DescCentre', 'idEstudi', 'AnyObtencio', 'NotaExpedient', 'idAlumne'];

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
    public function estudi()
    {
        return $this->belongsTo('App\Estudi', 'idEstudi', 'IdEstudi');
    }
}
