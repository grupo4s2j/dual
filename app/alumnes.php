<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdAlumne
 * @property integer $NumAlumne
 * @property string $DNI
 * @property string $Nom
 * @property string $Cognom1
 * @property string $Cognom2
 * @property boolean $ConsentimentDades
 * @property string $email
 * @property string $telf1
 * @property string $telf2
 * @property string $Adreca
 * @property integer $idPoblacio
 * @property integer $idProvincia
 * @property string $CP
 * @property string $user
 * @property string $pwd
 * @property string $foto
 * @property Poblacion $poblacion
 * @property Provincy $provincy
 * @property Altresdadesalumne[] $altresdadesalumnes
 * @property Alumneidiome[] $alumneidiomes
 * @property Vehiclesalumne[] $vehiclesalumnes
 */
class alumnes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['IdAlumne', 'NumAlumne', 'DNI', 'Nom', 'Cognom1', 'Cognom2', 'ConsentimentDades', 'email', 'telf1', 'telf2', 'Adreca', 'idPoblacio', 'idProvincia', 'CP', 'user', 'pwd', 'foto'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function poblacion()
    {
        return $this->belongsTo('App\Poblacion', 'idPoblacio', 'IdPoblacio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provincy()
    {
        return $this->belongsTo('App\Provincy', 'idProvincia', 'IdProvincia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function altresdadesalumnes()
    {
        return $this->hasMany('App\Altresdadesalumne', 'idalumne', 'IdAlumne');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumneidiomes()
    {
        return $this->hasMany('App\Alumneidiome', 'IdAlumne', 'IdAlumne');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiclesalumnes()
    {
        return $this->hasMany('App\Vehiclesalumne', 'idAlumne', 'IdAlumne');
    }
}
