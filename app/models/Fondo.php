<?php

class Fondo extends Eloquent {
	protected $table = 'Fondo';
	
    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }     
}