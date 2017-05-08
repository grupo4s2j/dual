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

    Route::post('/{id}/updateIdiome','AlumneController@updateIdiome');
    Route::get('/{id}/deleteIdioma','AlumneController@deleteIdioma');


});

Route::group(['prefix' => 'admin', 'middleware'=> ['web', 'admin']],function(){
    Route::get('/',function(){
        return view("scaffold-interface.dashboard.dashboard");
    });
    Route::get('mailbox',function(){
        return view("scaffold-interface.mailbox.mailbox");
    });
    Route::get('alumne',function(){
        return view("scaffold-interface.alumne.alumne");
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
    Route::get('empresa',function(){
        return view("scaffold-interface.empresa.empresa");
    });
    Route::get('oferta',function(){
        return view("scaffold-interface.ofertas.oferta");
    });
    Route::group(['prefix' => 'empresa'],function(){
        Route::get('/{id}','EmpresaController@indexAdmin');
    });
    Route::group(['prefix' => 'alumne'],function(){
        Route::get('/{id}','AlumneController@index');
    });
});

Route::group(['prefix' => 'empresa', 'middleware'=> ['web', 'empresa']],function(){
    /*Route::get('/',function(){
        return view("empresa.index");
    });*/
    Route::get('/','EmpresaController@index');
});

Route::get('resultados', '\App\Http\Controllers\resultado_busqueda@index');



