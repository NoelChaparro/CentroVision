@extends('layouts.reportes')

@section('titulo')  
    Resumen Clínico
@stop

@section('Contenido')
	Nombre: {{ $datosPaciente[0]->Nombre  }}
	Edad: {{ $edadPaciente }}
	Fecha: {{ date("d/m/Y") }}
	
	<p>
		Resumen Clínico:
	</p>
	<p>
		{{ $resumenClinico[0]->ResumenClinico }}
	</p>
@stop
