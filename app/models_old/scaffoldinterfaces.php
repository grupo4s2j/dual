<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $package
 * @property string $migration
 * @property string $model
 * @property string $controller
 * @property string $views
 * @property string $tablename
 * @property string $created_at
 * @property string $updated_at
 */
class scaffoldinterfaces extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['package', 'migration', 'model', 'controller', 'views', 'tablename', 'created_at', 'updated_at'];

}
