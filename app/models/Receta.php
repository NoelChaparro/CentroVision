<?php

class Receta extends Eloquent {
	protected $table = 'Receta';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }
}