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
class ofertaskill extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id_oferta', 'id_skill'];
    
    public $timestamps = false;
    protected $table = 'ofertaskill';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function skill()
    {
        return $this->belongsTo('App\skills', 'id_skill');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oferta()
    {
        return $this->belongsTo('App\ofertes', 'id_oferta');
    }
}
