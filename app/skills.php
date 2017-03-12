<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $skill
 * @property string $created_at
 * @property string $updated_at
 * @property SkillAlumne[] $skillAlumnes
 */
class skills extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['skill', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skillAlumnes()
    {
        return $this->hasMany('App\SkillAlumne', 'idSkill');
    }
}
