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
				"campo" => Input::get("campo"),
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
					"ParpadoI" => Input::get("ParpadoI"),
					"MmhgD" => Input::get("MmhgD"),
					"MmhgI" => Input::get("MmhgI")
				);
				$agudezaVisual = new AgudezaVisual($agudezaVisualPaciente);
				$agudezaVisual->save();

				// Guardar en tabla Biomicroscopía
				$biomicroscopiaPaciente = array(
					"Paciente_id" => $id_paciente,
					"CCIPCD" => Input::get("CCIPCD"),
					"BUTD" => Input::get("BUTD"),
					"CCIPCI" => Input::get("CCIPCI"),
					"BUTI" => Input::get("BUTI")
				);
				$biomicroscopia = new Biomicroscopia($biomicroscopiaPaciente);
				$biomicroscopia->save();

				// Guardar en tabla Fondo
				$fondoPaciente = array(
					"Paciente_id" => $id_paciente,
					"PMVRD" => Input::get("PMVRD"),
					"PMVRI" => Input::get("PMVRI"),
				);
				$fondo = new Fondo($fondoPaciente);
				$fondo->save();

				// Guardar en tabla Gonioscopia
				$gonioscopiaPaciente = array(
					"Paciente_id" => $id_paciente,
					"G1D" => Input::get("G1D"),
					"G2D" => Input::get("G2D"),
					"G3D" => Input::get("G3D"),
					"G4D" => Input::get("G4D"),
					"G1I" => Input::get("G1I"),
					"G2I" => Input::get("G2I"),
					"G3I" => Input::get("G3I"),
					"G4I" => Input::get("G4I")
				);
				$gonioscopia = new Gonioscopia($gonioscopiaPaciente);
				$gonioscopia->save();

				// Guardar en tabla Movilidad
				$movilidadPaciente = array(
					"Paciente_id" => $id_paciente,
					"M1D" => Input::get("M1D"),
					"M2D" => Input::get("M2D"),
					"M3D" => Input::get("M3D"),
					"M4D" => Input::get("M4D"),
					"M5D" => Input::get("M5D"),
					"M6D" => Input::get("M6D"),
					"M1C" => Input::get("M1C"),
					"M2C" => Input::get("M2C"),
					"M3C" => Input::get("M3C"),
					"M1I" => Input::get("M1I"),
					"M2I" => Input::get("M2I"),
					"M3I" => Input::get("M3I"),
					"M4I" => Input::get("M4I"),
					"M5I" => Input::get("M5I"),
					"M6I" => Input::get("M6I"),
					"PPM" => Input::get("PPM"),
					"PMonocular" => Input::get("PMonocular"),
					"PAlterno" => Input::get("PAlterno"),
					"Ducciones" => Input::get("Ducciones"),
					"Versiones" => Input::get("Versiones"),
					"OjoFijador" => Input::get("OjoFijador")
				);
				$movilidad = new Movilidad($movilidadPaciente);
				$movilidad->save();

				// Guardar en tabla Refracción
				$refraccionPaciente = array(
					"Paciente_id" => $id_paciente,
					"ExoftalmometriaOD" => Input::get("ExoftalmometriaOD"),
					"ExoftalmometriaOI" => Input::get("ExoftalmometriaOI"),
					"ExoftalmometriaBase" => Input::get("ExoftalmometriaBase"),
					"PaquimetriaOD" => Input::get("PaquimetriaOD"),
					"PaquimetriaOI" => Input::get("PaquimetriaOI"),
					"RefraccionSphOD" => Input::get("RefraccionSphOD"),
					"RefraccionCylOD" => Input::get("RefraccionCylOD"),
					"RefraccionEjeOD" => Input::get("RefraccionEjeOD"),
					"RefraccionAddOD" => Input::get("RefraccionAddOD"),
					"RefraccionBifocalOD" => Input::get("RefraccionBifocalOD"),
					"RefraccionAVOD" => Input::get("RefraccionAVOD"),
					"RefraccionSphOI" => Input::get("RefraccionSphOI"),
					"RefraccionCylOI" => Input::get("RefraccionCylOI"),
					"RefraccionEjeOI" => Input::get("RefraccionEjeOI"),
					"RefraccionAddOI" => Input::get("RefraccionAddOI"),
					"RefraccionBifocalOI" => Input::get("RefraccionBifocalOI"),
					"RefraccionAVOI" => Input::get("RefraccionAVOI"),
					"EsquiascopiaSphOD" => Input::get("EsquiascopiaSphOD"),
					"EsquiascopiaCylOD" => Input::get("EsquiascopiaCylOD"),
					"EsquiascopiaEjeOD" => Input::get("EsquiascopiaEjeOD"),
					"EsquiascopiaAddOD" => Input::get("EsquiascopiaAddOD"),
					"EsquiascopiaBifocalOD" => Input::get("EsquiascopiaBifocalOD"),
					"EsquiascopiaAVOD" => Input::get("EsquiascopiaAVOD"),
					"EsquiascopiaSphOI" => Input::get("EsquiascopiaSphOI"),
					"EsquiascopiaCylOI" => Input::get("EsquiascopiaCylOI"),
					"EsquiascopiaEjeOI" => Input::get("EsquiascopiaEjeOI"),
					"EsquiascopiaAddOI" => Input::get("EsquiascopiaAddOI"),
					"EsquiascopiaBifocalOI" => Input::get("EsquiascopiaBifocalOI"),
					"EsquiascopiaAVOI" => Input::get("EsquiascopiaAVOI"),
					"QueratometriaOD" => Input::get("QueratometriaOD"),
					"QueratometriaOI" => Input::get("QueratometriaOI")
				);
				$refraccion = new Refraccion($refraccionPaciente);
				$refraccion->save();

				// Guardar en tabla Diagnostico
				$diagnosticoPaciente = array(
					"Paciente_id" => $id_paciente,
					"AstigmatismoD" => Input::get("AstigmatismoD"),
					"GlaucomaD" => Input::get("GlaucomaD"),
					"CataratasD" => Input::get("CataratasD"),
					"ConjuntivitisD" => Input::get("ConjuntivitisD"),
					"QueratitisD" => Input::get("QueratitisD"),
					"EstrabismoD" => Input::get("EstrabismoD"),
					"AstigmatismoI" => Input::get("AstigmatismoI"),
					"GlaucomaI" => Input::get("GlaucomaI"),
					"CataratasI" => Input::get("CataratasI"),
					"ConjuntivitisI" => Input::get("ConjuntivitisI"),
					"QueratitisI" => Input::get("QueratitisI"),
					"EstrabismoI" => Input::get("EstrabismoI"),
					"Diagnostico" => Input::get("Diagnostico")
				);
				$diagnostico = new Diagnostico($diagnosticoPaciente);
				$diagnostico->save();

				// Guardar en tabla Tratamiento
				$tratamientoPaciente = array(
					"Paciente_id" => $id_paciente,
					"Tratamiento" => Input::get("Tratamiento")
				);
				$tratamiento = new Tratamiento($tratamientoPaciente);
				$tratamiento->save();

				// Guardar en tabla Receta
				$recetaPaciente = array(
					"Paciente_id" => $id_paciente,
					"Receta" => Input::get("Receta")
				);
				$receta = new Receta($recetaPaciente);
				$receta->save();

				// Guardar en tabla Lentes
				$lentesPaciente = array(
					"Paciente_id" => $id_paciente,
					"SphOD" => Input::get("SphOD"),
					"CylOD" => Input::get("CylOD"),
					"EjeOD" => Input::get("EjeOD"),
					"DIOD" => Input::get("DIOD"),
					"PrismaOD" => Input::get("PrismaOD"),
					"BaseOD" => Input::get("BaseOD"),
					"SphOI" => Input::get("SphOI"),
					"CylOI" => Input::get("CylOI"),
					"EjeOI" => Input::get("EjeOI"),
					"DIOI" => Input::get("DIOI"),
					"PrismaOI" => Input::get("PrismaOI"),
					"BaseOI" => Input::get("BaseOI"),
					"Add" => Input::get("Add"),
					"AO" => Input::get("AO"),
					"Color" => Input::get("Color"),
					"Bifocal" => Input::get("Bifocal"),
					"Cristal" => Input::get("Cristal"),
					"CR39" => Input::get("CR39"),
					"Observaciones" => Input::get("ObservacionesLentes")
				);
				$lentes = new Lentes($lentesPaciente);
				$lentes->save();

				// Guardar en tabla Certificado
				$certificadoPaciente = array(
					"Paciente_id" => $id_paciente,
					"AnexosOculares" => Input::get("AnexosOculares"),
					"SegmentoAnterior" => Input::get("SegmentoAnterior"),
					"FondoOjo" => Input::get("FondoOjo"),
					"PercepcionCromatica" => Input::get("PercepcionCromatica"),
					"Diagnostico" => Input::get("DiagnosticoCertificado"),
					"Tratamiento" => Input::get("TratamientoCertificado")
				);
				$certificado = new Certificado($certificadoPaciente);
				$certificado->save();

				// Guardar en tabla Resumen Clínico
				$resumenClinicoPaciente = array(
					"Paciente_id" => $id_paciente,
					"ResumenClinico" => Input::get("ResumenClinico")
				);
				$resumenClinico = new ResumenClinico($resumenClinicoPaciente);
				$resumenClinico->save();

				// Guardarn en tabla Hospitalización
				$hospitalizacionPaciente = array(
					"Paciente_id" => $id_paciente,
					"Clinica" => Input::get("Clinica"),
					"Orden" => Input::get("Orden")
				);
				$hospitalizacion = new Hospitalizacion($hospitalizacionPaciente);
				$hospitalizacion->save();
			}
		}
	}
}