<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdNivell
 * @property string $codiNivell
 * @property string $DescNivell
 * @property integer $NivellQP
 * @property Estudi[] $estudis
 */
class nivellestudis extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codiNivell', 'DescNivell', 'NivellQP'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudis()
    {
        return $this->hasMany('App\Estudi', 'idNivell', 'IdNivell');
    }
}
