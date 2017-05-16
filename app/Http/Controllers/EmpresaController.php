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
            /*foreach($poblaciones as $poblacion){
            if ($poblacion->id == $empresa->idPoblacio){
                dd('es correcto');
            }
            else
                dd('es incorrecto');
            }*/
            
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
                //Tienes que escribir la funcion
                break;
            case 'sectorempresa':
                $this->createSectorEmpresa($request);
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
        }
    }
    
    public function deleteSectorEmpresa($request)
    {
        if(empreses::where('id', $request->idEmpresa)->exists())
        {
            $empresa = empreses::findOrFail($request->idEmpresa);
            
            $empresa->sectors()->attach($request->inputSectorEmpresarial);
            
            $empresa->save();
        }
    }
    
    public function testing(Request $request, $id)
    {
        dd($request);
    }
}
