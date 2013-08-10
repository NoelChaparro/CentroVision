<?php

class Refraccion extends Eloquent {
	protected $table = 'Refraccion';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }     
}