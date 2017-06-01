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
    public function matching($id)
    {

        $objInfo = DB::table('ofertes')->where('id', $id)->first();
        $oferta = ofertes::findOrFail($id);

        $alumnos = alumnes::where('activo', 1)->where('consentimientoDatos', 1)
                ->whereHas('skill', function($query) use($oferta){
                    $query->whereIn('skills.id', $oferta->skills->pluck('id')->toArray());
                })
                ->whereHas('estudis', function($query) use($oferta){
                    $query->whereIn('estudis.id', $oferta->estudis->pluck('id')->toArray());
                })
                ->whereHas('idiomas', function($query) use($oferta){
                    $query->whereIn('idiomes.id', $oferta->idiomes->pluck('id')->toArray());
                })->get();

        return view('scaffold-interface.ofertas.viewoferta', compact('alumnos', 'objInfo'));
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function percentageSkills($alumno, $oferta)
    {
        $percentage = 0;
        foreach($alumno->skill as $skill){
            if($skill->id->contains($oferta->skills->pluck('id')->toArray())){
                $percentage++;
            }
        }
        
        return $percentage;
    }
}
