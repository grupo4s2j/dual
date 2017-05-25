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
use DB;

class EmpresaController extends Controller
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
    public function index(/*$tab = null*/Request $request)
    {
        if(Auth::check() && empreses::where('idUser', Auth::user()->id)->exists())
        {
            //$id = Auth::user()->id;
            $empresa = empreses::where('idUser', Auth::user()->id)->first(); 
            
            $provincias = provincies::orderBy('provincia', 'asc')->get();
            $poblaciones = poblacions::where('idProvincia', '=', $empresa->idProvincia)->orderBy('poblacio', 'asc')->get();
            //$poblaciones = poblacions::all();
            //$poblaciones = poblacions::groupBy('idProvincia')->get();
            //$sectores = sectors::all();
            $sectores = sectors::whereNotIn('id', $empresa->sectors->pluck('id')->toArray(), 'or')->get();
            $idiomas = idiomes::all();
            $skills = skills::all();

            $request->session()->has('tab') ? $tabName = $request->session()->get('tab') : $tabName = 'empresa';
            
            return view('empresa.index', compact('empresa', 'provincias', 'poblaciones', 'sectores', 'tabName', 'idiomas', 'skills'));
        }
        return redirect('home');
    }
    public function viewEmp($id)
    {
        if (Auth::check() and Auth::user()->rol==0) {
            //$id = Auth::user()->id;
            $empresa = empreses::where('idUser', $id)->first();

            return view('empresa.index', compact('empresa'));

        }
        return redirect('home');
    }
    public function indexBack()
    {

            $empresas = empreses::get();

            return view('scaffold-interface.empresa.empresa',compact('empresas'));

    }

    public function indexAdmin($id)
    {
        if(Auth::check() && empreses::where('id', $id)->exists())
        {
            $empresa = empreses::where('id', $id)->first(); 
            
            return view('empresa.index',compact('empresa'));
        }
        return redirect('home');
    }
    
    public function updateForm(Request $request)
    {
        switch ($request->nombreForm) {
            case 'empresa':
                $this->updateEmpresa($request);
                break;
            case 'contacto':
                $this->updateContacto($request);
                break;
            case 'ofertas':
                $this->createOferta($request);
                $request->nombreForm = 'misofertas';
                break;
            case 'sectorempresa':
                $this->createSectorEmpresa($request);
                $request->nombreForm = 'empresa';
                break;
        }
        
        return redirect('/empresa')->with('tab', $request->nombreForm);
    }
    
    public function updateEmpresa($request)
    {
        if(empreses::where('id', $request->idEmpresa)->exists())
        {
            $empresa = empreses::findOrFail($request->idEmpresa);
            
            $empresa->CIF = $request->inputCIF;
            $empresa->nombreSocial = $request->inputNombreSocial;
            $empresa->nombreComercial = $request->inputNombreComercial;
            $empresa->direccion = $request->inputDireccion;
            $empresa->idProvincia = $request->inputProvincia;
            $empresa->idPoblacio = $request->inputPoblacion;
            $empresa->CP = $request->inputCP;
            
            //$empresa->sectors()->attach($request->inputSectorEmpresarial);
            //$empresa->sectors()->sync($request->inputSectorEmpresarial);
            
            //$empresa->fill($request->all());
            $empresa->save();
        }
    }
    
    public function updateContacto($request)
    {
        if(empreses::where('id', $request->idEmpresa)->exists())
        {
            $empresa = empreses::findOrFail($request->idEmpresa);
            
            $empresa->personaContacto = $request->inputPersonaContacto;
            $empresa->email = $request->inputPersonaEmail;
            $empresa->telf = $request->inputPersonaTelefono;
            $empresa->FAX = $request->inputPersonaFAX;
            
            $empresa->save();
        }
    }
    
    public function createSectorEmpresa(Request $request)
    {        
        if(empreses::where('id', $request->idEmpresa)->exists())
        {
            $empresa = empreses::findOrFail($request->idEmpresa);

            $empresa->sectors()->attach($request->inputSectorEmpresarial);

            $empresa->save();
            
            $html = $this->createSectoresView($request);
            
            return response()->json($html);
        }
    }
    
    public function deleteSectorEmpresa(Request $request)
    {
        if(empreses::where('id', $request->empresa)->exists())
        {
            $empresa = empreses::findOrFail($request->empresa);
            
            $empresa->sectors()->detach($request->sector);
            
            $empresa->save();
            
            $request->idEmpresa = $request->empresa;
            
            $html = $this->createSectoresView($request);
            
            return response()->json($html);
        }
        return redirect("/empresa");
    }
    
    public function createSectoresView($request)
    {
        if(empreses::where('id', $request->idEmpresa)->exists())
        {
            $empresa = empreses::findOrFail($request->idEmpresa);
                        
            $html = "";

            foreach($empresa->sectors as $sector){
                $html .= "<tr>
                            <td>$sector->codiSector - $sector->descSector</td>
                            <td>
                                <button empresa='$empresa->id' sector='$sector->id' class='btn btn-danger btn-sm'>
                                    <i class='fa fa-trash-o' aria-hidden='true'></i>
                                </button>
                            </td>
                        </tr>";
            }
            return $html;
        }
    }
    
    public function createOferta($request)
    {
        if(empreses::where('id', $request->idEmpresa)->exists())
        {            
            $oferta = ofertes::create();
            $oferta->descOfertaBreve = $request->inputTitulo;
            $oferta->descOferta = $request->inputDescripcion;
            $oferta->idEmpresa = $request->idEmpresa;
            $oferta->idEstat = 1;
            $oferta->direccion = $request->inputDireccion;
            $oferta->idProvincia = $request->inputProvincia;
            $oferta->idPoblacio = $request->inputPoblacion;
            $oferta->CP = $request->inputCP;
            
            $oferta->save();
            
            //return redirect("/empresa/misofertas");
            //$this->index("misofertas");
        }
    }
    
    public function deleteOfertaEmpresa(Request $request)
    {        
        if(empreses::where('id', $request->empresa)->exists())
        {
            $oferta = ofertes::findOrFail($request->oferta);
            
            $oferta->activo = 0;
            
            $oferta->save();
            
            $html = $this->createOfertasView($request);
            
            return response()->json($html);
        }
    }
    
    public function createOfertasView($request)
    {
        if(empreses::where('id', $request->empresa)->exists())
        {
            $empresa = empreses::findOrFail($request->empresa);
                        
            $html = "";

            foreach($empresa->ofertes as $oferta){
                if($oferta->activo == 1){
                    $html .= "<tr>
                                <td>$oferta->descOfertaBreve</td>
                                <td>".date('F d, Y', strtotime($oferta->created_at))."</td>
                                <td>".$oferta->estats->descEstado."</td>
                                <td>
                                    <button oferta='$oferta->id' empresa='$empresa->id' class='btn btn-danger btn-sm'>
                                        <i class='fa fa-trash-o' aria-hidden='true'></i>
                                    </button>
                                    <button oferta='$oferta->id' empresa='$empresa->id' class='btn btn-warning btn-sm'>
                                        <i class='fa fa-pencil' aria-hidden='true'></i>
                                    </button>
                                </td>
                            </tr>";
                }
            }
            return $html;
        }
    }
    
    public function getPoblacionByProvincia(Request $request)
    {
        if(provincies::where('id', $request->provincia)->exists())
        {
            $poblaciones = poblacions::where('idProvincia', '=', $request->provincia)->get();
            
            $html = "";
            
            foreach($poblaciones as $poblacion){
                $html .= "<option value='$poblacion->id'>$poblacion->poblacio</option>";
            }
            
            return response()->json($html);
        }
        return redirect("/empresa");
    }
    
    public function testing(Request $request, $id)
    {
        dd($request);
    }
    
    public function testingPost(Request $request)
    {
        if($request->ajax()){
            return response()->json("AJAX");
        }
        return response()->json("HTTP");
    }
}
