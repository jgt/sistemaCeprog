<?php

namespace App\Http\Controllers\PaginaCeprog\Servicios;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiciosController extends Controller
{
    
    public function servicioGeneral()
    {
        return view('layouts.PaginaCeprog.HomeInternos.Servicio.serviciosGeneral');
    }

    public function servicioReforma()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Servicio.servicioReforma');
    }

    public function servicioSancristobal()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Servicio.servicioSancristobal');
    }

    public function servicioTuxtla()
    {
        return view('layouts.PaginaCeprog.HomeInternos.Servicio.servicioTuxtla');
    }
}
