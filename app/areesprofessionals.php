<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $codiArea
 * @property string $descArea
 * @property integer $idFamilia
 * @property string $created_at
 * @property string $updated_at
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
    protected $fillable = ['codiArea', 'descArea', 'idFamilia', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function family()
    {
        return $this->belongsTo('App\Family', 'idFamilia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudisnoreglats()
    {
        return $this->hasMany('App\Estudisnoreglat', 'idArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaareaprofessionals()
    {
        return $this->hasMany('App\Ofertaareaprofessional', 'idArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function qualificacionsprofessionals()
    {
        return $this->hasMany('App\Qualificacionsprofessional', 'idArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectorareas()
    {
        return $this->hasMany('App\Sectorarea', 'idArea');
    }
}
