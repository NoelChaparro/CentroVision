<?php

class Imagenes extends Eloquent {
	protected $table = 'Imagenes';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }    
}