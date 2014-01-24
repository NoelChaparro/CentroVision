@extends('layouts.reportes')

@section('titulo')  
    Baja Visión
@stop
@section('css')
	<link rel="stylesheet" href="../css/reportebajavision.css"/>	
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
			<td>
				@if ($datosPaciente)
					{{ $datosPaciente[0]->Nombre }}
				@endif
			</td>
			<th>Edad:</th>
			<td>
				@if ($datosPaciente)
					{{ $datosPaciente[0]->Edad }}
				@endif
			</td>
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
			<td colspan="2"><b>Antecedentes:</b>
				@if ($padecimiento)
					{{ $padecimiento[0]->Antecedentes }}
				@endif
			</td>
		</tr>
		<tr>
			<td>AV corregida (lejos) Ojo Derecho: 
				@if ($agudezaVisual)
					{{ $agudezaVisual[0]->AVSCOD }}
				@endif
			</td>
			<td>AV corregida (lejos) Ojo Izquierdo: 
				@if ($agudezaVisual)
					{{ $agudezaVisual[0]->AVSCOI }}
				@endif
			</td>
		</tr>
		<tr>
			<td>PIO OD: 
				@if ($agudezaVisual)
					{{ $agudezaVisual[0]->MmhgD }}
				@endif
			</td>
			<td>PIO OI: 
				@if ($agudezaVisual)
					{{ $agudezaVisual[0]->MmhgI }}
				@endif
			</td>
		</tr>
		<tr>
			<td>Requiere algún estudio: 
				@if ($bajaVision)
					{{ $bajaVision[0]->RequiereAlgunEstudio }}
				@endif
			</td>
			<td>Requiere tomar medicamentos:
				@if ($bajaVision)
					{{ $bajaVision[0]->RequiereTomarMedicamento }}
				@endif
			</td>
		</tr>		
	</table>

	<table class="table">
		<tr>
			<td>Refraccion OD:</td>
			<td>
				@if ($refraccion)
					Sph: {{$refraccion[0]->RefraccionSphOD}} 
					Cyl: {{$refraccion[0]->RefraccionCylOD}} 
					Eje: {{$refraccion[0]->RefraccionEjeOD}} 
					Bifocal: {{$refraccion[0]->RefraccionBifocalOD}} 
					Add: {{$refraccion[0]->RefraccionAddOD}} 
					AV: {{$refraccion[0]->RefraccionAVOD}}
				@else
					Sph:
					Cyl:
					Eje:
					Bifocal:
					Add:
					AV:					
				@endif
			</td>
		</tr>
		<tr>
			<td>Refraccion OI:</td>
			<td>
				@if ($refraccion)
					Sph: {{$refraccion[0]->RefraccionSphOI}} 
					Cyl: {{$refraccion[0]->RefraccionCylOI}} 
					Eje: {{$refraccion[0]->RefraccionEjeOI}} 
					Bifocal: {{$refraccion[0]->RefraccionBifocalOI}} 
					Add: {{$refraccion[0]->RefraccionAddOI}} 
					AV: {{$refraccion[0]->RefraccionAVOI}}
				@else
					Sph:
					Cyl:
					Eje:
					Bifocal:
					Add:
					AV:					
				@endif				
			</td>
		</tr>		
	</table>

	<table class="table">
		<tr>
			<th style="text-align:center;" colspan="2">Exploración</th>
		</tr>
		<tr>
			<td>Lámpara de Hendidura OD: 
				@if ($biomicroscopia)
					{{$biomicroscopia[0]->CCIPCD}}
				@endif
			</td>
			<td>Lámpara de Hendidura OI: 
				@if ($biomicroscopia)
					{{$biomicroscopia[0]->CCIPCI}}
				@endif
			</td>
		</tr>		
		<tr>
			<td>Fondo de Ojo OD: 
				@if ($fondo)
					{{$fondo[0]->PMVRD}}
				@endif
			</td>
			<td>Fondo de Ojo OI: 
				@if ($fondo)
					{{$fondo[0]->PMVRI}}
				@endif
			</td>
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
		<button id="btnCerrarVentana" name="btnCerrarVentana" onclick="cerrarVentana()" class="btn btn-danger"><i class="icon-remove icon-white"></i> Cerrar</button>
	</div>	
@stop
@section('Javascript')
	<script text="javascript">
		$(document).on('ready',inicio);

		function inicio(){
			$(".menu_principal li:first-child").removeClass("active");
			$(".menu_principal li:eq(3)").addClass("active");
			window.print();
			cerrarVentana();
		}

		var cerrarVentana = function (){
			setTimeout("window.close()",10);
		}
	</script>	
@stop