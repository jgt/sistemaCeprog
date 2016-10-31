<?php

namespace App\Http\Controllers\PaginaCeprog\OfertaEducativa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfertaEducativaController extends Controller
{
    
    public function ofertaPalenque()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.OfertaEducativa.ofertaPalenque');
    }

    public function ofertaReforma()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.OfertaEducativa.ofertaReforma');
    }

    public function ofertaSancristobal()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.OfertaEducativa.ofertaSancristobal');
    }

    public function ofertaTuxtla()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.OfertaEducativa.ofertaTuxtla');
    }
}
