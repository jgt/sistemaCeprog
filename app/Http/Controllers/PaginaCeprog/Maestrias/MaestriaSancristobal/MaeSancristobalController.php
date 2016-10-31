<?php

namespace App\Http\Controllers\PaginaCeprog\Maestrias\MaestriaSancristobal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaeSancristobalController extends Controller
{
    
     public function administracion()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Maestrias.MaestriaSancristobal.administracion');
    }

    public function computacion()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Maestrias.MaestriaSancristobal.computacion');
    }

    public function derechoConstitucional()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Maestrias.MaestriaSancristobal.derechoConstitucional');
    }

    public function finanzas()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Maestrias.MaestriaSancristobal.finanzas');
    }
}
