<?php

class PadecimientoPacientes extends Eloquent {
	
	protected $table = 'PadecimientoPacientes';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }    
}