<?php

namespace App\Http\Controllers;

use App\estudisreglats;
use App\tipuscarnets;
use App\tipusvehicles;
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
use App\vehiclesalumnes;
use App\carnetalumnes;
use App\poblacions;
use App\provincies;
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
//            Formulario Perfil Alumno
            $alumne = alumnes::where('numAlumno', $id)->first();


//            Formulario Estudios
            $estudi = estudis::all();
            $estudisnoreglats = $alumne->estudisnoreglats;
            $estudisreglats = $alumne->estudisreglats;
            $estudisr = $alumne->estudisR;
            $estudisn = $alumne->estudisNR;

//           Formulario Aptitudes
            $skillAlumne = $alumne->skill;
            $si = array();
            foreach ($skillAlumne as $c) {
                array_push($si, $c->skill);
            }
            $skill = DB::table('skills')
                ->whereNotIn('skill', $si)
                ->get();

//            Formulario Experiencia
            $exp = $alumne->experiencialaborals;
            $sector = sectors::all();
            $areas = areesprofessionals::all();

           // $alumne = alumnes::where('numAlumno', $id)->first()
            $ofertas = alumnes::where('numAlumno', $id)->first()->ofertes()->where('activo', "1")->get();

            //$ofertas = ofertes::find($alumne->id)->where('activo', '=', '1');
           // dd($ofertas->ofertaalumnes);
            $Alvehicle= $alumne->vehicle;
            $siVehicle = array();
            foreach ($Alvehicle as $c) {
                array_push($siVehicle, $c->id);
            }
            $tVehicle= DB::table('tipusvehicles')
                ->whereNotIn('id', $siVehicle)
                ->get();

            $Alcarne= $alumne->carnets;
            $siCarne = array();
            foreach ($Alcarne as $c) {
                array_push($siCarne, $c->id);
            }
            $tCarne= DB::table('tipuscarnets')
                ->whereNotIn('id', $siCarne)
                ->get();
            $ofertesalumno = "";

