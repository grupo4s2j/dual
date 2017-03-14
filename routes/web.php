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


Route::group(['prefix' => 'alumno', 'middleware'=> ['web', 'alumno']],function(){
    Route::resource('alumne','\App\Http\Controllers\AlumneController');
    Route::post('alumne/{id}/updatePerfil','AlumneController@updatePerfil');
    Route::post('alumne/{id}/updateEstudiNoReglat','AlumneController@updateEstudiNoReglat');
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
});

Route::group(['prefix' => 'empresa', 'middleware'=> ['web', 'empresa']],function(){
    /*Route::get('/',function(){
        return view("empresa.index");
    });*/
    Route::get('/','EmpresaController@index');
});

Route::get('resultados', '\App\Http\Controllers\resultado_busqueda@index');



