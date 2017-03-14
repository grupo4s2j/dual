<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $codPostal
 * @property integer $idPoblacion
 * @property string $created_at
 * @property string $updated_at
 * @property Poblacion $poblacion
 */
class codpostals extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codPostal', 'idPoblacion', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function poblacion()
    {
        return $this->belongsTo('App\Poblacion', 'idPoblacion');
    }
}
