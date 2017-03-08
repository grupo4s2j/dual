<?php

namespace App\Http\Controllers;

use App\alumnes;
use Illuminate\Http\Request;

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
    public function index()
    {
        $alumne = alumnes ::findOrfail(1);
        return view('alumne.index',compact('alumne'));
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

//        $alumne->nombre = $request->nombre;
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
//        $alumne->color = $request->color;
//

        $alumne->save();

        return redirect('alumne');
    }
}
