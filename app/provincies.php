<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $provincia
 * @property string $created_at
 * @property string $updated_at
 * @property Alumne[] $alumnes
 * @property Emprese[] $empreses
 * @property Poblacion[] $poblacions
 */
class provincies extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['provincia', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnes()
    {
        return $this->hasMany('App\Alumne', 'idProvincia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empreses()
    {
        return $this->hasMany('App\Emprese', 'idProvincia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function poblacions()
    {
        return $this->hasMany('App\poblacions', 'idProvincia');
    }
}
