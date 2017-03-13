<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $migration
 * @property integer $batch
 * @property string $created_at
 * @property string $updated_at
 */
class migrations extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['migration', 'batch', 'created_at', 'updated_at'];

}
