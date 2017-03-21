<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $numAlumno
 * @property string $DNI
 * @property string $nombre
 * @property string $apellido1
 * @property string $apellido2
 * @property boolean $consentimientoDatos
 * @property string $email
 * @property string $telf1
 * @property string $telf2
 * @property string $direccion
 * @property integer $idPoblacio
 * @property integer $idProvincia
 * @property string $CP
 * @property string $pwd
 * @property string $foto
 * @property string $created_at
 * @property string $updated_at
 * @property Poblacion $poblacion
 * @property Provincy $provincy
 * @property Altresdadesalumne[] $altresdadesalumnes
 * @property Alumneidiome[] $alumneidiomes
 * @property Carnetalumne[] $carnetalumnes
 * @property Estudisnoreglat[] $estudisnoreglats
 * @property Estudisreglat[] $estudisreglats
 * @property Experiencialaboral[] $experiencialaborals
 * @property Ofertaalumne[] $ofertaalumnes
 * @property SkillAlumne[] $skillAlumnes
 * @property Ucalumne[] $ucalumnes
 * @property Vehiclesalumne[] $vehiclesalumnes
 */
class alumnes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['numAlumno', 'DNI', 'nombre', 'apellido1', 'apellido2', 'consentimientoDatos', 'email', 'telf1', 'telf2', 'direccion', 'idPoblacio', 'idProvincia', 'CP', 'pwd', 'foto', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function poblacion()
    {
        return $this->belongsTo('App\Poblacion', 'idPoblacio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provincy()
    {
        return $this->belongsTo('App\Provincy', 'idProvincia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function altresdadesalumnes()
    {
        return $this->hasMany('App\Altresdadesalumne', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumneidiomes()
    {
        return $this->hasMany('App\Alumneidiome', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carnetalumnes()
    {
        return $this->hasMany('App\Carnetalumne', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudisnoreglats()
    {
        return $this->hasMany('App\estudisnoreglats', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudisreglats()
    {
        return $this->hasMany('App\estudisreglats', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function experiencialaborals()
    {
        return $this->hasMany('App\Experiencialaboral', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaalumnes()
    {
        return $this->hasMany('App\Ofertaalumne', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skillAlumnes()
    {
        return $this->hasMany('App\SkillAlumne', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ucalumnes()
    {
        return $this->hasMany('App\Ucalumne', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiclesalumnes()
    {
        return $this->hasMany('App\Vehiclesalumne', 'idAlumno');
    }
}
