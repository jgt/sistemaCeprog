<?php

namespace App\Http\Controllers\PaginaCeprog\Licenciaturas\LicenciaturaSancristobal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LicSancristobalController extends Controller
{
    
     public function adminEmpresas()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturaSancristobal.adminEmpresas');
    }

    public function adminEmpresasTuristica()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturaSancristobal.adminEmpresasTuristica');
    }

    public function arquitectura()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturaSancristobal.arquitectura');
    }

    public function contaduriaPublica()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturaSancristobal.contaduriaPublica');
    }

    public function derecho()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturaSancristobal.derecho');
    }

    public function informatica()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturaSancristobal.informatica');
    }

    public function psicologiaGeneral()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturaSancristobal.psicologiaGeneral');
    }
}
