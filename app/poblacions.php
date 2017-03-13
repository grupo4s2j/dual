<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $poblacio
 * @property integer $idProvincia
 * @property string $created_at
 * @property string $updated_at
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
    protected $fillable = ['poblacio', 'idProvincia', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provincy()
    {
        return $this->belongsTo('App\Provincy', 'idProvincia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnes()
    {
        return $this->hasMany('App\Alumne', 'idPoblacio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function codpostals()
    {
        return $this->hasMany('App\Codpostal', 'idPoblacion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empreses()
    {
        return $this->hasMany('App\Emprese', 'idPoblacio');
    }
}
