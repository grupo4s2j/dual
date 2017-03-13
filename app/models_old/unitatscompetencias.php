<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdUC
 * @property string $CodiUC
 * @property string $DescUC
 * @property integer $idQP
 * @property Qualificacionsprofessional $qualificacionsprofessional
 */
class unitatscompetencias extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['CodiUC', 'DescUC', 'idQP'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function qualificacionsprofessional()
    {
        return $this->belongsTo('App\Qualificacionsprofessional', 'idQP', 'IdQP');
    }
}
