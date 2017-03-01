<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdSectorArea
 * @property integer $idArea
 * @property integer $idSector
 * @property Areesprofessional $areesprofessional
 * @property Sector $sector
 */
class sectorareas extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idArea', 'idSector'];

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
    public function sector()
    {
        return $this->belongsTo('App\Sector', 'idSector', 'IdSector');
    }
}
