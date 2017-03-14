<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $codiqP
 * @property string $descQP
 * @property integer $idArea
 * @property string $created_at
 * @property string $updated_at
 * @property Areesprofessional $areesprofessional
 * @property Ucalumne[] $ucalumnes
 * @property Unitatscompetencia[] $unitatscompetencias
 */
class qualificacionsprofessionals extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codiqP', 'descQP', 'idArea', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function areesprofessional()
    {
        return $this->belongsTo('App\Areesprofessional', 'idArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ucalumnes()
    {
        return $this->hasMany('App\Ucalumne', 'idUC');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unitatscompetencias()
    {
        return $this->hasMany('App\Unitatscompetencia', 'idQP');
    }
}
