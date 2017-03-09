<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $codiGestor
 * @property string $nombreSocial
 * @property string $nombreComercial
 * @property string $telf
 * @property string $personaContacto
 * @property string $email
 * @property string $created_at
 * @property string $updated_at
 */
class gestors extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['codiGestor', 'nombreSocial', 'nombreComercial', 'telf', 'personaContacto', 'email', 'created_at', 'updated_at'];

}
