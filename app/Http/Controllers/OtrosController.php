<?php

namespace App\Http\Controllers;

use App\alumnes;
use App\estudis;
use App\families;
use App\idiomes;
use App\poblacions;
use App\provincies;
use App\sectors;
use App\skills;
use App\users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\empreses;
use Symfony\Component\HttpFoundation\Request;

class OtrosController extends Controller
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
    public function indexEstudis()
    {
        if (Auth::check() and Auth::user()->rol == 0) {
            $objects = estudis::get();
            return view('scaffold-interface.otros.estudis', compact('objects'));
        }
        return redirect('home');
    }

    public function indexSkills()
    {
        if (Auth::check() and Auth::user()->rol == 0) {
            $objects = skills::get();

            return view('scaffold-interface.otros.skills', compact('objects'));
        }
        return redirect('home');
    }

    public function indexIdiomes()
    {
        if (Auth::check() and Auth::user()->rol == 0) {
            $objects = idiomes::get();

            return view('scaffold-interface.otros.idiomes', compact('objects'));
        }
        return redirect('home');
    }

    public function indexSectors()
    {
        if (Auth::check() and Auth::user()->rol == 0) {
            $objects = sectors::get();

            return view('scaffold-interface.otros.sectors', compact('objects'));
        }
        return redirect('home');
    }

    public function indexPoblacions()
    {
        if (Auth::check() and Auth::user()->rol == 0) {
            $objects = poblacions::get();
            $provincies = provincies::get();
            return view('scaffold-interface.otros.poblacions', compact('objects','provincies'));
        }
        return redirect('home');
    }

    public function indexProvincies()
    {
        if (Auth::check() and Auth::user()->rol == 0) {
            $objects = provincies::get();

            return view('scaffold-interface.otros.provincies', compact('objects'));
        }
        return redirect('home');
    }

    public function indexFamiliesprofesionals()
    {
        if (Auth::check() and Auth::user()->rol == 0) {
            $objects = families::get();

            return view('scaffold-interface.otros.familiesprofesionals', compact('objects'));
        }
        return redirect('home');
    }

    public function deleteFamiliesprofesionals($id)
    {
        if (Auth::check() and Auth::user()->rol == 0) {
            $obj = families::findOrfail($id);
            if ($obj->delete()) {
                return redirect('/admin/otros/familiesprofesionals');
            } else {
                $error = '<div class="alert alert-danger">  <strong>Error</strong> .</div>';
                $objects = families::get();
                return view('scaffold-interface.otros.familiesprofesionals', compact('objects', 'error'));

            }

        }
        return redirect('home');
    }

    public function deleteProvincies($id)
    {
        if (Auth::check() and Auth::user()->rol == 0) {
            $obj = provincies::findOrfail($id);
            if ($obj->delete()) {
                return redirect('/admin/otros/provincies');
            } else {
                $error = '<div class="alert alert-danger">  <strong>Error</strong> Hay provincia en esta poblacion.</div>';
                $objects = poblacions::get();
                return view('scaffold-interface.otros.provincies', compact('objects', 'error'));

            }

        }
        return redirect('home');
    }

    public function deletePoblacions($id)
    {
        if (Auth::check() and Auth::user()->rol == 0) {
            $obj = poblacions::findOrfail($id);
            if ($obj->delete()) {
                return redirect('/admin/otros/poblacions');
            } else {
                $error = '<div class="alert alert-danger">  <strong>Error</strong> Hay provincia en esta poblacion.</div>';
                $objects = poblacions::get();
                return view('scaffold-interface.otros.poblacions', compact('objects', 'error'));

            }

        }
        return redirect('home');
    }

    public function deleteSectors($id)
    {
        if (Auth::check() and Auth::user()->rol == 0) {
            $obj = sectors::findOrfail($id);
            if ($obj->delete()) {
                return redirect('/admin/otros/sector');
            } else {
                $error = '<div class="alert alert-danger">  <strong>Error</strong> Hay alumnos en este sector.</div>';
                $objects = sectors::get();
                return view('scaffold-interface.otros.sectors', compact('objects', 'error'));

            }

        }
        return redirect('home');
    }

    public function deleteIdiomes($id)
    {
        if (Auth::check() and Auth::user()->rol == 0) {
            $obj = idiomes::findOrfail($id);
            if ($obj->delete()) {
                return redirect('/admin/otros/idiomes');
            } else {
                $error = '<div class="alert alert-danger">  <strong>Error</strong> Hay alumnos con esta idioma.</div>';
                $objects = idiomes::get();
                return view('scaffold-interface.otros.idiomes', compact('objects', 'error'));

            }

        }
        return redirect('home');
    }

    public function deleteSkills($id)
    {
        if (Auth::check() and Auth::user()->rol == 0) {
            $obj = skills::findOrfail($id);
            if ($obj->delete()) {
                return redirect('/admin/otros/skills');
            } else {
                $error = '<div class="alert alert-danger">  <strong>Error</strong> Hay alumnos con esta skill.</div>';
                $objects = estudis::get();
                return view('scaffold-interface.otros.skills', compact('objects', 'error'));

            }

        }
        return redirect('home');
    }

    public function deleteEstudis($id)
    {
        if (Auth::check() and Auth::user()->rol == 0) {
            $obj = estudis::findOrfail($id);
            if ($obj->delete()) {
                return redirect('/admin/otros/estudis');
            } else {
                $error = '<div class="alert alert-danger">  <strong>Error</strong> Hay alumnos con ese estudio.</div>';
                $objects = estudis::get();
                return view('scaffold-interface.otros.estudis', compact('objects', 'error'));

            }

        }
        return redirect('home');
    }

    public function storeSkills(Request $request)
    {
        $obj = new skills();
        $obj->skill = $request->skill;


        $obj->save();


            return redirect('admin/otros/skills');
    }
    public function storeIdiomes(Request $request)
    {
        $obj = new idiomes();
        $obj->codiIdioma = $request->codiIdioma;
        $obj->descIdioma = $request->descIdioma;


        $obj->save();


        return redirect('admin/otros/idiomes');
    }

    public function storeEstudis(Request $request)
    {
        $obj = new estudis();
        $obj->codiEstudio = $request->codiEstudio;
        $obj->descEstudio = $request->descEstudio;
        $obj->numHoras  = $request-> numHoras;


        $obj->save();


        return redirect('admin/otros/estudis');
    }

    public function storeSector(Request $request)
    {
        $obj = new sectors();
        $obj->codiSector = $request->codiSector;
        $obj->descSector = $request->descSector;


        $obj->save();


        return redirect('admin/otros/sector');
    }

    public function storeFamiliesprofesionals(Request $request)
    {
        $obj = new families();
        $obj->codiFamilia = $request->codiFamilia;
        $obj->descFamilia = $request->descFamilia;


        $obj->save();


        return redirect('admin/otros/familiesprofesionals');
    }
    public function storePoblacions(Request $request)
    {
        $obj = new poblacions();
        $obj->poblacio = $request->poblacio;



        $obj->save();


        return redirect('admin/otros/poblacions');
    }
    public function storeProvincies(Request $request)
    {
        $obj = new provincies();
        $obj->provincia = $request->provincia;



        $obj->save();


        return redirect('admin/otros/provincies');
    }

    public function createAlumne(Request $request)
    {
        $objU = new users();
        $objU->name = $request->name;
        $objU->email = $request->email;
        $objU->password = bcrypt("12345aA");
        $objU->rol = $request->rol;
        $objU->save();

        $nAlumno = DB::table('users')->where('email', $request->email)->first();

        $objA = new alumnes();
        $objA->numAlumno = $nAlumno->id;
        $objA->DNI = $request->DNI;
        $objA->nombre = $request->name;
        $objA->apellido1 = $request->apellido1;
        $objA->email = $request->email;
        $objA->pwd = $request->password;
        $objA->idPoblacio = $request->idPoblacio;
        $objA->idProvincia = $request->idProvincia;
        $objA->save();
        return redirect('admin/alumne');
    }

    public function createEmpresa(Request $request)
    {
        $objU = new users();
        $objU->name = $request->nombreComercial;
        $objU->email = $request->email;
        $objU->password = bcrypt("12345aA");
        $objU->rol = $request->rol;
        $objU->save();

        $getUser = DB::table('users')->where('email', $request->email)->first();

        $objE = new empreses();
        $objE->CIF = $request->CIF;
        $objE->nombreSocial = $request->nombreSocial;
        $objE->nombreComercial = $request->nombreComercial;
        $objE->personaContacto = $request->personaContacto;
        $objE->telf = $request->telf;
        $objE->email = $request->email;
        $objE->direccion = $request->direccion;
        $objE->idPoblacio = $request->idPoblacio;
        $objE->idProvincia = $request->idProvincia;
        $objE->idUser = $getUser->id;
        $objE->save();

        return redirect('admin/empresa');
    }
}
