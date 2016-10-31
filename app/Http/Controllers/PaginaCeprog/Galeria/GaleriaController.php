<?php

namespace App\Http\Controllers\PaginaCeprog\Galeria;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GaleriaController extends Controller
{
    
    public function galeriaPalenque()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Galeria.galeriaPalenque');
    }

    public function galeriaReforma()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Galeria.galeriaReforma');
    }

    public function galeriaSancristobal()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Galeria.galeriaSancristobal');
    }

    public function galeriaTuxtla()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Galeria.galeriaTuxtla');
    }
}
