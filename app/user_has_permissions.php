<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $user_id
 * @property integer $permission_id
 */
class user_has_permissions extends Model
{
    /**
     * @var array
     */
    protected $fillable = [];

}
