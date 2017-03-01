<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdEmpresa
 * @property string $CodiEmpresa
 * @property string $CIF
 * @property string $NomSocial
 * @property string $NomComercial
 * @property string $PersonaContacte
 * @property string $Telf
 * @property string $email
 * @property string $FAX
 * @property string $Adreca
 * @property integer $idPoblacio
 * @property integer $idProvincia
 * @property string $CP
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
    protected $fillable = ['CodiEmpresa', 'CIF', 'NomSocial', 'NomComercial', 'PersonaContacte', 'Telf', 'email', 'FAX', 'Adreca', 'idPoblacio', 'idProvincia', 'CP'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function poblacion()
    {
        return $this->belongsTo('App\Poblacion', 'idPoblacio', 'IdPoblacio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provincy()
    {
        return $this->belongsTo('App\Provincy', 'idProvincia', 'IdProvincia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertes()
    {
        return $this->hasMany('App\Oferte', 'idEmpresa', 'IdEmpresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectorempreses()
    {
        return $this->hasMany('App\Sectoremprese', 'idEmpresa', 'IdEmpresa');
    }
}
