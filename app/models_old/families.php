<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdFamilia
 * @property string $CodiFamilia
 * @property string $DescFamilia
 * @property Areesprofessional[] $areesprofessionals
 * @property Estudi[] $estudis
 */
class families extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['CodiFamilia', 'DescFamilia'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function areesprofessionals()
    {
        return $this->hasMany('App\Areesprofessional', 'idFamilia', 'IdFamilia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudis()
    {
        return $this->hasMany('App\Estudi', 'idFamiliaEstudis', 'IdFamilia');
    }
}
