<?php

class Hospitalizacion extends Eloquent {
	protected $table = 'Hospitalizacion';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }    
}