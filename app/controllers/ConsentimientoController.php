<?php

class ConsentimientoController extends BaseController {
    public function imprimirConsentimientoCirugiaOcularExtraocular(){ //Manda a llamar la vista de consentimiento informado de cirugia ocular y extraocular
        return View::make('CirugiaOcularExtraocular');
    }

    public function imprimirConsentimientoMedicamentoIntravitreo(){ //Manda a llamar la vista de consentimiento de medicamento intravitreo
        return View::make('MedicamentoIntravitreo');
    }
}