<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdSectorEmpresa
 * @property integer $idEmpresa
 * @property integer $idSector
 * @property Emprese $emprese
 * @property Sector $sector
 */
class sectorempreses extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idEmpresa', 'idSector'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function emprese()
    {
        return $this->belongsTo('App\Emprese', 'idEmpresa', 'IdEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sector()
    {
        return $this->belongsTo('App\Sector', 'idSector', 'IdSector');
    }
}
