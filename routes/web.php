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

Route::group(['middleware'=> 'web'],function(){
});
//categoria Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('categoria','\App\Http\Controllers\CategoriaController');
  Route::post('categoria/{id}/update','\App\Http\Controllers\CategoriaController@update');
  Route::get('categoria/{id}/delete','\App\Http\Controllers\CategoriaController@destroy');
  Route::get('categoria/{id}/deleteMsg','\App\Http\Controllers\CategoriaController@DeleteMsg');
});


Route::group(['middleware'=> 'web'],function(){

    Route::resource('alumne','\App\Http\Controllers\AlumneController');
    Route::post('alumne/{id}/updatePerfil','AlumneController@updatePerfil');

        Route::post('alumne/{id}/updateEstudiNoReglat','AlumneController@updateEstudiNoReglat');
});


Route::group(['middleware'=> 'web'],function(){

});

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});


Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
	 Route::get('mailbox',function(){
        return view("scaffold-interface.mailbox.mailbox");
    });
});

Route::group(['middleware'=> 'web'],function(){
	 Route::get('compose',function(){
        return view("scaffold-interface.mailbox.compose");
    });
});

Route::group(['middleware'=> 'web'],function(){
	 Route::get('readmail',function(){
        return view("scaffold-interface.mailbox.read-mail");
	 });
});

Route::group(['middleware'=> 'web'],function(){
	 Route::get('regempresa',function(){
        return view("scaffold-interface.empresa.indexRegistro");
    });
});

Route::group(['middleware'=> 'web'],function(){
    Route::get('empresa',function(){
        return view("empresa.index");
    });
    Route::get('empresa2',function(){
        return view("empresa.index2");
    });
    Route::get('ofertas',function(){
        return view("empresa.ofertas");
    });
});

Route::get('resultados', '\App\Http\Controllers\resultado_busqueda@index');



