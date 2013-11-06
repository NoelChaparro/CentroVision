<?php

class BajaVision extends Eloquent {
	protected $table = 'BajaVision';

    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }    
}