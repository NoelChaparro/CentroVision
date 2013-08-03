<?php

class Biomicroscopia extends Eloquent {
	protected $table = 'Biomicroscopia';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }     
}