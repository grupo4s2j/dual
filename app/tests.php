<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 */
class tests extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nombre'];

}
