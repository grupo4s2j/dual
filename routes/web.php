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
    Route::post('/{id}/updatePerfil','AlumneController@updatePerfil');

    Route::get('/{id}/deleteEstudiNoReglat','AlumneController@deleteEstudiNoReglat');
    Route::post('/{id}/updateEstudiNoReglat','AlumneController@updateEstudiNoReglat');

    Route::get('/{id}/{idAlumno}/deleteEstudiReglat','AlumneController@deleteEstudiReglat');
    Route::post('/{id}/updateEstudiReglat','AlumneController@updateEstudiReglat');

    Route::get('/{id}/{idAlumno}/deleteAptitud','AlumneController@deleteAptitud');
    Route::post('/{id}/updateAptitud','AlumneController@updateAptitud');

    Route::post('/{id}/updateIdiome','AlumneController@updateIdiome');
    Route::get('/{id}/{idAlumno}/deleteIdioma','AlumneController@deleteIdioma');

    Route::post('/{id}/updateExp','AlumneController@updateExp');
    Route::get('/{id}/deleteExp','AlumneController@deleteExp');
    Route::get('/{id}/activaCV','AlumneController@activaCV');


    Route::post('/{id}/updateVehicleAlumne','AlumneController@updateVehicleAlumne');
    Route::get('/{id}/{idAlumno}/deleteVehicleAlumne','AlumneController@+deleteVehicleAlumne');

    Route::post('/{id}/updateCarneAlumne','AlumneController@updateCarneAlumne');
    Route::get('/{id}/{idAlumno}/deleteCarneAlumne','AlumneController@deleteCarneAlumne');
    Route::post('ofertainfo','AlumneController@getInfoOferta');
    Route::post('apuntar','AlumneController@apuntaAlumneOferta');
    Route::post('desapuntar','AlumneController@desapuntaAlumneOferta');
});

Route::group(['prefix' => 'admin', 'middleware'=> ['web', 'admin']],function(){
    Route::get('/',function(){
        return view("scaffold-interface.dashboard.dashboard");

    });
        
    Route::post('empresa/alumno','MatchingController@sendEmail');    
        
    Route::post('alumne/createAlumne','OtrosController@createAlumne');
    Route::post('empresa/createEmpresa','OtrosController@createEmpresa');


    Route::get('/otros', function(){return view("scaffold-interface.dashboard.otros");});

    Route::get('/otros/estudis','OtrosController@indexEstudis');
    Route::get('/otros/estudis/delete/{id}','OtrosController@deleteEstudis');
    Route::get('/otros/estudis/create/','OtrosController@storeEstudis');

    Route::get('/otros/idiomes','OtrosController@indexIdiomes');
    Route::get('/otros/idiomes/delete/{id}','OtrosController@deleteIdiomes');
    Route::get('/otros/idiomes/create/','OtrosController@storeIdiomes');

    Route::get('/otros/sector','OtrosController@indexSectors');
    Route::get('/otros/sector/delete/{id}','OtrosController@deleteSectors');
    Route::get('/otros/sector/create/','OtrosController@storeSector');


    Route::get('/otros/skills','OtrosController@indexSkills');
    Route::get('/otros/skills/delete/{id}','OtrosController@deleteSkills');
    Route::get('/otros/skills/create/','OtrosController@storeSkills');

    Route::get('/otros/poblacions','OtrosController@indexPoblacions');
    Route::get('/otros/poblacions/delete/{id}','OtrosController@deletePoblacions');
    Route::get('/otros/poblacions/create/','OtrosController@storePoblacions');

    Route::get('/otros/provincies','OtrosController@indexProvincies');
    Route::get('/otros/provincies/delete/{id}','OtrosController@deleteProvincies');
    Route::get('/otros/provincies/create/','OtrosController@storeProvincies');

    Route::get('/otros/familiesprofesionals','OtrosController@indexFamiliesprofesionals');
    Route::get('/otros/familiesprofesionals/delete/{id}','OtrosController@deleteFamiliesprofesionals');
    Route::get('/otros/familiesprofesionals/create/','OtrosController@storeFamiliesprofesionals');

    Route::get('mailbox',function(){
        return view("scaffold-interface.mailbox.mailbox");
    });
    Route::get('alumne','AlumneController@indexBack');
    Route::get('alumne/view/{id}','AlumneController@viewAlumn');
//    Route::get('alumne/{id}/delete','AlumneController@destroy');
//    Route::get('alumne/{id}/deleteMsg','AlumneController@DeleteMsg');
    
    Route::get('compose',function(){
        return view("scaffold-interface.mailbox.compose");
    });
    Route::get('readmail',function(){
        return view("scaffold-interface.mailbox.read-mail");
    });
    Route::get('regempresa',function(){
        return view("scaffold-interface.empresa.indexRegistro");
    });
    Route::get('empresa','EmpresaController@indexBack');
    Route::get('empresa/view/{id}','EmpresaController@viewEmp');

    Route::get('oferta','OtrosController@getOfertas');
    Route::get('empresa/oferta/{id}', 'MatchingController@matching');
//    Route::group(['prefix' => 'empresa'],function(){
//        Route::get('/{id}','EmpresaController@indexAdmin');
//    });
    Route::group(['prefix' => 'alumne'],function(){
        Route::get('/{id}','AlumneController@index');
    });
});

Route::group(['prefix' => 'empresa', 'middleware'=> ['web', 'empresa']],function(){
    //Route::get('/{tab?}','EmpresaController@index');
    Route::get('/','EmpresaController@index');
    Route::post('update','EmpresaController@updateForm');
    Route::get('prueba','EmpresaController@testing');
    Route::post('prueba','EmpresaController@testingPost');
    Route::post('sectorial','EmpresaController@createSectorEmpresa');
    Route::post('poblacion/change','EmpresaController@getPoblacionByProvincia');
    //Route::get('sector/{sector}/{empresa}','EmpresaController@deleteSectorEmpresa');
    Route::post('sector/delete','EmpresaController@deleteSectorEmpresa');
    Route::post('oferta/delete','EmpresaController@deleteOfertaEmpresa');
    //Route::get('oferta/{oferta}/{empresa}','EmpresaController@deleteOfertaEmpresa');
    
    //Route::get('match','MatchingController@matching');
});

Route::get('resultados', '\App\Http\Controllers\resultado_busqueda@index');




