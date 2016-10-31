<?php

namespace App\Http\Controllers\PaginaCeprog\Doctorados\DoctoradoPalenque;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocPalenqueController extends Controller
{
    
    public function doctoradoEducacion()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Doctorados.DoctoradoPalenque.doctoradoEducacion');
    }
}
