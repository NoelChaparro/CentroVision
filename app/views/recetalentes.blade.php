@extends('layouts.reportes')

@section('titulo')  
    Resumen Clínico
@stop
@section('css')
<link rel="stylesheet" href="../css/lentesprint.css" media="print" />
<link rel="stylesheet" href="../css/lentes.css" media="screen"/>

@stop
@section('Contenido')
	<div class="row fecha">
		<span>Fecha:</span> {{ date("d/m/Y") }}
	</div>
	<div class="nombre">
		<span>Nombre:</span> {{ $datosPaciente[0]->Nombre  }}
	</div>
	
	<div class="row">
		<table class="tabla span8">
			<thead>
				<tr>
					<th></th>
					<th><span>Sph</span></th>
					<th><span>Cyl</span></th>
					<th><span>Eje</span></th>
					<th><span>DI</span></th>
					<th><span>Prisma</span></th>
					<th><span>Base</span></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><span>OD</span></td>
					<td>{{ $lentesPaciente[0]->SphOD }}</td>
					<td>{{ $lentesPaciente[0]->CylOD }}</td>
					<td>{{ $lentesPaciente[0]->EjeOD }}</td>
					<td>{{ $lentesPaciente[0]->DIOD }}</td>
					<td>{{ $lentesPaciente[0]->PrismaOD }}</td>
					<td>{{ $lentesPaciente[0]->BaseOD }}</td>
				</tr>
				<tr>
					<td><span>OI</span></td>
					<td>{{ $lentesPaciente[0]->SphOI }}</td>
					<td>{{ $lentesPaciente[0]->CylOI }}</td>
					<td>{{ $lentesPaciente[0]->EjeOI }}</td>
					<td>{{ $lentesPaciente[0]->DIOI }}</td>
					<td>{{ $lentesPaciente[0]->PrismaOI }}</td>
					<td>{{ $lentesPaciente[0]->BaseOI }}</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="linea1">
		<div class="add">
			<span>Add:</span> {{ $lentesPaciente[0]->Add }}
		</div>
		<div class="ao">
			<span>AO:</span> {{ $lentesPaciente[0]->AO }}
		</div>
		<div class="color">
			<span>Color:</span> {{ $lentesPaciente[0]->Color }}
		</div>
	</div>
	<div class="linea2">
		<div class="bifocal">
			<span>Bifocal:</span> {{ $lentesPaciente[0]->Bifocal }}
		</div>
		<div class="cristal">
			<span>Cristal:</span> 
			@if ($lentesPaciente[0]->Cristal == 1)
     			<i class="icon-ok"></i>
			@endif
		</div>
		<div class="cr39">
			<span>CR-39:</span> 
			@if ($lentesPaciente[0]->CR39 == 1)
	     		<i class="icon-ok"></i>
			@endif
		</div>
	</div>

	<div class="linea3">
		<span>Observaciones:</span> {{ $lentesPaciente[0]->Observaciones }}
	</div>
	<div class="boton">
		<button id="btnImprimir" name="btnImprimir" onclick="window.print();" class="btn btn-primary"><i class="icon-print icon-white"></i> Imprimir</button>
		<button id="btnRegresar" name="btnRegresar" onclick="location.href='.././'" class="btn btn-primary"><i class="icon-chevron-left icon-white"></i> Regresar</button>
	</div>
@stop