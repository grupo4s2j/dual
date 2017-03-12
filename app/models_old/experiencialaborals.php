<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdExperiencia
 * @property integer $idAlumne
 * @property string $DescEmpresa
 * @property integer $idSector
 * @property string $DataInici
 * @property string $DataFinal
 * @property integer $MesosContracte
 * @property string $Categoria
 * @property string $Comentari
 * @property Alumne $alumne
 * @property Sector $sector
 */
class experiencialaborals extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idAlumne', 'DescEmpresa', 'idSector', 'DataInici', 'DataFinal', 'MesosContracte', 'Categoria', 'Comentari'];

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
    public function sector()
    {
        return $this->belongsTo('App\Sector', 'idSector', 'IdSector');
    }
}
