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

				// Se guarda en la tabla PadecimientoPacientes
				$padecimientoPaciente = array (
					"Paciente_id" => $id_paciente,
					"sintomatologia" => Input::get("sintomatologia"),
					"antecedentes" => Input::get("antecedentes")
				);
				$padecimiento = new PadecimientoPacientes($padecimientoPaciente);
				$padecimiento->save();

				// Guardar en tabla AgudezaVisual
				$agudezaVisualPaciente = array (
					"Paciente_id" => $id_paciente,
					"AVSCOD" => Input::get("AVSCOD"),
					"CCD" => Input::get("CCD"),
					"PuntoD" => Input::get("PuntoD"),
					"AVSCOI" => Input::get("AVSCOI"),
					"CCI" => Input::get("CCI"),
					"PuntoI" => Input::get("PuntoI"),
					"TonometriaD5" => Input::get("TonometriaD5"),
					"TonometriaD10" => Input::get("TonometriaD10"),
					"TonometriaI5" => Input::get("TonometriaI5"),
					"TonometriaI10" => Input::get("TonometriaI10"),
					"ParpadoD" => Input::get("ParpadoD"),
					"ParpadoI" => Input::get("ParpadoI")
				);
				$agudezaVisual = new AgudezaVisual($agudezaVisualPaciente);
				$agudezaVisual->save();

				// Guardar en tabla Biomicroscopía
				$biomicroscopiaPaciente = array(
					"Paciente_id" => $id_paciente,
					"ConjuntivaD" => Input::get("ConjuntivaD"),
					"CorneaD" => Input::get("CorneaD"),
					"BUTD" => Input::get("BUTD"),
					"ConjuntivaI" => Input::get("ConjuntivaI"),
					"CorneaI" => Input::get("CorneaI"),
					"BUTI" => Input::get("BUTI")
				);
				$biomicroscopia = new Biomicroscopia($biomicroscopiaPaciente);
				$biomicroscopia->save();
			}
		}
	}
}