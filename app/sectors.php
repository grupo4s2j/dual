<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdSector
 * @property string $codiSector
 * @property string $DescSector
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
    protected $fillable = ['codiSector', 'DescSector'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function experiencialaborals()
    {
        return $this->hasMany('App\Experiencialaboral', 'idSector', 'IdSector');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertes()
    {
        return $this->hasMany('App\Oferte', 'idSector', 'IdSector');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectorareas()
    {
        return $this->hasMany('App\Sectorarea', 'idSector', 'IdSector');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectorempreses()
    {
        return $this->hasMany('App\Sectoremprese', 'idSector', 'IdSector');
    }
}
