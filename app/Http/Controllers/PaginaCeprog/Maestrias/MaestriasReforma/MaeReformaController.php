<?php

namespace App\Http\Controllers\PaginaCeprog\Maestrias\MaestriasReforma;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaeReformaController extends Controller
{
    
    public function cienciaEducacion()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Maestrias.MaestriasReforma.cienciaEducacion');
    }
}
