<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdTipusCarnet
 * @property string $CodiTipusCarnet
 * @property string $DescTipusCarnet
 * @property Carnetalumne[] $carnetalumnes
 */
class tipuscarnets extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['CodiTipusCarnet', 'DescTipusCarnet'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carnetalumnes()
    {
        return $this->hasMany('App\Carnetalumne', 'idTipusCarnet', 'IdTipusCarnet');
    }
}
