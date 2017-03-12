<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $codiSector
 * @property string $descSector
 * @property string $created_at
 * @property string $updated_at
 * @property Experiencialaboral[] $experiencialaborals
 * @property Oferte[] $ofertes
 * @property Sectorarea[] $sectorareas
 * @property Sectoremprese[] $sectorempreses
 */
class sectors extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codiSector', 'descSector', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function experiencialaborals()
    {
        return $this->hasMany('App\Experiencialaboral', 'idSector');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertes()
    {
        return $this->hasMany('App\Oferte', 'idSector');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectorareas()
    {
        return $this->hasMany('App\Sectorarea', 'idSector');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectorempreses()
    {
        return $this->hasMany('App\Sectoremprese', 'idSector');
    }
}
