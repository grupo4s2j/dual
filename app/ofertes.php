<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idEmpresa
 * @property string $dataEntrada
 * @property string $descOferta
 * @property string $descOfertaBreve
 * @property string $personaContacto
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
 * @property Ofertauc[] $ofertaucs
 */
class ofertes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idEmpresa', 'idEstat', 'dataEntrada', 'descOferta', 'descOfertaBreve', 'jornadaLaboral', 'personaContacto', 'idSector', 'direccion', 'idPoblacio', 'idProvincia', 'CP', 'activo'];
    
    protected $dates = ['created_at', 'updated_at'];
    
    //public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empreses()
    {
        return $this->belongsTo('App\empreses', 'idEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sector()
    {
        return $this->belongsTo('App\Sector', 'idSector');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estats()
    {
        return $this->belongsTo('App\estatsofertas', 'idEstat');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaalumnes()
    {
        return $this->hasMany('App\Ofertaalumne', 'idOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaareaprofessionals()
    {
        return $this->hasMany('App\Ofertaareaprofessional', 'idOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaestats()
    {
        return $this->hasMany('App\Ofertaestat', 'idOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaexperiencias()
    {
        return $this->hasMany('App\Ofertaexperiencia', 'idOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaformacios()
    {
        return $this->hasMany('App\Ofertaformacio', 'idOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertahistorials()
    {
        return $this->hasMany('App\Ofertahistorial', 'idOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaprioritats()
    {
        return $this->hasMany('App\Ofertaprioritat', 'idOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaucs()
    {
        return $this->hasMany('App\Ofertauc', 'idOferta');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function poblacion()
    {
        return $this->belongsTo('App\poblacions', 'idPoblacio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provincy()
    {
        return $this->belongsTo('App\provincies', 'idProvincia');
    }
  
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumnesOferta()
    {
        return $this->belongsTo('App\alumnes');
    }

}
