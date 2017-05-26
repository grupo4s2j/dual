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
    public function index($tab = null)
    {
        if(Auth::check() && empreses::where('idUser', Auth::user()->id)->exists())
        {
            //$id = Auth::user()->id;
            $empresa = empreses::where('idUser', Auth::user()->id)->first(); 
            
            $provincias = provincies::all();
            $poblaciones = poblacions::all();
            $sectores = sectors::all();
            $idiomas = idiomes::all();

            //dd($empresa->poblacion);
            empty($tab) ? $tabName = 'empresa' : $tabName = $tab;
            
            return view('empresa.index', compact('empresa', 'provincias', 'poblaciones', 'sectores', 'tabName', 'idiomas'));
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
                //dd($request);
                $this->createOferta($request);
                break;
            case 'sectorempresa':
                $this->createSectorEmpresa($request);
                $request->nombreForm = 'empresa';
                break;
        }
        
        //return redirect()->back()->with('message', 'IT WORKS!');
        return redirect("/empresa/$request->nombreForm");
        //$this->vistaEmpresa($request);
        //return redirect('empresa')->with('message', 'Thanks for contacting us!');
        //$data = $request->id;
        //return response()->json($data);
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
    
    public function createSectorEmpresa($request)
    {
        if(empreses::where('id', $request->idEmpresa)->exists())
        {
            $empresa = empreses::findOrFail($request->idEmpresa);
            
            $empresa->sectors()->attach($request->inputSectorEmpresarial);
            
            $empresa->save();
            
            /*foreach($empresa->sectors as $sector){
                $html .= "<tr>
                            <td>{{$sector->codiSector}} - {{$sector->descSector}}</td>
                            <td>
                                <a href='{{ url('empresa/'. $sector->id . '/' . $empresa->id)}}'
                                   class='btn btn-danger btn-sm'>
                                    <i class='fa fa-trash-o' aria-hidden='true'></i>
                                </a>
                            </td>
                        </tr>";
                
            }*/
            
            //return $html;
            $this->createSectoresView($request);
        }
    }
    
    public function createSectoresView($request)
    {
        if(empreses::where('id', $request->idEmpresa)->exists())
        {
            $empresa = empreses::findOrFail($request->idEmpresa);
                        
            foreach($empresa->sectors as $sector){
                $html .= "<tr>
                            <td>{{$sector->codiSector}} - {{$sector->descSector}}</td>
                            <td>
                                <a href='{{ url('empresa/'. $sector->id . '/' . $empresa->id)}}'
                                   class='btn btn-danger btn-sm'>
                                    <i class='fa fa-trash-o' aria-hidden='true'></i>
                                </a>
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
           /* $oferta->nombreComercial = $request->inputNombreComercial;
            $oferta->direccion = $request->inputDireccion;
            $oferta->idProvincia = $request->inputProvincia;
            $oferta->idPoblacio = $request->inputPoblacion;
            $oferta->CP = $request->inputCP;*/
            
            $oferta->save();
        }
    }
    
    public function deleteSectorEmpresa($sector, $empresa)
    {
        if(empreses::where('id', $empresa)->exists())
        {
            $empresa = empreses::findOrFail($empresa);
            
            //$empresa->sectors()->attach($request->inputSectorEmpresarial);
            $empresa->sectors()->detach($sector);
            
            $empresa->save();
        }
        return redirect("/empresa");
    }
    
    public function deleteOfertaEmpresa($oferta, $empresa)
    {
        if(empreses::where('id', $empresa)->exists())
        {
            $oferta = ofertes::findOrFail($oferta);
            
            $oferta->delete();
        }
        return redirect("/empresa");
    }
    
    public function testing(Request $request, $id)
    {
        dd($request);
    }
}
