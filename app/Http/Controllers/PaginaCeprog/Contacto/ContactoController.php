<?php

namespace App\Http\Controllers\PaginaCeprog\Contacto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactoController extends Controller
{
    
    public function contactoPalenque()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Contacto.contactoPalenque');
    }

    public function contactoReforma()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Contacto.contactoReforma');
    }

    public function contactoSancristobal()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Contacto.contactoSancristobal');
    }

    public function contactoTuxtla()
    {
        return view('layouts.PaginaCeprog.HomeInternos.Contacto.contactoTuxtla');
    }
}
