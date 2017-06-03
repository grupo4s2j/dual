<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\empreses;
use App\provincies;
use App\poblacions;
use App\sectors;
use App\idiomes;
use App\ofertes;
use App\skills;
use App\estudis;
use App\alumnes;
use DB;

class MatchingController extends Controller
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
    public function index(Request $request)
    {
        if(Auth::check() && empreses::where('idUser', Auth::user()->id)->exists())
        {
            $empresa = empreses::where('idUser', Auth::user()->id)->first(); 
            
            $provincias = provincies::orderBy('provincia', 'asc')->get();
            $poblaciones = poblacions::where('idProvincia', '=', $empresa->idProvincia)->orderBy('poblacio', 'asc')->get();

            $sectores = sectors::whereNotIn('id', $empresa->sectors->pluck('id')->toArray(), 'or')->get();
            $idiomas = idiomes::all();
            $skills = skills::all();
            
            $estudis = estudis::all();
            
            $request->session()->has('tab') ? $tabName = $request->session()->get('tab') : $tabName = 'empresa';
            
            return view('empresa.index', compact('empresa', 'provincias', 'poblaciones', 'sectores', 'tabName', 'idiomas', 'skills', 'estudis'));
        }
        return redirect('home');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function matching($id = 26)
    {
        $id = 26;
        $oferta = ofertes::findOrFail($id);

        $alumnos = alumnes::where('activo', 1)->where('consentimientoDatos', 1)
                    ->whereNotIn('id', $oferta->alumnes->pluck('id')->toArray())
                    ->where(function($query) use($oferta) {
                    $query->whereHas('skill', function($query) use($oferta){
                        $query->whereIn('skills.id', $oferta->skills->pluck('id')->toArray());
                    })
                    ->orWhereHas('estudis', function($query) use($oferta){
                        $query->whereIn('estudis.id', $oferta->estudis->pluck('id')->toArray());
                    })
                    ->orWhereHas('idiomas', function($query) use($oferta){
                        $query->whereIn('idiomes.id', $oferta->idiomes->pluck('id')->toArray());
                    });  
                })->get();

        foreach($alumnos as $alumno){
            $alumno->percentages = $this->percentageAlumno($alumno, $oferta);
        }
        $alumnos = $alumnos->sortByDesc('percentages.percentageTotal');
        //dd($alumnos);
        return view('scaffold-interface.ofertas.viewoferta', compact('alumnos', 'oferta'));
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function percentageAlumno($alumno, $oferta)
    {
        $pSkills = 1/3;
        $pEstudis = 1/3;
        $pIdiomes = 1/3;
        
        $percentageSkills = 0;
        $percentageEstudis = 0;
        $percentageIdiomes = 0;
        foreach($alumno->skill as $skill){
            if(in_array($skill->id, $oferta->skills->pluck('id')->toArray())){
                $percentageSkills++;
            }
        }
        foreach($alumno->estudis as $estudi){
            if(in_array($estudi->id, $oferta->estudis->pluck('id')->toArray())){
                $percentageEstudis++;
            }
        }
        foreach($alumno->idiomas as $idioma){
            if(in_array($idioma->id, $oferta->idiomes->pluck('id')->toArray())){
                $percentageIdiomes++;
            }
        }
        
        $array = array('percentageSkills' => round(($percentageSkills * 100)/count($oferta->skills->pluck('id')->toArray())),
                      'percentageEstudis' => round(($percentageEstudis * 100)/count($oferta->estudis->pluck('id')->toArray())),
                      'percentageIdiomes' => round(($percentageIdiomes * 100)/count($oferta->idiomes->pluck('id')->toArray())));

        $array['percentageTotal'] = (round(($array['percentageSkills'] * $pSkills) + ($array['percentageEstudis'] * $pEstudis) + ($array['percentageIdiomes'] * $pIdiomes)));
        
        return $array;
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendEmail(Request $request)
    {
        
    }
}
