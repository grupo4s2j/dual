<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $idskills_alumne
 * @property integer $idskill
 * @property integer $idAlumne
 * @property Alumne $alumne
 * @property Skill $skill
 */
class skill_alumnes extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idskill', 'idAlumne'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumne()
    {
        return $this->belongsTo('App\Alumne', 'idAlumne', 'IdAlumne');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function skill()
    {
        return $this->belongsTo('App\Skill', 'idskill', 'idSkill');
    }
}
