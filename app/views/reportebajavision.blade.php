@extends('layouts.reportes')

@section('titulo')  
    Baja Visión
@stop
@section('css')
@stop
@section('Contenido')
	<center>
		Dr. Gerardo Contreras <br />
		Av. Allende No. 421 <br />
		Teléfono 581-05-91
	</center>
	<br />
	<table class="table">
		<tr>
			<th>Nombre del Paciente:</th>
			<td>{{ $datosPaciente[0]->Nombre }}</td>
			<th>Edad:</th>
			<td>{{ $datosPaciente[0]->Edad }}</td>
		</tr>
		<tr>
			<th>Fecha:</th>
			<td>{{ date('d/m/Y') }}</td>
			<th>Hora de Consulta:</th>
			<td>{{ date('H:i') }}</td>
		</tr>
	</table>

	<table class="table">
		<tr>
			<th style="text-align:center;" colspan="2">Historia Clínica Oftalmológica</th>
		</tr>
		<tr>
			<td colspan="2"><b>Antecedentes:</b> {{ $padecimiento[0]->Antecedentes }}</td>
		</tr>
		<tr>
			<td>AV corregida (lejos) Ojo Derecho: {{ $agudezaVisual[0]->AVSCOD }}</td>
			<td>AV corregida (lejos) Ojo Izquierdo: {{ $agudezaVisual[0]->AVSCOI }}</td>
		</tr>
		<tr>
			<td>PIO OD: {{ $agudezaVisual[0]->MmhgD }}</td>
			<td>PIO OI: {{ $agudezaVisual[0]->MmhgI }}</td>
		</tr>
		<tr>
			<td>Requiere algún estudio: {{ $bajaVision[0]->RequiereAlgunEstudio }}</td>
			<td>Requiere tomar medicamentos:{{ $bajaVision[0]->RequiereTomarMedicamento }}</td>
		</tr>		
	</table>

	<table class="table">
		<tr>
			<td>Refraccion OD:</td>
			<td>Sph: {{$refraccion[0]->RefraccionSphOD}} 
				Cyl: {{$refraccion[0]->RefraccionCylOD}} 
				Eje: {{$refraccion[0]->RefraccionEjeOD}} 
				Bifocal: {{$refraccion[0]->RefraccionBifocalOD}} 
				Add: {{$refraccion[0]->RefraccionAddOD}} 
				AV: {{$refraccion[0]->RefraccionAVOD}}
			</td>
		</tr>
		<tr>
			<td>Refraccion OI:</td>
			<td>Sph: {{$refraccion[0]->RefraccionSphOI}} 
				Cyl: {{$refraccion[0]->RefraccionCylOI}} 
				Eje: {{$refraccion[0]->RefraccionEjeOI}} 
				Bifocal: {{$refraccion[0]->RefraccionBifocalOI}} 
				Add: {{$refraccion[0]->RefraccionAddOI}} 
				AV: {{$refraccion[0]->RefraccionAVOI}}
			</td>
		</tr>		
	</table>

	<table class="table">
		<tr>
			<th style="text-align:center;" colspan="2">Exploración</th>
		</tr>
		<tr>
			<td>Lámpara de Hendidura OD: {{$biomicroscopia[0]->CCIPCD}}</td>
			<td>Lámpara de Hendidura OI: {{$biomicroscopia[0]->CCIPCI}}</td>
		</tr>		
		<tr>
			<td>Fondo de Ojo OD: {{$fondo[0]->PMVRD}}</td>
			<td>Fondo de Ojo OI: {{$fondo[0]->PMVRI}}</td>
		</tr>		
	</table>

	<table class="table">
		<tr>
			<th style="text-align:center;">Impresión Diagnóstica</th>
		</tr>
		<tr>
			<td>{{ $bajaVision[0]->ImpresionDiagnostica }}</td>
		</tr>
	</table>
	<div class="boton">
		<button id="btnImprimir" name="btnImprimir" onclick="window.print();" class="btn btn-primary"><i class="icon-print icon-white"></i> Imprimir</button>
		<button id="btnRegresar" name="btnRegresar" onclick="history.back()" class="btn btn-primary"><i class="icon-chevron-left icon-white"></i> Regresar</button>
	</div>	
@stop
