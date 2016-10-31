<?php

namespace App\Http\Controllers\PaginaCeprog\Maestrias\MaestriaPalenque;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaePalenqueController extends Controller
{
    
    public function maestriaAdministracion()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Maestrias.MaestriaPalenque.mAdministracion');
    }

    public function maestriaCienciaEducacion()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Maestrias.MaestriaPalenque.maestriaCienciaEducacion');
    }

    public function maestriaComputacion()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Maestrias.MaestriaPalenque.maestriaComputacion');
    }

    public function maestriaDerecho()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Maestrias.MaestriaPalenque.maestriaDerecho');
    }

    public function maestriaDerechoPenal()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Maestrias.MaestriaPalenque.maestriaDerechoPenal');
    }

    public function maestriaFinanzas()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Maestrias.MaestriaPalenque.maestriaFinanzas');
    }
}
