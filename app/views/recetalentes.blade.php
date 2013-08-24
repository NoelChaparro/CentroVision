@extends('layouts.reportes')

@section('titulo')  
    Resumen Clínico
@stop

@section('Contenido')
	Fecha: {{ date("d/m/Y") }}
	Nombre: {{ $datosPaciente[0]->Nombre  }}
	
	
	<table class="table">
		<thead>
			<tr>
				<th></th>
				<th>Sph</th>
				<th>Cyl</th>
				<th>Eje</th>
				<th>DI</th>
				<th>Prisma</th>
				<th>Base</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>OD</td>
				<td>{{ $lentesPaciente[0]->SphOD }}</td>
				<td>{{ $lentesPaciente[0]->CylOD }}</td>
				<td>{{ $lentesPaciente[0]->EjeOD }}</td>
				<td>{{ $lentesPaciente[0]->DIOD }}</td>
				<td>{{ $lentesPaciente[0]->PrismaOD }}</td>
				<td>{{ $lentesPaciente[0]->BaseOD }}</td>
			</tr>
			<tr>
				<td>OI</td>
				<td>{{ $lentesPaciente[0]->SphOI }}</td>
				<td>{{ $lentesPaciente[0]->CylOI }}</td>
				<td>{{ $lentesPaciente[0]->EjeOI }}</td>
				<td>{{ $lentesPaciente[0]->DIOI }}</td>
				<td>{{ $lentesPaciente[0]->PrismaOI }}</td>
				<td>{{ $lentesPaciente[0]->BaseOI }}</td>
			</tr>
		</tbody>
	</table>

	<div class="row">
		Add: {{ $lentesPaciente[0]->Add }}
		AO: {{ $lentesPaciente[0]->AO }}
		Color: {{ $lentesPaciente[0]->Color }}
	</div>
	<div class="row">
		Bifocal: {{ $lentesPaciente[0]->Bifocal }}
		Cristal: 
		@if ($lentesPaciente[0]->Cristal == 1)
     		<i class="icon-ok"></i>
		@endif
		CR-39: 
		@if ($lentesPaciente[0]->CR39 == 1)
     		<i class="icon-ok"></i>
		@endif
	</div>
	<div class="row">
		Observaciones: {{ $lentesPaciente[0]->Observaciones }}
	</div>
@stop