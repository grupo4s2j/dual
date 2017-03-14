<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idAlumno
 * @property string $descEmpresa
 * @property integer $idSector
 * @property string $dataInicio
 * @property string $dataFinal
 * @property integer $mesesContrato
 * @property string $Categoria
 * @property string $created_at
 * @property string $updated_at
 * @property string $Comentari
 * @property Alumne $alumne
 * @property Sector $sector
 */
class experiencialaborals extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idAlumno', 'descEmpresa', 'idSector', 'dataInicio', 'dataFinal', 'mesesContrato', 'Categoria', 'created_at', 'updated_at', 'Comentari'];

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
    public function sector()
    {
        return $this->belongsTo('App\Sector', 'idSector');
    }
}
