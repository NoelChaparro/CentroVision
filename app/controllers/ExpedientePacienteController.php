<?php

class ExpedientePacienteController extends BaseController{
	public function expediente(){
		return View::make('expediente');
	}

	public function guardarExpediente(){
		if (Request::ajax()){
			//Validamos el formulario
			$datosPacientes = array(
				"nombre" => Input::get("nombre"),
				"domicilio" => Input::get("domicilio"),
				"colonia" => Input::get("colonia"),
				"ciudad" => Input::get("ciudad"),
				"fechanacimiento" => date("Y-m-d", strtotime(Input::get("fechanacimiento"))),
				"sexo" => Input::get("Sexo"),
				"ocupacion" => Input::get("ocupacion"),
				"telefono" => Input::get("telefono"),
				"referencia" => Input::get("referencia")
			);

			$rules = array (
				'nombre' => 'max:50',
				'domicilio' => 'max:100'
			);

			$messages = array(
				'max' => 'El campo :attribute no puede tener más de :max carácteres'
			);

			$validation = Validator::make(Input::all(), $rules, $messages);

			if ($validation -> fails()){

			}else{
				$paciente = new DatosPacientes($datosPacientes);
				$paciente->save();
				$id_paciente = $paciente->id;

				$padecimientoPaciente = array (
					"Paciente_id" => $id_paciente,
					"sintomatologia" => Input::get("sintomatologia"),
					"antecedentes" => Input::get("antecedentes")
				);

				$padecimiento = new PadecimientoPacientes($padecimientoPaciente);
				$padecimiento->save();
			}
		}
	}
}