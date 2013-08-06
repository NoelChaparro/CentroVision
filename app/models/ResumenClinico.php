<?php

class ResumenClinico extends Eloquent {
	protected $table = 'ResumenClinico';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }    
}