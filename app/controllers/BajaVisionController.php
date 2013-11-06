<?php

class BajaVisionController extends BaseController {

    public function bajaVision(){ //Genera la vista para el formulario de Baja Vision
        return View::make('bajavision');
    }
    
    public function guardarBajaVision(){ //Guarda los datos del formulario BajaVision
    	if (Request::ajax()){
    		$datosBajaVision = array(
    			'Paciente_id' => Input::get("varIdPaciente"),
    			'RequiereAlgunEstudio' => Input::get("estudio"),
    			'RequiereTomarMedicamento' => Input::get("medicamentos"),
    			'ImpresionDiagnostica' => Input::get("impresionDiagnostica")
    		 );

    		$bajaVision = new BajaVision($datosBajaVision);
    		$bajaVision->save();
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