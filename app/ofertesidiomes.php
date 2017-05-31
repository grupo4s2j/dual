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
class ofertesidiomes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idOferta', 'idIdioma'];
    
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function idioma()
    {
        return $this->belongsTo('App\idiomes', 'idIdioma');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferta()
    {
        return $this->belongsTo('App\ofertes', 'idOferta');
    }
}
