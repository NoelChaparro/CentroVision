<?php

class OperacionLaserController extends BaseController{
	public function calculoOperacionLaser(){ //Manda llamar la vista operacionLaser
		return View::make('operacionLaser');
	}
}