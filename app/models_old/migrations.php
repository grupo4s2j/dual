<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $migration
 * @property integer $batch
 */
class migrations extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['migration', 'batch'];

}
