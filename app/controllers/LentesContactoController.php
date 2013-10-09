<?php

class LentesContactoController extends BaseController{
	public function lentesContactoHistorial(){ //Manda llamar la vista operacionLaser
		return View::make('lentescontacto')->with('fechaActual',date('d/m/Y'));
	}

	public function guardarLentesContacto(){ //Guarda todos los datos del formulario lentes contacto
		if (Request::ajax()){
			$datosLentesContacto = array(
				"Paciente_id" => Input::get("varIdPaciente"),
				"QueratometriaHorizontalOD" => Input::get("queratometriaHorizontalOD"),
				"QueratometriaHorizontalEjeOD" => Input::get("queratometriaHorizontalEjeOD"),
				"QueratometriaVerticalOD" => Input::get("queratometriaVerticalOD"),
				"QueratometriaVerticalEjeOD" => Input::get("queratometriaVerticalEjeOD"),
				"RefraccionSphOD" => Input::get("refraccionSphOD"),
				"RefraccionCylOD" => Input::get("refraccionCylOD"),
				"RefraccionEjeOD" => Input::get("refraccionEjeOD"),
				"QueratometriaHorizontalOI" => Input::get("queratometriaHorizontalOI"),
				"QueratometriaHorizontalEjeOI" => Input::get("queratometriaHorizontalEjeOI"),
				"QueratometriaVerticalOI" => Input::get("queratometriaVerticalOI"),
				"QueratometriaVerticalEjeOI" => Input::get("queratometriaVerticalEjeOI"),
				"RefraccionSphOI" => Input::get("refraccionSphOI"),
				"RefraccionCylOI" => Input::get("refraccionCylOI"),
				"RefraccionEjeOI" => Input::get("refraccionEjeOI"),
				"Material" => Input::get("material"),
				"Marca" => Input::get("marca"),
				"Tipo" => Input::get("tipo"),
				"Color" => Input::get("color"),
				"CurvaBaseOD" => Input::get("curvaBaseOD"),
				"DiametroOD" => Input::get("diametroOD"),
				"CPPOD" => Input::get("cppOD"),
				"PoderOD" => Input::get("poderOD"),
				"SROD" => Input::get("srOD"),
				"RXFinalOD" => Input::get("rxFinalOD"),
				"CurvaBaseOI" => Input::get("curvaBaseOI"),
				"DiametroOI" => Input::get("diametroOI"),
				"CPPOI" => Input::get("cppOI"),
				"PoderOI" => Input::get("poderOI"),
				"SROI" => Input::get("srOI"),
				"RXFinalOI" => Input::get("rxFinalOI"),
				"Observaciones" => Input::get("observaciones")
			);

			$lentesContacto = new LentesContacto($datosLentesContacto);
			$lentesContacto->save();
		}
	}

	public function buscarHistorialLentesContacto(){ //Function para cargar las ultimas tres consultas de los lentes de contacto
		if (Request::ajax()){
			$idPaciente = Input::get("idPaciente");
			$lentesContacto = DB::table('LentesContacto')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->take(3)->get();
			return Response::json(array('LentesContacto'=> $lentesContacto));
		}
	}
}