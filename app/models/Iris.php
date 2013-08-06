<?php

class Iris extends Eloquent {

	protected $table = 'Iris';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }     
}