<?php

class CalendarioOperacion extends Eloquent {
	protected $table = 'CalendarioOperacion';
	
    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }
}