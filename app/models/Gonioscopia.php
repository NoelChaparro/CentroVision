<?php

class Gonioscopia extends Eloquent {
	protected $table = 'Gonioscopia';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }    
}