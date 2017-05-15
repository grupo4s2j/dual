<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//categoria Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('categoria','\App\Http\Controllers\CategoriaController');
  Route::post('categoria/{id}/update','\App\Http\Controllers\CategoriaController@update');
  Route::get('categoria/{id}/delete','\App\Http\Controllers\CategoriaController@destroy');
  Route::get('categoria/{id}/deleteMsg','\App\Http\Controllers\CategoriaController@DeleteMsg');
});


Route::group(['prefix' => 'alumne', 'middleware'=> ['web', 'alumno']],function(){
    Route::resource('/','\App\Http\Controllers\AlumneController');
    Route::get('/{id}/deleteEstudiNoReglat','AlumneController@deleteEstudiNoReglat');
    Route::post('/{id}/updatePerfil','AlumneController@updatePerfil');
    Route::post('/{id}/updateEstudiNoReglat','AlumneController@updateEstudiNoReglat');

    Route::get('/{id}/deleteEstudiReglat','AlumneController@deleteEstudiReglat');
    Route::post('/{id}/updateEstudiReglat','AlumneController@updateEstudiReglat');

    Route::get('/{id}/{idAlumno}/deleteAptitud','AlumneController@deleteAptitud');
    Route::post('/{id}/updateAptitud','AlumneController@updateAptitud');

    Route::post('/{id}/updateExperiencia','AlumneController@updateExperiencia');

});

Route::group(['prefix' => 'admin', 'middleware'=> ['web', 'admin']],function(){
    Route::get('mailbox',function(){
        return view("scaffold-interface.mailbox.mailbox");
    });
    Route::get('compose',function(){
        return view("scaffold-interface.mailbox.compose");
    });
    Route::get('readmail',function(){
        return view("scaffold-interface.mailbox.read-mail");
    });
    Route::get('regempresa',function(){
        return view("scaffold-interface.empresa.indexRegistro");
    });
    Route::group(['prefix' => 'empresa'],function(){
        Route::get('/{id}','EmpresaController@indexAdmin');
    });
    Route::group(['prefix' => 'alumne'],function(){
        Route::get('/{id}','AlumneController@index');
    });
});

Route::group(['prefix' => 'empresa', 'middleware'=> ['web', 'empresa']],function(){
    Route::get('/','EmpresaController@index');
    Route::post('empresa','EmpresaController@updateForm');
    Route::get('prueba','EmpresaController@testing');
});

Route::get('resultados', '\App\Http\Controllers\resultado_busqueda@index');



