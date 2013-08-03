<?php

class AgudezaVisual extends Eloquent {
	protected $table = 'AgudezaVisual';
	
    protected $guarded = array();

    public static $rules = array();

    public function DatosPacientes()
    {
        return $this->hasOne('DatosPacientes');
    }    
}