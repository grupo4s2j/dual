<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $idSkill
 * @property string $skill
 * @property SkillAlumne[] $skillAlumnes
 */
class skills extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['skill'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skillAlumnes()
    {
        return $this->hasMany('App\SkillAlumne', 'idskill', 'idSkill');
    }
}
