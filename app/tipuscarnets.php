<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $codiTipoCarne
 * @property string $descTipoCarne
 * @property string $created_at
 * @property string $updated_at
 * @property Carnetalumne[] $carnetalumnes
 */
class tipuscarnets extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codiTipoCarne', 'descTipoCarne', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carnetalumnes()
    {
        return $this->hasMany('App\Carnetalumne', 'idTipusCarnet');
    }
}
