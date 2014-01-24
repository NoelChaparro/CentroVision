<?php

class BajaVisionController extends BaseController {

    public function bajaVision(){ //Genera la vista para el formulario de Baja Vision
        return View::make('bajavision');
    }
    
    public function guardarBajaVision(){ //Guarda los datos del formulario BajaVision
    	if (Request::ajax()){
            $id_paciente = Input::get("varIdPaciente");
    		$datosBajaVision = array(
    			'Paciente_id' => $id_paciente,
    			'RequiereAlgunEstudio' => Input::get("estudio"),
    			'RequiereTomarMedicamento' => Input::get("medicamentos"),
    			'ImpresionDiagnostica' => Input::get("impresionDiagnostica")
    		 );
            $bajaVision = new BajaVision($datosBajaVision);
            $bajaVision->save();

            // Se guarda en la tabla PadecimientoPacientes
            $padecimientoPaciente = array (
                "Paciente_id" => $id_paciente,
                "antecedentes" => Input::get("antecedentes")
            );
            $padecimiento = new PadecimientoPacientes($padecimientoPaciente);
            if ($padecimientoPaciente["antecedentes"]){$padecimiento->save();}

            // Guardar en tabla AgudezaVisual
            $agudezaVisualPaciente = array (
                "Paciente_id" => $id_paciente,
                "AVSCOD" => Input::get("AVSCOD"),
                "CCD" => Input::get("CCD"),
                "PuntoD" => Input::get("PuntoD"),
                "AVSCOI" => Input::get("AVSCOI"),
                "CCI" => Input::get("CCI"),
                "PuntoI" => Input::get("PuntoI"),
                "MmhgD" => Input::get("PIOD"),
                "MmhgI" => Input::get("PIOI")
            );
            $agudezaVisual = new AgudezaVisual($agudezaVisualPaciente);
            if ($agudezaVisualPaciente["AVSCOD"] || $agudezaVisualPaciente["CCD"] || $agudezaVisualPaciente["PuntoD"] || $agudezaVisualPaciente["AVSCOI"] || $agudezaVisualPaciente["CCI"] || $agudezaVisualPaciente["PuntoI"] || $agudezaVisualPaciente["MmhgD"] || $agudezaVisualPaciente["MmhgI"]){$agudezaVisual->save();}

            // Guardar en tabla Refracción
            $refraccionPaciente = array(
                "Paciente_id" => $id_paciente,
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
            );
            $refraccion = new Refraccion($refraccionPaciente);
            if ($refraccionPaciente["RefraccionSphOD"] || $refraccionPaciente["RefraccionCylOD"] || $refraccionPaciente["RefraccionEjeOD"] || $refraccionPaciente["RefraccionAddOD"] || $refraccionPaciente["RefraccionBifocalOD"] || $refraccionPaciente["RefraccionAVOD"] || $refraccionPaciente["RefraccionSphOI"] || $refraccionPaciente["RefraccionCylOI"] || $refraccionPaciente["RefraccionEjeOI"] || $refraccionPaciente["RefraccionAddOI"] || $refraccionPaciente["RefraccionBifocalOI"] || $refraccionPaciente["RefraccionAVOI"]){$refraccion->save();}

            // Guardar en tabla Biomicroscopía
            $biomicroscopiaPaciente = array(
                "Paciente_id" => $id_paciente,
                "CCIPCD" => Input::get("lamparaHendiduraOD"),
                "CCIPCI" => Input::get("lamparaHendiduraOI"),
            );
            $biomicroscopia = new Biomicroscopia($biomicroscopiaPaciente);
            if ($biomicroscopiaPaciente["CCIPCD"] || $biomicroscopiaPaciente["CCIPCI"]){$biomicroscopia->save();}

            // Guardar en tabla Fondo
            $fondoPaciente = array(
                "Paciente_id" => $id_paciente,
                "PMVRD" => Input::get("fondoOjoOD"),
                "PMVRI" => Input::get("fondoOjoOI"),
            );
            $fondo = new Fondo($fondoPaciente);
            if ($fondoPaciente["PMVRD"] || $fondoPaciente["PMVRI"]){$fondo->save();}
    	}
    }

    public function imprimirBajaVision($idPaciente=null){ //Se genera la vista para realizar la impresion del programa de baja vision
        $datosPaciente = '';
        $bajaVision = '';
        $padecimiento = '';
        $agudezaVisual = '';
        $refraccion = '';
        $biomicroscopia = '';
        $fondo = '';
        if($idPaciente){
            $datosPaciente = DB::table('DatosPacientes')->where('IdPaciente', '=', $idPaciente)->get();
            $bajaVision = DB::table('BajaVision')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
            $padecimiento = DB::table('PadecimientoPacientes')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
            $agudezaVisual = DB::table('AgudezaVisual')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
            $refraccion = DB::table('Refraccion')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
            $biomicroscopia = DB::table('Biomicroscopia')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
            $fondo = DB::table('Fondo')->where('Paciente_id', '=', $idPaciente)->orderBy('created_at', 'desc')->get();
        }
    	return View::make('reportebajavision')->with('datosPaciente',$datosPaciente)->with('bajaVision',$bajaVision)->with('padecimiento',$padecimiento)->with('agudezaVisual',$agudezaVisual)->with('refraccion',$refraccion)->with('biomicroscopia',$biomicroscopia)->with('fondo',$fondo);
    }
}