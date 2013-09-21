<?php

class ExpedientePacienteController extends BaseController{
	public function expediente(){ //manda llamar la vista expediente
		return View::make('expediente');
	}

	public function imprimirRecetaLentes($idPaciente=null){ // manda a imprimir los datos para la receta de los lentes
		$datosPaciente = '';
		$lentesPaciente = '';
		if($idPaciente){
			$datosPaciente = DB::table('DatosPacientes')->where('IdPaciente', '=', $idPaciente)->get();
			$lentesPaciente = DB::table('Lentes')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
		}
		return View::make('recetaLentes')->with('datosPaciente',$datosPaciente)->with('lentesPaciente',$lentesPaciente);
	}

	public function imprimirResumenClinico($idPaciente=null){ //Manda a imprimir los datos para el resumen clinico
		$datosPaciente = '';
		$edadPaciente = '';
		$resumenClinico = '';
		if ($idPaciente){
			$datosPaciente = DB::table('DatosPacientes')->where('IdPaciente', '=', $idPaciente)->get();
			$diaFechaNacimiento = date("j",strtotime($datosPaciente[0]->FechaNacimiento));
			$mesFechaNacimiento = date("n",strtotime($datosPaciente[0]->FechaNacimiento));
			$anoFechaNacimiento = date("Y",strtotime($datosPaciente[0]->FechaNacimiento));
			$diaActual=date("j"); 
			$mesActual=date("n"); 
			$anoActual=date("Y");
			if (($mesFechaNacimiento == $mesActual) && ($diaFechaNacimiento > $diaActual)) { $anoActual=($anoActual-1); }
			if ($mesFechaNacimiento > $mesActual) { $anoActual=($anoActual-1);}
			$edadPaciente=($anoActual-$anoFechaNacimiento);
			$resumenClinico = DB::table('ResumenClinico')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
		}
		return View::make('resumenClinico')->with('datosPaciente',$datosPaciente)->with('edadPaciente',$edadPaciente)->with('resumenClinico',$resumenClinico);
	}

	public function buscarPaciente(){ //Busca el paciente por nombre
		if (Request::ajax()){
			$busqueda = Input::get("buscarPaciente");
			$pacientes = DB::table('DatosPacientes')->where('Nombre', 'LIKE', '%'.$busqueda.'%')->get();
			return Response::json(array('Pacientes'=> $pacientes));
		}
	}

	public function buscarPacientePorId(){ //Busca el paciente por Id y regresa todos sus datos en formato JSON
		if (Request::ajax()){
			$idPaciente = Input::get("idPaciente");
			$datosPaciente = DB::table('DatosPacientes')->where('IdPaciente', '=', $idPaciente)->get();
			$padecimientoPaciente = DB::table('PadecimientoPacientes')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
			$agudezaVisual = DB::table('AgudezaVisual')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
			$biomicroscopiaIris = DB::table('Biomicroscopia')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
			$fondoRetina = DB::table('Fondo')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
			$gonioscopia = DB::table('Gonioscopia')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
			$movilidad = DB::table('Movilidad')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
			$refraccion = DB::table('Refraccion')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
			$diagnostico = DB::table('Diagnostico')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
			$tratamiento = DB::table('Tratamiento')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
			$receta = DB::table('Receta')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
			$lentes = DB::table('Lentes')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
			$certificado = DB::table('Certificado')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
			$resumenClinico = DB::table('ResumenClinico')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
			$hospitalizacion = DB::table('Hospitalizacion')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
			return Response::json(array('Paciente'=>$datosPaciente,'Padecimiento'=>$padecimientoPaciente,'AgudezaVisual' => $agudezaVisual, 'Biomicroscopia'=>$biomicroscopiaIris,
										'FondoRetina'=>$fondoRetina, 'Gonioscopia'=>$gonioscopia, 'Movilidad'=>$movilidad, 'Refraccion'=>$refraccion, 'Diagnostico'=>$diagnostico,
										'Tratamiento' => $tratamiento, 'Receta'=> $receta, 'Lentes' => $lentes, 'Certificado'=> $certificado, 'ResumenClinico'=> $resumenClinico,
										'Hospitalizacion'=>$hospitalizacion));
		}
	}

