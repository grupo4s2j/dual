<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdCodPostal
 * @property string $CodPostal
 * @property integer $IdPoblacio
 * @property Poblacion $poblacion
 */
class codpostals extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['CodPostal', 'IdPoblacio'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function poblacion()
    {
        return $this->belongsTo('App\Poblacion', 'IdPoblacio', 'IdPoblacio');
    }
}
