<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $codiUC
 * @property string $descUC
 * @property integer $idQP
 * @property string $created_at
 * @property string $updated_at
 * @property Qualificacionsprofessional $qualificacionsprofessional
 */
class unitatscompetencias extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codiUC', 'descUC', 'idQP', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function qualificacionsprofessional()
    {
        return $this->belongsTo('App\Qualificacionsprofessional', 'idQP');
    }
}
