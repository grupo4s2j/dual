<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $idalumne
 * @property integer $IdAltresDades
 * @property string $Comentari
 * @property boolean $EstudiaAra
 * @property boolean $Mobilitat
 * @property integer $RadiMobilitat
 * @property boolean $TreballaAra
 * @property boolean $Discapacitat
 * @property integer $GrauDiscapacitat
 * @property Alumne $alumne
 */
class altresdadesalumnes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idalumne', 'Comentari', 'EstudiaAra', 'Mobilitat', 'RadiMobilitat', 'TreballaAra', 'Discapacitat', 'GrauDiscapacitat'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumne()
    {
        return $this->belongsTo('App\Alumne', 'idalumne', 'IdAlumne');
    }
}
