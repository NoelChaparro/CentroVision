<?php

class Retina extends Eloquent {
	protected $table = 'Retina';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }    
}