//            Formulario Idiomas Alumno
            $alumneIdi = $alumne->idiomes;
            $siIdioma = array();
            foreach ($alumneIdi as $c) {
                array_push($siIdioma, $c->id);
            }
            $idiomes = DB::table('idiomes')
                ->whereNotIn('id', $siIdioma)
                ->get();

            return view('alumne.index', compact('alumne', 'estudisnoreglats', 'areas', 'estudi', 'exp', 'estudisreglats', 'skill', 's', "sector", 'idioms',
                'idiomes', 'alumneIdi', 'estudisr', 'estudisn', 'Alvehicle','Alcarne', 'tVehicle', 'tCarne', 'ofertas'));
        }
        return view('alumne.index', compact('alumne', 'estudisnoreglats', 'areas', 'estudi', 'exp', 'estudisreglats', 'skill', 's', "sector", 'idioms',
            'idiomes', 'alumneIdi', 'estudisr', 'estudisn', 'Alvehicle','Alcarne', 'tVehicle', 'tCarne', 'ofertas'));
    }

    public function indexBack()
    {
        $alumne = alumnes::get();
        $provincias = provincies::all();
        $poblaciones = poblacions::all();

        return view('scaffold-interface.alumn.index', compact('alumne', 'poblaciones', 'provincias'));

    }

    public function viewAlumn($id)
    {
        if (Auth::check() and Auth::user()->rol==0) {

//            Formulario Perfil Alumno
            $alumne = alumnes::where('id', $id)->first();


//            Formulario Estudios
            $estudi = estudis::all();
            $estudisnoreglats = $alumne->estudisnoreglats;
            $estudisreglats = $alumne->estudisreglats;
            $estudisr = $alumne->estudisR;
            $estudisn = $alumne->estudisNR;

//           Formulario Aptitudes
            $skillAlumne = $alumne->skill;
            $si = array();
            foreach ($skillAlumne as $c) {
                array_push($si, $c->skill);
            }
            $skill = DB::table('skills')
                ->whereNotIn('skill', $si)
                ->get();

//            Formulario Experiencia
            $ofertas = alumnes::where('id', $id)->first()->ofertes()->where('activo', "1")->get();
            $exp = $alumne->experiencialaborals;
            $sector = sectors::all();
            $areas = areesprofessionals::all();

//            Formulario Vehiculo Alumno
            $Alvehicle= $alumne->vehicle;
            $siVehicle = array();
            foreach ($Alvehicle as $c) {
                array_push($siVehicle, $c->id);
            }
            $tVehicle= DB::table('tipusvehicles')
                ->whereNotIn('id', $siVehicle)
                ->get();

            $Alcarne= $alumne->carnets;
            $siCarne = array();
            foreach ($Alcarne as $c) {
                array_push($siCarne, $c->id);
            }
            $tCarne= DB::table('tipuscarnets')
                ->whereNotIn('id', $siCarne)
                ->get();

           // Formulario Idiomas Alumno
            $alumneIdi = $alumne->idiomes;
            $siIdioma = array();
            foreach ($alumneIdi as $c) {
                array_push($siIdioma, $c->id);
            }
            $idiomes = DB::table('idiomes')
                ->whereNotIn('id', $siIdioma)
                ->get();
            return view('alumne.index', compact('alumne', 'estudisnoreglats', 'areas', 'estudi', 'exp', 'estudisreglats', 'skill', 's', "sector", 'idioms',
                'idiomes', 'alumneIdi', 'estudisr', 'estudisn', 'Alvehicle','Alcarne', 'tVehicle', 'tCarne', 'ofertas'));
        }
        return view('alumne.index', compact('alumne', 'estudisnoreglats', 'areas', 'estudi', 'exp', 'estudisreglats', 'skill', 's', "sector", 'idioms',
            'idiomes', 'alumneIdi', 'estudisr', 'estudisn', 'Alvehicle','Alcarne', 'tVehicle', 'tCarne', 'ofertas'));
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
        $alumne->fill($request->all());

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

    public function deleteAptitud($id, $idAlumno, Request $request)
    {

        $aptitud = skill_alumnes::where('idSkill', '=', $id)
            ->where('idAlumno', '=', $idAlumno);
        $aptitud->delete();
        return redirect('alumne');
    }

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

   public function getInfoOferta(Request $request)
    {
        $oferta = ofertes::find($request->idoferta);
        $empresa = $oferta->empreses->nombreSocial;
        $poblacio = $oferta->poblacio->poblacio;
        $html = "<table class='table'><tr><td><label>Oferta:</label></td><td>$oferta->descOfertaBreve</td></tr><tr><td><label>Empresa:</label></td><td>$empresa</td></tr><tr><tr><td><label>Direccion:</label></td><td>$oferta->direccion, $poblacio</td></tr><tr><td><label>Descripcion:</label></td><td>$oferta->descOferta</td></tr><tr><td><label>Jornada Laboral:</label></td><td>$oferta->jornadaLaboral</td></tr><tr><td><label>Skills:</label></td><td>";

        $clases = array("label label-danger", "label label-success", "label label-info", "label label-warning", "label label-primary");
        $i=0; 
       foreach($oferta->skills as $sk){
            if($i==5) {
            $i=0;
            }
            $html .= "<span class ='$clases[$i]'>$sk->skill</span>";     
            $i++;                               
       }
       $html .= "</td></tr></table>";

        return response()->json($html);
    }

    public function apuntaAlumneOferta(Request $request){
           
            $idoferta = $request->idoferta;
            $idalumno =  $request->idalumno;
            $oa = \App\ofertaalumnes::where('idOferta', '=', $idoferta)->where('idAlumno', '=', $idalumno)->first();
            $oa->apuntat = 1;
            $oa->save();  

            //$result = json_encode($oa);
            return response()->json("OK");
    }

        public function desapuntaAlumneOferta(Request $request){
           
            $idoferta = $request->idoferta;
            $idalumno =  $request->idalumno;
            $oa = \App\ofertaalumnes::where('idOferta', '=', $idoferta)->where('idAlumno', '=', $idalumno)->first();
            $oa->apuntat = 0;
            $oa->save();  
            //$result = json_encode($oa);
            return response()->json("OK");
    }


}
