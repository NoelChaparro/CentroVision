<?php

class Diagnostico extends Eloquent {
	protected $table = 'Diagnostico';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }
}