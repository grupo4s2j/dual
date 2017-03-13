<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdPoblacio
 * @property string $DescPoblacio
 * @property integer $idProvincia
 * @property string $CodPostal
 * @property Provincy $provincy
 * @property Alumne[] $alumnes
 * @property Codpostal[] $codpostals
 * @property Emprese[] $empreses
 */
class poblacions extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['DescPoblacio', 'idProvincia', 'CodPostal'];

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
    public function alumnes()
    {
        return $this->hasMany('App\Alumne', 'idPoblacio', 'IdPoblacio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function codpostals()
    {
        return $this->hasMany('App\Codpostal', 'IdPoblacio', 'IdPoblacio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empreses()
    {
        return $this->hasMany('App\Emprese', 'idPoblacio', 'IdPoblacio');
    }
}
