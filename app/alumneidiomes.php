<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdAlumneIdioma
 * @property integer $idIdioma
 * @property integer $IdAlumne
 * @property integer $NivellGeneric
 * @property integer $Lectura
 * @property integer $Escriptura
 * @property integer $Conversa
 * @property string $Comentari
 * @property Alumne $alumne
 * @property Idiome $idiome
 * @property Idiomescertificacion[] $idiomescertificacions
 */
class alumneidiomes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idIdioma', 'IdAlumne', 'NivellGeneric', 'Lectura', 'Escriptura', 'Conversa', 'Comentari'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumne()
    {
        return $this->belongsTo('App\Alumne', 'IdAlumne', 'IdAlumne');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function idiome()
    {
        return $this->belongsTo('App\Idiome', 'idIdioma', 'IdIdioma');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function idiomescertificacions()
    {
        return $this->hasMany('App\Idiomescertificacion', 'idIdiomaAlumne', 'IdAlumneIdioma');
    }
}
