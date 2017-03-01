<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $IdIdiomaCertificacions
 * @property integer $idIdiomaAlumne
 * @property string $DescCertificacio
 * @property string $Equivalencia
 * @property Alumneidiome $alumneidiome
 */
class idiomescertificacions extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idIdiomaAlumne', 'DescCertificacio', 'Equivalencia'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumneidiome()
    {
        return $this->belongsTo('App\Alumneidiome', 'idIdiomaAlumne', 'IdAlumneIdioma');
    }
}
