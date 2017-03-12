<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $permission_id
 * @property integer $role_id
 */
class role_has_permissions extends Model
{
    /**
     * @var array
     */
    protected $fillable = [];

}
