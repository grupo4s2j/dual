<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $codigoEmpresa
 * @property string $CIF
 * @property string $nombreSocial
 * @property string $nombreComercial
 * @property string $personaContacto
 * @property string $telf
 * @property string $email
 * @property string $FAX
 * @property string $direccion
 * @property integer $idPoblacio
 * @property integer $idProvincia
 * @property integer $idUser
 * @property string $CP
 * @property string $created_at
 * @property string $updated_at
 * @property Poblacion $poblacion
 * @property Provincy $provincy
 * @property Oferte[] $ofertes
 * @property Sectoremprese[] $sectorempreses
 */
class empreses extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codigoEmpresa', 'CIF', 'nombreSocial', 'nombreComercial', 'personaContacto', 'telf', 'email', 'FAX', 'direccion', 'idPoblacio', 'idProvincia', 'idUser', 'CP', 'created_at', 'updated_at'];

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
        return $this->belongsTo('App\Provincy', 'idProvincia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertes()
    {
        return $this->hasMany('App\ofertes', 'idEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectorempreses()
    {
        return $this->hasMany('App\sectorempreses', 'idEmpresa');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectors()
    {
        return $this->belongsToMany('App\sectors', 'sectorempreses', 'idEmpresa', 'idSector');
    }
}
