<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 * @property string $created_at
 * @property string $updated_at
 */
class tests extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nombre', 'created_at', 'updated_at'];

}
