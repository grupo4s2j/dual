<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 */
class users extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'remember_token', 'admin', 'empresa', 'alumno', 'created_at', 'updated_at', 'rol'];
}
