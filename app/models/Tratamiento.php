<?php

class Tratamiento extends Eloquent {
	protected $table = 'Tratamiento';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }    
}