<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $idIdioma
 * @property integer $idAlumno
 * @property integer $nivelGenerico
 * @property integer $lectura
 * @property integer $escritura
 * @property integer $conversacion
 * @property string $comentario
 * @property string $created_at
 * @property string $updated_at
 * @property Alumne $alumne
 * @property Idiome $idiome
 * @property Idiomescertificacion[] $idiomescertificacions
 */
class alumneidiomes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idIdioma', 'idAlumno', 'nivelGenerico', 'lectura', 'escritura', 'conversacion', 'comentario', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumne()
    {
        return $this->belongsTo('App\Alumne', 'idAlumno');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function idiome()
    {
        return $this->belongsTo('App\Idiome', 'idIdioma');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function idiomescertificacions()
    {
        return $this->hasMany('App\Idiomescertificacion', 'idIdiomaAlumno');
    }
}
