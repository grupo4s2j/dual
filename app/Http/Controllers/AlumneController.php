<?php

namespace App\Http\Controllers;

use App\alumnes;
use App\estudisnoreglats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlumneController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {
        if(Auth::check()) {
            if ($id == null) {

                $alumne = alumnes::findOrfail(1);
            } else {
                $alumne = alumnes::where('id', $id)->first();
            }
            $estudisnoreglats= $alumne->estudisnoreglats;
            return view('alumne.index',compact('alumne', 'estudisnoreglats'));
        }
        return redirect('home');


    }
    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request $request
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function updatePerfil($id, Request $request)
    {
        $alumne = alumnes ::findOrfail($id);
        //$alumne->DNI = $request->DNI;
      $alumne->fill($request->all());
//
//        if ($request->hasFile('img')) {
//            echo "<script>alert('Hay imagen')</script>";
//            $file = $request->file('img');
//            $nombreimagen = '/img/alumnes/' . $file->getClientOriginalName();
//            \Storage::disk('local')->put($nombreimagen, \File::get($file));
//
//
//            $alumne->img = $nombreimagen;
//        }
//

        $alumne->save();

        return redirect('alumne');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function updateEstudiNoReglat($id, Request $request){
        
        $esnorec= new estudisnoreglats();
        $esnorec->fill($request->all());
        $alumne = alumnes ::findOrfail($id);
        $esnorec->idAlumno=$alumne->id;
        $esnorec->save();
        return redirect('alumne');
    }
    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function deleteEstudiNoReglat($id, Request $request){

        $esnorec= estudisnoreglats::findOrfail($id);
        $esnorec->delete();
        return redirect('alumne');
    }
}