	public function guardarExpediente(){ //Guarda todos los datos del expediente en las diferentes tablas
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

				if (Input::get("varIdPaciente")){
					$affectedRows = DatosPacientes::where('IdPaciente', '=', Input::get("varIdPaciente"))->update($datosPacientes);
					$id_paciente = Input::get("varIdPaciente");
				}else{
					$paciente = new DatosPacientes($datosPacientes);
					$paciente->save();
					$id_paciente = $paciente->id;
				}

				// Se guarda en la tabla PadecimientoPacientes
				$padecimientoPaciente = array (
					"Paciente_id" => $id_paciente,
					"sintomatologia" => Input::get("sintomatologia"),
					"antecedentes" => Input::get("antecedentes")
				);
				$padecimiento = new PadecimientoPacientes($padecimientoPaciente);
				if ($padecimientoPaciente["sintomatologia"] || $padecimientoPaciente["antecedentes"]){$padecimiento->save();}

				// Guardar en tabla AgudezaVisual
				$agudezaVisualPaciente = array (
					"Paciente_id" => $id_paciente,
					"AVSCOD" => Input::get("AVSCOD"),
					"CCD" => Input::get("CCD"),
					"PuntoD" => Input::get("PuntoD"),
					"AVSCOI" => Input::get("AVSCOI"),
					"CCI" => Input::get("CCI"),
					"PuntoI" => Input::get("PuntoI"),
					"ParpadoD" => Input::get("ParpadoD"),
					"ParpadoI" => Input::get("ParpadoI"),
					"MmhgD" => Input::get("MmhgD"),
					"MmhgI" => Input::get("MmhgI")
				);
				$agudezaVisual = new AgudezaVisual($agudezaVisualPaciente);
				if ($agudezaVisualPaciente["AVSCOD"] || $agudezaVisualPaciente["CCD"] || $agudezaVisualPaciente["PuntoD"] || $agudezaVisualPaciente["AVSCOI"] || $agudezaVisualPaciente["CCI"] || $agudezaVisualPaciente["PuntoI"] || $agudezaVisualPaciente["TonometriaD5"] || $agudezaVisualPaciente["TonometriaD10"] || $agudezaVisualPaciente["TonometriaI5"] || $agudezaVisualPaciente["TonometriaI10"] || $agudezaVisualPaciente["ParpadoD"] || $agudezaVisualPaciente["ParpadoI"] || $agudezaVisualPaciente["MmhgD"] || $agudezaVisualPaciente["MmhgI"]){$agudezaVisual->save();}

				// Guardar en tabla Biomicroscopía
				$biomicroscopiaPaciente = array(
					"Paciente_id" => $id_paciente,
					"CCIPCD" => Input::get("CCIPCD"),
					"BUTD" => Input::get("BUTD"),
					"CCIPCI" => Input::get("CCIPCI"),
					"BUTI" => Input::get("BUTI")
				);
				$biomicroscopia = new Biomicroscopia($biomicroscopiaPaciente);
				if ($biomicroscopiaPaciente["CCIPCD"] || $biomicroscopiaPaciente["BUTD"] || $biomicroscopiaPaciente["CCIPCI"] || $biomicroscopiaPaciente["BUTI"]){$biomicroscopia->save();}

				// Guardar en tabla Fondo
				$fondoPaciente = array(
					"Paciente_id" => $id_paciente,
					"PMVRD" => Input::get("PMVRD"),
					"PMVRI" => Input::get("PMVRI"),
				);
				$fondo = new Fondo($fondoPaciente);
				if ($fondoPaciente["PMVRD"] || $fondoPaciente["PMVRI"]){$fondo->save();}

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
				if ($gonioscopiaPaciente["G1D"] || $gonioscopiaPaciente["G2D"] || $gonioscopiaPaciente["G3D"] || $gonioscopiaPaciente["G4D"] || $gonioscopiaPaciente["G1I"] || $gonioscopiaPaciente["G2I"] || $gonioscopiaPaciente["G3I"] || $gonioscopiaPaciente["G4I"]){$gonioscopia->save();}

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
				if ($movilidadPaciente["M1D"] || $movilidadPaciente["M2D"] || $movilidadPaciente["M3D"] || $movilidadPaciente["M4D"] || $movilidadPaciente["M5D"] || $movilidadPaciente["M6D"] || $movilidadPaciente["M1C"] || $movilidadPaciente["M2C"] || $movilidadPaciente["M3C"] || $movilidadPaciente["M1I"] || $movilidadPaciente["M2I"] || $movilidadPaciente["M3I"] || $movilidadPaciente["M4I"] || $movilidadPaciente["M5I"] || $movilidadPaciente["M6I"] || $movilidadPaciente["PPM"] || $movilidadPaciente["PMonocular"] || $movilidadPaciente["PAlterno"] || $movilidadPaciente["Ducciones"] || $movilidadPaciente["Versiones"] || $movilidadPaciente["OjoFijador"]){$movilidad->save();}

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
				if ($refraccionPaciente["ExoftalmometriaOD"] || $refraccionPaciente["ExoftalmometriaOI"] || $refraccionPaciente["ExoftalmometriaBase"] || $refraccionPaciente["PaquimetriaOD"] || $refraccionPaciente["PaquimetriaOI"] || $refraccionPaciente["RefraccionSphOD"] || $refraccionPaciente["RefraccionCylOD"] || $refraccionPaciente["RefraccionEjeOD"] || $refraccionPaciente["RefraccionAddOD"] || $refraccionPaciente["RefraccionBifocalOD"] || $refraccionPaciente["RefraccionAVOD"] || $refraccionPaciente["RefraccionSphOI"] || $refraccionPaciente["RefraccionCylOI"] || $refraccionPaciente["RefraccionEjeOI"] || $refraccionPaciente["RefraccionAddOI"] || $refraccionPaciente["RefraccionBifocalOI"] || $refraccionPaciente["RefraccionAVOI"] || $refraccionPaciente["EsquiascopiaSphOD"] || $refraccionPaciente["EsquiascopiaCylOD"] || $refraccionPaciente["EsquiascopiaEjeOD"] || $refraccionPaciente["EsquiascopiaAddOD"] || $refraccionPaciente["EsquiascopiaBifocalOD"] || $refraccionPaciente["EsquiascopiaAVOD"] || $refraccionPaciente["EsquiascopiaSphOI"] || $refraccionPaciente["EsquiascopiaCylOI"] || $refraccionPaciente["EsquiascopiaEjeOI"] || $refraccionPaciente["EsquiascopiaAddOI"] || $refraccionPaciente["EsquiascopiaBifocalOI"] || $refraccionPaciente["EsquiascopiaAVOI"] || $refraccionPaciente["QueratometriaOD"] || $refraccionPaciente["QueratometriaOI"]){$refraccion->save();}

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
				if ($diagnosticoPaciente["AstigmatismoD"] || $diagnosticoPaciente["GlaucomaD"] || $diagnosticoPaciente["CataratasD"] || $diagnosticoPaciente["ConjuntivitisD"] || $diagnosticoPaciente["QueratitisD"] || $diagnosticoPaciente["EstrabismoD"] || $diagnosticoPaciente["AstigmatismoI"] || $diagnosticoPaciente["GlaucomaI"] || $diagnosticoPaciente["CataratasI"] || $diagnosticoPaciente["ConjuntivitisI"] || $diagnosticoPaciente["QueratitisI"] || $diagnosticoPaciente["EstrabismoI"] || $diagnosticoPaciente["Diagnostico"]){$diagnostico->save();}

				// Guardar en tabla Tratamiento
				$tratamientoPaciente = array(
					"Paciente_id" => $id_paciente,
					"Tratamiento" => Input::get("Tratamiento")
				);
				$tratamiento = new Tratamiento($tratamientoPaciente);
				if ($tratamientoPaciente["Tratamiento"]){$tratamiento->save();}

				// Guardar en tabla Receta
				$recetaPaciente = array(
					"Paciente_id" => $id_paciente,
					"Receta" => Input::get("Receta")
				);
				$receta = new Receta($recetaPaciente);
				if ($recetaPaciente["Receta"]){$receta->save();}

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
				if ($lentesPaciente["SphOD"] || $lentesPaciente["CylOD"] || $lentesPaciente["EjeOD"] || $lentesPaciente["DIOD"] || $lentesPaciente["PrismaOD"] || $lentesPaciente["BaseOD"] || $lentesPaciente["SphOI"] || $lentesPaciente["CylOI"] || $lentesPaciente["EjeOI"] || $lentesPaciente["DIOI"] || $lentesPaciente["PrismaOI"] || $lentesPaciente["BaseOI"] || $lentesPaciente["Add"] || $lentesPaciente["AO"] || $lentesPaciente["Color"] || $lentesPaciente["Bifocal"] || $lentesPaciente["Cristal"] || $lentesPaciente["CR39"] || $lentesPaciente["Observaciones"]){$lentes->save();}

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
				if ($certificadoPaciente["AnexosOculares"] || $certificadoPaciente["SegmentoAnterior"] || $certificadoPaciente["FondoOjo"] || $certificadoPaciente["PercepcionCromatica"] || $certificadoPaciente["Diagnostico"] || $certificadoPaciente["Tratamiento"]){$certificado->save();}

				// Guardar en tabla Resumen Clínico
				$resumenClinicoPaciente = array(
					"Paciente_id" => $id_paciente,
					"ResumenClinico" => Input::get("ResumenClinico")
				);
				$resumenClinico = new ResumenClinico($resumenClinicoPaciente);
				if ($resumenClinicoPaciente["ResumenClinico"]){$resumenClinico->save();}

				// Guardarn en tabla Hospitalización
				$hospitalizacionPaciente = array(
					"Paciente_id" => $id_paciente,
					"Orden" => Input::get("Orden")
				);
				$hospitalizacion = new Hospitalizacion($hospitalizacionPaciente);
				if($hospitalizacionPaciente["Orden"]){$hospitalizacion->save();}
			}
		}
	}
}