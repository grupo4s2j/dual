<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idArea
 * @property integer $idSector
 * @property string $created_at
 * @property string $updated_at
 * @property Areesprofessional $areesprofessional
 * @property Sector $sector
 */
class sectorareas extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idArea', 'idSector', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function areesprofessional()
    {
        return $this->belongsTo('App\Areesprofessional', 'idArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sector()
    {
        return $this->belongsTo('App\Sector', 'idSector');
    }
}
