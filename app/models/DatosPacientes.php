<?php

class DatosPacientes extends Eloquent {
	
	protected $table = 'DatosPacientes';

    protected $guarded = array();

    public static $rules = array();

    public function PadecimientoPacientes(){
    	return $this->hasMany('PadecimientoPacientes');
    }
}