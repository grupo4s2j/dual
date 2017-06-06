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
    protected $fillable = ['idEmpresa', 'idEstat', 'dataEntrada', 'descOferta', 'descOfertaBreve', 'jornadaLaboral', 'personaContacto', 'idSector', 'direccion', 'idPoblacio', 'idProvincia', 'CP', 'activo', 'mesesExperiencia'];

    protected $dates = ['created_at', 'updated_at'];
    
    //public $timestamps = false;
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empreses()
    {
        return $this->belongsTo('App\empreses', 'idEmpresa');
    }
        public function poblacio()
    {
        return $this->belongsTo('App\poblacions', 'idPoblacio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sector()
    {
        return $this->belongsTo('App\Sector', 'idSector', 'IdSector');
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
        return $this->hasMany('App\ofertaalumnes', 'idOferta', 'IdOferta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaareaprofessionals()
    {
        return $this->hasMany('App\ofertaareaprofessional', 'idOferta', 'IdOferta');
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
    public function skills()
    {
        return $this->belongsToMany('App\skills', 'ofertaskill', 'id_oferta', 'id_skill');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function idiomes()
    {
        return $this->belongsToMany('App\idiomes', 'ofertesidiomes', 'idOferta', 'idIdioma');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudis()
    {
        return $this->belongsToMany('App\estudis', 'ofertaformacios', 'idOferta', 'idEstudio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnes()
    {
        return $this->belongsToMany('App\alumnes', 'ofertaalumnes', 'idOferta', 'idAlumno');
    }
}
