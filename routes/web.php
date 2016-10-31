<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['namespace' => 'PaginaCeprog'], function(){

Route::get('mensajeRector', ['as' => 'mensajeRector', 'uses' => 'HomeController@index']);
Route::get('ceprog', ['as' => 'ceprog', 'uses' => 'HomeController@home']);
Route::get('mision', ['as' => 'mision', 'uses' => 'HomeController@mision']);
Route::get('testInteligencia', ['as' => 'testInteligencia', 'uses' => 'HomeController@testInteligencia']);

});

Route::group(['namespace' => 'PaginaCeprog\HomeInternos'], function(){

Route::get('palenqueHome', ['as' => 'palenqueHome', 'uses' => 'HomeInternosController@palenqueHome']);
Route::get('reformaHome', ['as' => 'reformaHome', 'uses' => 'HomeInternosController@reformaHome']);
Route::get('sancristobalHome', ['as' => 'sancristobalHome', 'uses' => 'HomeInternosController@sancristobalHome']);
Route::get('tuxtlaHome', ['as' => 'tuxtlaHome', 'uses' => 'HomeInternosController@tuxtlaHome']);
Route::get('admision', ['as' => 'admision', 'uses' => 'HomeInternosController@admision']);

});

Route::group(['namespace' => 'PaginaCeprog\Contacto'], function(){

Route::get('contactoPalenque', ['as' => 'contactoPalenque', 'uses' => 'ContactoController@contactoPalenque']);
Route::get('contactoReforma', ['as' => 'contactoReforma', 'uses' => 'ContactoController@contactoReforma']);
Route::get('contactoSancristobal', ['as' => 'contactoSancristobal', 'uses' => 'ContactoController@contactoSancristobal']);
Route::get('contactoTuxtla', ['as' => 'contactoTuxtla', 'uses' => 'ContactoController@contactoTuxtla']);

});

Route::group(['namespace' => 'PaginaCeprog\Galeria'], function(){

Route::get('galeriaPalenque', ['as' => 'galeriaPalenque', 'uses' => 'GaleriaController@galeriaPalenque']);
Route::get('galeriaReforma', ['as' => 'galeriaReforma', 'uses' => 'GaleriaController@galeriaReforma']);
Route::get('galeriaSancristobal', ['as' => 'galeriaSancristobal', 'uses' => 'GaleriaController@galeriaSancristobal']);
Route::get('galeriaTuxtla', ['as' => 'galeriaTuxtla', 'uses' => 'GaleriaController@galeriaTuxtla']);

});

Route::group(['namespace' => 'PaginaCeprog\OfertaEducativa'], function(){

Route::get('ofertaPalenque', ['as' => 'ofertaPalenque', 'uses' => 'OfertaEducativaController@ofertaPalenque']);
Route::get('ofertaReforma', ['as' => 'ofertaReforma', 'uses' => 'OfertaEducativaController@ofertaReforma']);
Route::get('ofertaSancristobal', ['as' => 'ofertaSancristobal', 'uses' => 'OfertaEducativaController@ofertaSancristobal']);
Route::get('ofertaTuxtla', ['as' => 'ofertaTuxtla', 'uses' => 'OfertaEducativaController@ofertaTuxtla']);

});

Route::group(['namespace' => 'PaginaCeprog\Servicios'], function(){

Route::get('serviciosGeneral', ['as' => 'serviciosGeneral', 'uses' => 'ServiciosController@servicioGeneral']);
Route::get('servicioReforma', ['as' => 'servicioReforma', 'uses' => 'ServiciosController@servicioReforma']);
Route::get('servicioSancristobal', ['as' => 'servicioSancristobal', 'uses' => 'ServiciosController@servicioSancristobal']);
Route::get('servicioTuxtla', ['as' => 'servicioTuxtla', 'uses' => 'ServiciosController@servicioTuxtla']);

});


Route::group(['namespace' => 'PaginaCeprog\Licenciaturas\LicenciaturaPalenque'], function(){

Route::get('adminEmpresas', ['as' => 'adminEmpresas', 'uses' => 'LicPalenqueController@adminEmpresas']);
Route::get('arquitectura', ['as' => 'arquitectura', 'uses' => 'LicPalenqueController@arquitectura']);
Route::get('adminTuristicas', ['as' => 'adminTuristicas', 'uses' => 'LicPalenqueController@adminTuristicas']);
Route::get('contaduriaPublica', ['as' => 'contaduriaPublica', 'uses' => 'LicPalenqueController@contaduriaPublica']);
Route::get('derecho', ['as' => 'derecho', 'uses' => 'LicPalenqueController@derecho']);
Route::get('enfermeria', ['as' => 'enfermeria', 'uses' => 'LicPalenqueController@enfermeria']);
Route::get('informatica', ['as' => 'informatica', 'uses' => 'LicPalenqueController@informatica']);
Route::get('ingenieriaCivil', ['as' => 'ingenieriaCivil', 'uses' => 'LicPalenqueController@ingenieriaCivil']);
Route::get('ingenieriaTelematica', ['as' => 'ingenieriaTelematica', 'uses' => 'LicPalenqueController@ingenieriaTelematica']);
Route::get('psicologiaGeneral', ['as' => 'psicologiaGeneral', 'uses' => 'LicPalenqueController@psicologiaGeneral']);

});


