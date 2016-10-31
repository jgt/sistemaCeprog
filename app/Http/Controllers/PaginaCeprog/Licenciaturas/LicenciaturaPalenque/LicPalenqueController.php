<?php

namespace App\Http\Controllers\PaginaCeprog\Licenciaturas\LicenciaturaPalenque;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LicPalenqueController extends Controller
{
    
    public function adminEmpresas()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasPalenque.adminEmpresas');
    }

    public function adminTuristicas()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasPalenque.adminTuristicas');
    }

    public function arquitectura()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasPalenque.arquitectura');
    }

    public function contaduriaPublica()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasPalenque.contaduriaPublica');
    }

    public function derecho()
    {
    	return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasPalenque.contaduriaPublica');
    }

    public function enfermeria()
    {
        return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasPalenque.enfermeria');
    }

    public function informatica()
    {
        return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasPalenque.informatica');
    }

    public function ingenieriaCivil()
    {
        return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasPalenque.ingenieriaCivil');
    }

    public function ingenieriaTelematica()
    {
        return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasPalenque.ingenieriaTelematica');
    }

    public function psicologiaGeneral()
    {
        return view('layouts.PaginaCeprog.HomeInternos.Licenciaturas.LicenciaturasPalenque.psicologiaGeneral');
    }
}
