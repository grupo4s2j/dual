<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $role_id
 * @property integer $user_id
 */
class user_has_roles extends Model
{
    /**
     * @var array
     */
    protected $fillable = [];

}
