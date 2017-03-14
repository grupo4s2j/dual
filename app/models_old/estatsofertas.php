<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdEstat
 * @property string $CodiEstat
 * @property string $DescEstat
 * @property integer $Ordre
 * @property Ofertaestat[] $ofertaestats
 */
class estatsofertas extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['CodiEstat', 'DescEstat', 'Ordre'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaestats()
    {
        return $this->hasMany('App\Ofertaestat', 'Idestat', 'IdEstat');
    }
}
