<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $codiEstudio
 * @property string $descEstudio
 * @property integer $idNivel
 * @property integer $numHoras
 * @property integer $idFamiliaEstudios
 * @property string $created_at
 * @property string $updated_at
 * @property Nivellestudi $nivellestudi
 * @property Family $family
 * @property Estudisreglat[] $estudisreglats
 * @property Ofertaformacio[] $ofertaformacios
 */
class estudis extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codiEstudio', 'descEstudio', 'idNivel', 'numHoras', 'idFamiliaEstudios', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nivellestudi()
    {
        return $this->belongsTo('App\Nivellestudi', 'idNivel');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function family()
    {
        return $this->belongsTo('App\Family', 'idFamiliaEstudios');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudisreglats()
    {
        return $this->hasMany('App\Estudisreglat', 'idEstudio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaformacios()
    {
        return $this->hasMany('App\Ofertaformacio', 'idEstudio');
    }
}
