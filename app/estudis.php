<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdEstudi
 * @property string $codiEstudi
 * @property string $DescEstudi
 * @property integer $idNivell
 * @property integer $NumHores
 * @property integer $idFamiliaEstudis
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
    protected $fillable = ['codiEstudi', 'DescEstudi', 'idNivell', 'NumHores', 'idFamiliaEstudis'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nivellestudi()
    {
        return $this->belongsTo('App\Nivellestudi', 'idNivell', 'IdNivell');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function family()
    {
        return $this->belongsTo('App\Family', 'idFamiliaEstudis', 'IdFamilia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudisreglats()
    {
        return $this->hasMany('App\Estudisreglat', 'idEstudi', 'IdEstudi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaformacios()
    {
        return $this->hasMany('App\Ofertaformacio', 'idEstudis', 'IdEstudi');
    }
}
