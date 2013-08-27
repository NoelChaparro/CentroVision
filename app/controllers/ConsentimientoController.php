<?php

class ConsentimientoController extends BaseController {
    public function imprimirConsentimientoCirugiaOcularExtraocular($consentimiento=null){ //Manda a llamar la vista de consentimiento informado de cirugia ocular y extraocular
        return View::make('CirugiaOcularExtraocular')->with('consentimiento',$consentimiento);
    }

    public function imprimirConsentimientoMedicamentoIntravitreo(){ //Manda a llamar la vista de consentimiento de medicamento intravitreo
        return View::make('MedicamentoIntravitreo');
    }
}