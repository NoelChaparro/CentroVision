<?php

class Certificado extends Eloquent {
	protected $table = 'Certificado';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }    
}