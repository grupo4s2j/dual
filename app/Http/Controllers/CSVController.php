<?php

namespace App\Http\Controllers;

use App\idiomes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\skills;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;

class CSVController extends Controller
{
    public function ImportIdiomes()
    {
        if (Input::file('import_file')) {
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function ($reader) {
            })->get();
            if (!empty($data) && $data->count()) {
                foreach ($data as $key => $value) {
                    dump($value->codi);
//                        $idi = new idiomes();
//                        $idi->DescIdioma = $value->idioma;
                    //$idi->save();

                }
            }
        }
        return view('scaffold-interface.dashboard.otros');
    }

    public function Exists($columna, $value){
        $sklEx = skills::where($columna, $value)->get();
        return $sklEx;
    }
}
