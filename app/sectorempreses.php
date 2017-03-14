<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idEmpresa
 * @property integer $idSector
 * @property string $created_at
 * @property string $updated_at
 * @property Emprese $emprese
 * @property Sector $sector
 */
class sectorempreses extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idEmpresa', 'idSector', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function emprese()
    {
        return $this->belongsTo('App\Emprese', 'idEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sector()
    {
        return $this->belongsTo('App\Sector', 'idSector');
    }
}