Route::group(['namespace' => 'PaginaCeprog\Maestrias\MaestriaPalenque'], function(){

Route::get('maestriaAdministracion', ['as' => 'maestriaAdministracion', 'uses' => 'MaePalenqueController@maestriaAdministracion']);
Route::get('maestriaCienciaEducacion', ['as' => 'maestriaCienciaEducacion', 'uses' => 'MaePalenqueController@maestriaCienciaEducacion']);
Route::get('maestriaComputacion', ['as' => 'maestriaComputacion', 'uses' => 'MaePalenqueController@maestriaComputacion']);
Route::get('maestriaDerecho', ['as' => 'maestriaDerecho', 'uses' => 'MaePalenqueController@maestriaDerecho']);
Route::get('maestriaDerechoPenal', ['as' => 'maestriaDerechoPenal', 'uses' => 'MaePalenqueController@maestriaDerechoPenal']);
Route::get('maestriaFinanzas', ['as' => 'maestriaFinanzas', 'uses' => 'MaePalenqueController@maestriaFinanzas']);

});


Route::group(['namespace' => 'PaginaCeprog\Doctorados\DoctoradoPalenque'], function(){

Route::get('doctoradoEducacion', ['as' => 'doctoradoEducacion', 'uses' => 'DocPalenqueController@doctoradoEducacion']);

});


Route::group(['namespace' => 'PaginaCeprog\Licenciaturas\LicenciaturasReforma'], function(){

Route::get('adminEmpresasReforma', ['as' => 'adminEmpresasReforma', 'uses' => 'LicReformaContronller@adminEmpresas']);
Route::get('contaduriaPublicaReforma', ['as' => 'contaduriaPublicaReforma', 'uses' => 'LicReformaContronller@contaduriaPublica']);
Route::get('informaticaReforma', ['as' => 'informaticaReforma', 'uses' => 'LicReformaContronller@informatica']);
Route::get('psicologiaGeneralReforma', ['as' => 'psicologiaGeneralReforma', 'uses' => 'LicReformaContronller@psicologiaGeneral']);
Route::get('derechoReforma', ['as' => 'derechoReforma', 'uses' => 'LicReformaContronller@derecho']);

});

Route::group(['namespace' => 'PaginaCeprog\Maestrias\MaestriasReforma'], function(){

Route::get('maestriaCienciaEducacionReforma', ['as' => 'maestriaCienciaEducacionReforma', 'uses' => 'MaeReformaController@cienciaEducacion']);

});


Route::group(['namespace' => 'PaginaCeprog\Licenciaturas\LicenciaturaSancristobal'], function(){

Route::get('adminEmpresasSancristobal', ['as' => 'adminEmpresasSancristobal', 'uses' => 'LicSancristobalController@adminEmpresas']);
Route::get('adminEmpresasTuristicaSancristobal', ['as' => 'adminEmpresasTuristicaSancristobal', 'uses' => 'LicSancristobalController@adminEmpresasTuristica']);
Route::get('arquitecturaSancristobal', ['as' => 'arquitecturaSancristobal', 'uses' => 'LicSancristobalController@arquitectura']);
Route::get('contaduriaPublicaSancristobal', ['as' => 'contaduriaPublicaSancristobal', 'uses' => 'LicSancristobalController@contaduriaPublica']);
Route::get('derechoSancristobal', ['as' => 'derechoSancristobal', 'uses' => 'LicSancristobalController@derecho']);
Route::get('informaticaSancristobal', ['as' => 'informaticaSancristobal', 'uses' => 'LicSancristobalController@informatica']);
Route::get('psicologiaGeneralSancristobal', ['as' => 'psicologiaGeneralSancristobal', 'uses' => 'LicSancristobalController@psicologiaGeneral']);

});


Route::group(['namespace' => 'PaginaCeprog\Maestrias\MaestriaSancristobal'], function(){

Route::get('maestriaAdministracionSancristobal', ['as' => 'maestriaAdministracionSancristobal', 'uses' => 'MaeSancristobalController@administracion']);
Route::get('maestriaComputacionSancristobal', ['as' => 'maestriaComputacionSancristobal', 'uses' => 'MaeSancristobalController@computacion']);
Route::get('maestriaDerechoConstitucionalSancristobal', ['as' => 'maestriaDerechoConstitucionalSancristobal', 'uses' => 'MaeSancristobalController@derechoConstitucional']);
Route::get('maestriaFinanzasSancristobal', ['as' => 'maestriaFinanzasSancristobal', 'uses' => 'MaeSancristobalController@finanzas']);

});