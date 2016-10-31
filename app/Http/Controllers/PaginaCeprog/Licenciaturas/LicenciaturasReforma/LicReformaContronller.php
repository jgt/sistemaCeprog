<?php

namespace App\Http\Controllers\PaginaCeprog\Licenciaturas\LicenciaturasReforma;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LicReformaContronller extends Controller
{
    
    public function adminEmpresas()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasReforma.adminEmpresas');
    }

    public function contaduriaPublica()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasReforma.contaduriaPublica');
    }

    public function informatica()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasReforma.informatica');
    }

    public function psicologiaGeneral()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasReforma.psicologiaGeneral');
    }

    public function derecho()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasReforma.derecho');
    }
}
