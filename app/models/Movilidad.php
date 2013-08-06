<?php

class Movilidad extends Eloquent {
	protected $table = 'Movilidad';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }    
}