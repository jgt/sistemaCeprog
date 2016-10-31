<?php

namespace App\Http\Controllers\PaginaCeprog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    
     public function index()
    {
    	return view('layouts.PaginaCeprog.Home.mensaje');	
    }

    public function home()
    {
    	return view('welcome');
    }

    public function mision()
    {
    	return view('layouts.PaginaCeprog.Home.mision');
    }

    public function testInteligencia()
    {
        return view('layouts.PaginaCeprog.HomeInternos.TestInt.testInteligencia');
    }
}
