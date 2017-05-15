<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\empreses;

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
    public function index()
    {
        if(Auth::check() && empreses::where('idUser', Auth::user()->id)->exists())
        {
            //$id = Auth::user()->id;
            $empresa = empreses::where('idUser', Auth::user()->id)->first(); 
            
            return view('empresa.index',compact('empresa'));
        }
        return redirect('home');
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
        //dd($request);
        /*if(empreses::where('id', $id)->exists())
        {
            $empresa = empreses::find($id);
            
            $empresa->fill($request->all());
            $empresa->save();
        }*/
        $data= $request->id;
        return response()->json($data);
    }
    
    public function testing(Request $request, $id)
    {
        dd($request);
    }
}
