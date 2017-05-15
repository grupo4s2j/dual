<?php

namespace App\Http\Controllers;

use App\estudis;
use App\families;
use App\idiomes;
use App\poblacions;
use App\provincies;
use App\sectors;
use App\skills;
use Illuminate\Support\Facades\Auth;
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

            return view('scaffold-interface.otros.poblacions', compact('objects'));
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
                return redirect('/admin/otros/sectors');
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

}
