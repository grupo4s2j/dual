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

            $request->session()->has('tab') ? $tabName = $request->session()->get('tab') : $tabName = 'empresa';
            
            return view('empresa.index', compact('empresa', 'provincias', 'poblaciones', 'sectores', 'tabName', 'idiomas', 'skills'));
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
        
        return redirect('/empresa');
    }
    
    //UPDATE DATOS DE LA EMPRESA
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
    
    //UPDATE DATOS DE LA PERSONA DE CONTACTO
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
    
    //ADD SECTOR EMPRESARIAL A LA EMPRESA
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
    
    //DELETE SECTOR EMPRESARIAL A LA EMPRESA
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
    
    //CREAR HTML PARA LOS SECTORES DE LA EMPRESA
    public function createSectoresView($request)
    {
        if(empreses::where('id', $request->idEmpresa)->exists())
        {
            $empresa = empreses::findOrFail($request->idEmpresa);
            
            $sectores = sectors::whereNotIn('id', $empresa->sectors->pluck('id')->toArray(), 'or')->get();
                        
            $html_tabla = "";
            $html_drop = "";
            $html_select = array();

            foreach($empresa->sectors as $sector){
                $html_tabla .= "<tr>
                            <td>$sector->codiSector - $sector->descSector</td>
                            <td>
                                <button empresa='$empresa->id' sector='$sector->id' class='btn btn-danger btn-sm'>
                                    <i class='fa fa-trash-o' aria-hidden='true'></i>
                                </button>
                            </td>
                        </tr>";
            }
            
            foreach($sectores as $sector){
                //$html_drop .= "<option value='$sector->id'>$sector->codiSector -  $sector->descSector </option>";
                array_push($html_select, "<option value='$sector->id'>$sector->codiSector -  $sector->descSector </option>");
            }
            
            $html = array('html_tabla' => $html_tabla, '$html_drop' => $html_drop, 'html_select' => $html_select);
            $result = json_encode($html);
            return $result;
        }
    }
    
    //CREATE OFERTA RELACIONADA CON LA EMPRESA
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
    
    //DELETE DE UNA OFERTA DE LA EMPRESA
    public function deleteOfertaEmpresa(Request $request)
    {        
        if(empreses::where('id', $request->empresa)->exists())
        {
            $oferta = ofertes::findOrFail($request->oferta);
            
            //$oferta->activo = 0;
            $oferta->idEstat = 3;
            
            $oferta->save();
            
            $html = $this->createOfertasView($request);
            
            return response()->json($html);
        }
    }
    
    //CREAR HTML DE LA TABLA DE OFERTAS
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
            $html = array('html_tabla' => $html);
            //return $html;
            $result = json_encode($html);
            return $result;
        }
    }
    
    //GET LISTADO DE POBLAIONES PERTENECIENTES A UNA PROVINCIA
    public function getPoblacionByProvincia(Request $request)
    {
        if(provincies::where('id', $request->provincia)->exists())
        {
            $poblaciones = poblacions::where('idProvincia', '=', $request->provincia)->get();
            
            $html = "";
            
            foreach($poblaciones as $poblacion){
                $html .= "<option value='$poblacion->id'>$poblacion->poblacio</option>";
            }
            
            $html = array('html_tabla' => $html);
            $result = json_encode($html);
            
            //return response()->json($html);
            return response()->json($result);
        }
        return redirect("/empresa");
    }
    
    
    /*****************************************************/
    /*************************ADMIN***********************/
    /*****************************************************/
    
    
    public function viewEmp($id)
    {
        if (Auth::check() and Auth::user()->rol==0) {
            //$id = Auth::user()->id;
            $empresa = empreses::where('id', $id)->first();
            $provincias = provincies::all();
            $poblaciones = poblacions::all();
            $sectores = sectors::all();
            $idiomas = idiomes::all();

            empty($tab) ? $tabName = 'empresa' : $tabName = $tab;
            return view('empresa.index', compact('empresa','provincias', 'poblaciones', 'sectores', 'tabName', 'idiomas'));

        }
        return redirect('home');
    }
    public function indexBack()
    {
        $empresas = empreses::get();
        $provincias = provincies::all();
        $poblaciones = poblacions::all();

        return view('scaffold-interface.empresa.empresa',compact('empresas','provincias', 'poblaciones'));
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
}
