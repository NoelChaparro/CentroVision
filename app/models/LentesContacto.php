<?php

class LentesContacto extends Eloquent {
	protected $table = 'LentesContacto';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }
}