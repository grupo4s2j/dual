<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $codiFamilia
 * @property string $descFamilia
 * @property string $created_at
 * @property string $updated_at
 * @property Areesprofessional[] $areesprofessionals
 * @property Estudi[] $estudis
 */
class families extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codiFamilia', 'descFamilia', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function areesprofessionals()
    {
        return $this->hasMany('App\Areesprofessional', 'idFamilia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudis()
    {
        return $this->hasMany('App\Estudi', 'idFamiliaEstudios');
    }
}
