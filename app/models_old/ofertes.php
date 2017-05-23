<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdOferta
 * @property integer $idEmpresa
 * @property string $DataEntrada
 * @property string $DescOferta
 * @property string $DescOfertaBreu
 * @property string $PersonaContacte
 * @property integer $idSector
 * @property Emprese $emprese
 * @property Sector $sector
 * @property Ofertaalumne[] $ofertaalumnes
 * @property Ofertaareaprofessional[] $ofertaareaprofessionals
 * @property Ofertaestat[] $ofertaestats
 * @property Ofertaexperiencia[] $ofertaexperiencias
 * @property Ofertaformacio[] $ofertaformacios
 * @property Ofertahistorial[] $ofertahistorials
 * @property Ofertaprioritat[] $ofertaprioritats
 * @property Ofertauc $ofertauc
 */
class ofertes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idEmpresa', 'DataEntrada', 'DescOferta', 'DescOfertaBreu', 'PersonaContacte', 'idSector'];

    public $timestamps = false;
    
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaalumnes()
    {
        return $this->hasMany('App\Ofertaalumne', 'idOferta', 'IdOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaareaprofessionals()
    {
        return $this->hasMany('App\Ofertaareaprofessional', 'idOferta', 'IdOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaestats()
    {
        return $this->hasMany('App\Ofertaestat', 'idOferta', 'IdOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaexperiencias()
    {
        return $this->hasMany('App\Ofertaexperiencia', 'IdOferta', 'IdOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaformacios()
    {
        return $this->hasMany('App\Ofertaformacio', 'idOferta', 'IdOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertahistorials()
    {
        return $this->hasMany('App\Ofertahistorial', 'idOferta', 'IdOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaprioritats()
    {
        return $this->hasMany('App\Ofertaprioritat', 'idOferta', 'IdOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ofertauc()
    {
        return $this->hasOne('App\Ofertauc', 'idOferta', 'IdOferta');
    }
}
