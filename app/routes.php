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

Route::get('/','ExpedientePacienteController@expediente');

//Rutas para el controlador ExpedientePacienteController
Route::post('guardarExpediente', 'ExpedientePacienteController@guardarExpediente');
Route::post('buscarPaciente', 'ExpedientePacienteController@buscarPaciente');
Route::post('buscarPacientePorId','ExpedientePacienteController@buscarPacientePorId');