<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Entidadorganizativas.
 *
 * @author  The scaffold-interface created at 2017-02-09 03:01:52pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Entidadorganizativas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('entidadorganizativas',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('nombre');
        
        $table->String('direccion');
        
        $table->String('geolocalizacion');
        
        $table->boolean('activo');
        
        /**
         * Foreignkeys section
         */
        
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('entidadorganizativas');
    }
}
