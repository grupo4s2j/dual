<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdProvincia
 * @property string $Provincia
 * @property Alumne[] $alumnes
 * @property Emprese[] $empreses
 * @property Poblacion[] $poblacions
 */
class provincies extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['Provincia'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnes()
    {
        return $this->hasMany('App\Alumne', 'idProvincia', 'IdProvincia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empreses()
    {
        return $this->hasMany('App\Emprese', 'idProvincia', 'IdProvincia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function poblacions()
    {
        return $this->hasMany('App\Poblacion', 'idProvincia', 'IdProvincia');
    }
}
