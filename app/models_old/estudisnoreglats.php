<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdNoReglat
 * @property integer $idAlumne
 * @property string $DescCentre
 * @property integer $DescEstudi
 * @property integer $AnyObtencio
 * @property integer $Hores
 * @property integer $idArea
 * @property Areesprofessional $areesprofessional
 * @property Alumne $alumne
 */
class estudisnoreglats extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idAlumne', 'DescCentre', 'DescEstudi', 'AnyObtencio', 'Hores', 'idArea'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function areesprofessional()
    {
        return $this->belongsTo('App\Areesprofessional', 'idArea', 'IdArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumne()
    {
        return $this->belongsTo('App\Alumne', 'idAlumne', 'IdAlumne');
    }
}
