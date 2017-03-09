<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdArea
 * @property string $CodiArea
 * @property string $DescArea
 * @property integer $idFamilia
 * @property Family $family
 * @property Estudisnoreglat[] $estudisnoreglats
 * @property Ofertaareaprofessional[] $ofertaareaprofessionals
 * @property Qualificacionsprofessional[] $qualificacionsprofessionals
 * @property Sectorarea[] $sectorareas
 */
class areesprofessionals extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['CodiArea', 'DescArea', 'idFamilia'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function family()
    {
        return $this->belongsTo('App\Family', 'idFamilia', 'IdFamilia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudisnoreglats()
    {
        return $this->hasMany('App\Estudisnoreglat', 'idArea', 'IdArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaareaprofessionals()
    {
        return $this->hasMany('App\Ofertaareaprofessional', 'idArea', 'IdArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function qualificacionsprofessionals()
    {
        return $this->hasMany('App\Qualificacionsprofessional', 'idArea', 'IdArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectorareas()
    {
        return $this->hasMany('App\Sectorarea', 'idArea', 'IdArea');
    }
}
