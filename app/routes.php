<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});*/

//Ruta para mostrar el formulario de login
Route::get('login', array('uses' => 'HomeController@showLogin'));
//Ruta para procesar el formulario
Route::post('login', array('uses' => 'HomeController@doLogin'));
//Ruta para salir de la sesion
Route::get('logout', array('as' => 'logout', function () {
    Auth::logout();
    return Redirect::to('login');
}));
//Rutas para el controlador ExpedientePacienteController
Route::get('/', array('before' => 'autorizar','uses' => 'ExpedientePacienteController@expediente'));
Route::post('guardarExpediente', 'ExpedientePacienteController@guardarExpediente');
Route::post('buscarPaciente', 'ExpedientePacienteController@buscarPaciente');
Route::post('buscarPacientePorId','ExpedientePacienteController@buscarPacientePorId');
ROUTE::get('ExpedienteCompleto/{idPaciente}',array('before' => 'autorizar','uses' => 'ExpedientePacienteController@imprimirExpedientePaciente'))->where('idPaciente','[0-9]');
//Ruta para la impresion de documentacion del ExpedientePacienteController
Route::get('ResumenClinico/{idPaciente?}',array('before' => 'autorizar','uses' => 'ExpedientePacienteController@imprimirResumenClinico'))->where('idPaciente','[0-9]+');
Route::get('RecetaLentes/{idPaciente?}',array('before' => 'autorizar','uses' => 'ExpedientePacienteController@imprimirRecetaLentes'))->where('idPaciente','[0-9]+');
Route::get('Certificado/{idPaciente?}',array('before' => 'autorizar','uses' => 'ExpedientePacienteController@imprimirCertificado'))->where('idPaciente','[0-9]+');
//Rutas para el controlador OperacionLaser
Route::get('OperacionLaser',array('before' => 'autorizar','uses' => 'OperacionLaserController@calculoOperacionLaser'));
//Rutas para el controlador LentesContacto
Route::get('LentesContacto',array('before' => 'autorizar','uses' => 'LentesContactoController@lentesContactoHistorial'));
Route::post('guardarLentesContacto','LentesContactoController@guardarLentesContacto');
Route::post('buscarHistorialLentesContacto','LentesContactoController@buscarHistorialLentesContacto');
//Rutas para el upload de imagenes
Route::post('subirImagenes','ExpedientePacienteController@subirImagenes');
//Rutas para cargar las imagenes
Route::post('buscarImagenes','ExpedientePacienteController@buscarImagenes');
//Ruta para eliminar las imagenes
Route::post('eliminarImagenes','ExpedientePacienteController@eliminarImagenes');
//Ruta para el programa de baja vision
Route::get('BajaVision',array('before' => 'autorizar','uses' => 'BajaVisionController@bajaVision'));
Route::post('guardarBajaVision','BajaVisionController@guardarBajaVision');
Route::get('imprimirBajaVision/{idPaciente?}',array('before' => 'autorizar','uses' => 'BajaVisionController@imprimirBajaVision'))->where('idPaciente','[0-9]+');
//Ruta para los respaldos del sistema
Route::post('respaldoSistema','ExpedientePacienteController@respaldoSistema');