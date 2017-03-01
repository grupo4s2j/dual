<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdQP
 * @property string $CodiqP
 * @property string $DescQP
 * @property integer $idArea
 * @property Areesprofessional $areesprofessional
 * @property Ucalumne[] $ucalumnes
 * @property Unitatscompetencia[] $unitatscompetencias
 */
class qualificacionsprofessionals extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['CodiqP', 'DescQP', 'idArea'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function areesprofessional()
    {
        return $this->belongsTo('App\Areesprofessional', 'idArea', 'IdArea');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ucalumnes()
    {
        return $this->hasMany('App\Ucalumne', 'idUC', 'IdQP');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unitatscompetencias()
    {
        return $this->hasMany('App\Unitatscompetencia', 'idQP', 'IdQP');
    }
}
