<?php

namespace App\Http\Controllers\PaginaCeprog\HomeInternos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeInternosController extends Controller
{
    
     public function palenqueHome()
    {
        return view('layouts.PaginaCeprog.HomeInternos.palenqueHome');
    }

    public function reformaHome()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.reformaHome');
    }

    public function sancristobalHome()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.sancristobalHome');
    }

    public function tuxtlaHome()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.tuxtlaHome');
    }

    public function admision()
    {
        return view('layouts.PaginaCeprog.HomeInternos.Admision.admisiones');
    }
}
