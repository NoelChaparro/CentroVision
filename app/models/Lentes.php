<?php

class Lentes extends Eloquent {
	protected $table = 'Lentes';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }    
}