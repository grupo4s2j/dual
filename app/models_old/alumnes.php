<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
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
 * @property string $pwd
 * @property string $foto
 * @property Poblacion $poblacion
 * @property Provincy $provincy
 * @property Altresdadesalumne[] $altresdadesalumnes
 * @property Alumneidiome[] $alumneidiomes
 * @property Carnetalumne[] $carnetalumnes
 * @property Estudisnoreglat[] $estudisnoreglats
 * @property Estudisreglat[] $estudisreglats
 * @property Experiencialaboral[] $experiencialaborals
 * @property Ofertaalumne[] $ofertaalumnes
 * @property Ucalumne[] $ucalumnes
 * @property Vehiclesalumne[] $vehiclesalumnes
 */
class alumnes extends Model
{
    /**
     * @var array
     */
    //protected $fillable = ['NumAlumne', 'DNI', 'Nom', 'Cognom1', 'Cognom2', 'ConsentimentDades', 'email', 'telf1', 'telf2', 'Adreca', 'idPoblacio', 'idProvincia', 'CP', 'pwd', 'foto'];
    
    protected $fillable = ['numAlumno', 'DNI', 'nombre', 'apellido1', 'apellido2', 'consentimientoDatos', 'email', 'telf1', 'telf2', 'direccion', 'idPoblacio', 'idProvincia', 'CP', 'pwd', 'foto', 'created_at', 'updated_at', 'activo'];

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
    public function carnetalumnes()
    {
        return $this->hasMany('App\Carnetalumne', 'idAlumne', 'IdAlumne');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudisnoreglats()
    {
        return $this->hasMany('App\Estudisnoreglat', 'idAlumne', 'IdAlumne');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estudisreglats()
    {
        return $this->hasMany('App\Estudisreglat', 'idAlumne', 'IdAlumne');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function experiencialaborals()
    {
        return $this->hasMany('App\Experiencialaboral', 'idAlumne', 'IdAlumne');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ofertaalumnes()
    {
        return $this->hasMany('App\ofertaalumnes', 'idAlumne', 'IdAlumne');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ucalumnes()
    {
        return $this->hasMany('App\Ucalumne', 'idAlumne', 'IdAlumne');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehiclesalumnes()
    {
        return $this->hasMany('App\Vehiclesalumne', 'idAlumne', 'IdAlumne');
    }
    
    public function ofertes()
    {
        return $this->belongsToMany('App\ofertes', 'ofertaalumnes', 'idAlumno', 'idOferta');
    }

    public function skill()
    {
        return $this->belongsToMany('App\skills', 'skill_alumnes', 'idAlumno', 'idSkill');
    }
    
    public function estudis(){
        return $this->belongsToMany('App\estudis', 'estudisreglats', 'idAlumno', 'idEstudio');
    }
    
    public function idiomas(){
        return $this->belongsToMany('App\idiomes', 'alumneidiomes', 'idAlumno', 'idIdioma');
    }
}
