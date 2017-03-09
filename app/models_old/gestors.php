<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdGestor
 * @property string $CodiGestor
 * @property string $NomSocial
 * @property string $NomComercial
 * @property string $Telf
 * @property string $PersonaContacte
 * @property string $email
 */
class gestors extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['CodiGestor', 'NomSocial', 'NomComercial', 'Telf', 'PersonaContacte', 'email'];

}
