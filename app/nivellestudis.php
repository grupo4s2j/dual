<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $codiNivel
 * @property string $descNivel
 * @property integer $nivellQP
 * @property string $created_at
 * @property string $updated_at
 * @property Estudi[] $estudis
 */
class nivellestudis extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codiNivel', 'descNivel', 'nivellQP', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudis()
    {
        return $this->hasMany('App\Estudi', 'idNivel');
    }
}
