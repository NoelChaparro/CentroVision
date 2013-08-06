<?php

class Exoftalmometria extends Eloquent {
	protected $table = 'Exoftalmometria';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }     
}