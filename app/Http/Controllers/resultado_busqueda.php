<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resultado_busqueda extends Controller
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
        return view('scaffold-interface.dashboard.resultados');
    }
}
