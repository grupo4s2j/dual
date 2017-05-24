<?php

namespace App\Http\Controllers;

use App\estudisreglats;
use Illuminate\Support\Facades\DB;
use App\alumnes;
use App\areesprofessionals;
use App\estudis;
use App\estudisnoreglats;
use App\sectors;
use App\skills;
use App\ofertes;
use App\skill_alumnes;
use App\experiencialaborals;
use App\idiomes;
use App\alumneidiomes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlumneController extends Controller
{

    public function create()
    {


        return view('scaffold-interface.alumn.create');
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request $request
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $recurso = Recurso::findOrfail($id);

        return view('recurso.edit', compact('recurso'));
    }


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


        if (Auth::check()) {
           
            $user=Auth::user();
            $id =$user->id;
            
            $alumne = alumnes::where('numAlumno', $id)->first();
            $areas = areesprofessionals::all();
            $estudi = estudis::all();
            $sector = sectors::all();
            /*$skill=skills::all();*/

            /* Skills que un usuario tiene */
            $s = $alumne->skill;

            $si = array();
            foreach ($s as $c) {
                array_push($si, $c->skill);
            }

            $skill = DB::table('skills')
                ->whereNotIn('skill', $si)
                ->get();


            $idiomes = idiomes::all();


//            $idioms= alumneidiomes::all();
            $alumneIdi = $alumne->idiomes;

            $siIdioma = array();
            foreach ($alumneIdi as $c) {
                array_push($siIdioma, $c->id);
            }

            $idiomes = DB::table('idiomes')
                ->whereNotIn('id', $siIdioma)
                ->get();

            $estudisnoreglats = $alumne->estudisnoreglats;
            $estudisreglats = $alumne->estudisreglats;
            $estudisr = $alumne->estudisR;
            $estudisn = $alumne->estudisNR;
            
            $ofertesalumnes = alumnes::where('numAlumno', $id)->first()->ofertes()->get();//->ofertes()->where('Activo', 1)->get());
           // $numofertas = $ofertaalumnes;
            //$ofertesalumnes = $ofertesalumnes->ofertes()->get();
            //$numofertas = count(alumnes::where('numAlumno', $id)->first()->ofertaalumnes()->ofertes()->where('activo', 1)->get()); //número de ofertas que tiene el alumno (consultita)
            $numofertas = count(alumnes::where('numAlumno', $id)->first()->ofertaalumnes()->where('apuntat', 1)->get());


            $exp = $alumne->experiencialaborals;
            return view('alumne.index', compact('alumne', 'estudisnoreglats', 'areas', 'estudi', 'exp', 'estudisreglats', 'skill', 's', "sector", 'idiomes', 'alumneIdi', 'estudisr', 'estudisn', 'numofertas', 'ofertesalumnes'));
        }
        return redirect('home');
    }

    public function indexBack()
    {
        $alumnes = alumnes::get();


        return view('scaffold-interface.alumn.index', compact('alumnes'));

    }

    public function viewAlumn($id)
    {
        if (Auth::check() and Auth::user()->rol==0) {

            $alumne = alumnes::where('id', $id)->first();
            $areas = areesprofessionals::all();
            $estudi = estudis::all();
            $sector = sectors::all();
            /*$skill=skills::all();*/
            /* Skills que un usuario tiene */
            $s = $alumne->skill;
            $si = array();
            foreach ($s as $c) {
                array_push($si, $c->skill);
            }

            $skill = DB::table('skills')
                ->whereNotIn('skill', $si)
                ->get();


            $idiomes = idiomes::all();


//            $idioms= alumneidiomes::all();
            $alumneIdi = $alumne->idiomes;

            $siIdioma = array();
            foreach ($alumneIdi as $c) {
                array_push($siIdioma, $c->id);
            }

            $idiomes = DB::table('idiomes')
                ->whereNotIn('id', $siIdioma)
                ->get();

            $estudisnoreglats = $alumne->estudisnoreglats;
            $estudisreglats = $alumne->estudisreglats;


            $estudisr = $alumne->estudisR;
            $estudisn = $alumne->estudisNR;

            $exp = $alumne->experiencialaborals;
            return view('alumne.index', compact('alumne', 'estudisnoreglats', 'areas', 'estudi', 'exp', 'estudisreglats', 'skill', 's', "sector", 'idiomes', 'alumneIdi', 'estudisr', 'estudisn'));
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
        $alumne = alumnes::findOrfail($id);
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
    public function updateEstudiNoReglat($id, Request $request)
    {

        $esnorec = new estudisnoreglats();
        $esnorec->fill($request->all());
        $alumne = alumnes::findOrfail($id);
        $esnorec->idAlumno = $alumne->id;
        $esnorec->save();
        return redirect('alumne');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function deleteEstudiNoReglat($id, Request $request)
    {

        $esnorec = estudisnoreglats::findOrfail($id);
        $esnorec->delete();
        return redirect('alumne');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function updateEstudiReglat($id, Request $request)
    {

        $esrec = new estudisreglats();
        $esrec->fill($request->all());
        $alumne = alumnes::findOrfail($id);
        $esrec->idAlumno = $alumne->id;
        $esrec->save();
        return redirect('alumne');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function deleteEstudiReglat($id, $idAlumno, Request $request)
    {
        $esrec = estudisreglats::where('idEstudio', '=', $id)
            ->where('idAlumno', '=', $idAlumno);
        $esrec->delete();
        return redirect('alumne');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function updateAptitud($id, Request $request)
    {

        $aptitud = new skill_alumnes();
        $aptitud->fill($request->all());
        /* ID ALUMNO*/
        $alumne = alumnes::findOrfail($id);
        $aptitud->idAlumno = $alumne->id;

        $aptitud->save();
        return redirect('alumne');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function deleteAptitud($id, $idAlumno, Request $request)
    {

        $aptitud = skill_alumnes::where('idSkill', '=', $id)
            ->where('idAlumno', '=', $idAlumno);
        $aptitud->delete();
        return redirect('alumne');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function updateIdiome($id, Request $request)
    {

        $almnIdioma = new alumneidiomes();
        $almnIdioma->fill($request->all());
        /* ID ALUMNO*/
        $alumne = alumnes::findOrfail($id);
        $almnIdioma->idAlumno = $alumne->id;

        $almnIdioma->save();
        return redirect('alumne');
    }

    public function deleteIdioma($id, $idAlumno, Request $request)
    {

        $almnIdioma = alumneidiomes::where('idIdioma', '=', $id)
            ->where('idAlumno', '=', $idAlumno);
        $almnIdioma->delete();
        return redirect('alumne');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function updateExp($id, Request $request)
    {

        $exp = new experiencialaborals();
        $exp->fill($request->all());
        /* ID ALUMNO*/
        $alumne = alumnes::findOrfail($id);
        $exp->idAlumno = $alumne->id;

        $exp->save();
        return redirect('alumne');
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function deleteExp($id, Request $request)
    {
        $dExp = experiencialaborals::findOrfail($id);
        $dExp->delete();
        return redirect('alumne');
    }

    public function activaCV($id, Request $request){
        $alumne = alumnes::find($id); 
        if($alumne->consentimientoDatos == 0){
            $alumne->consentimientoDatos = 1;
        }
        else if($alumne->consentimientoDatos == 1){
            $alumne->consentimientoDatos = 0;
        }
        $alumne->save();
        return redirect()->to('/alumne');
    }


}
