<?php

class LentesContactoController extends BaseController{
	public function lentesContactoHistorial(){ //Manda llamar la vista operacionLaser
		return View::make('lentescontacto');;
	}
}