@extends('layouts.reportes')

@section('titulo')  
    Certificado
@stop
@section('css')
	<link rel="stylesheet" href="../css/reportecertificado.css"/>
@stop
@section('Contenido')
	<br><br><br><br><br><p>El que suscribe, Médico Cirujano Oftalmologo, debidamente autorizado para ejercer la profesión, Certifica haber examinado oftalmológicamente a:</p>
	<center>
	<p>{{ $datosPaciente[0]->Nombre }}</p>
	</center>
	<p>Habiendo encontrado lo siguiente:</p>
	<table class="table table-condensed">
		<tr>
			<th>AVSCOD:</th>
			@if ($agudezaVisual)
			<td>{{ $agudezaVisual[0]->AVSCOD }}</td>
			@endif
			<th>CC:</th>
			@if ($agudezaVisual)
			<td>{{ $agudezaVisual[0]->CCD }}</td>
			@endif
			<th>(.)</th>
			@if ($agudezaVisual)
			<td>{{ $agudezaVisual[0]->PuntoD }}</td>
			@endif
		</tr>
		<tr>
			<th>AVSCOI:</th>
			@if ($agudezaVisual)
			<td>{{ $agudezaVisual[0]->AVSCOI }}</td>
			@endif
			<th>CC:</th>
			@if ($agudezaVisual)
			<td>{{ $agudezaVisual[0]->CCI }}</td>
			@endif
			<th>(.)</th>
			@if ($agudezaVisual)
			<td>{{ $agudezaVisual[0]->PuntoI }}</td>
			@endif
		</tr>			
	</table>
	<strong>Tonometría (Presión Intraocular):</strong>
	<table class="table table-condensed">
		<tr>
			<td style="text-align:center">
				<b>OD = </b>
				@if ($agudezaVisual)
					{{ $agudezaVisual[0]->MmhgD }} mmHg
				@endif
			</td>
			<td style="text-align:center">
				<b>OI = </b>
				@if ($agudezaVisual)
					{{ $agudezaVisual[0]->MmhgI }} mmHg
				@endif
			</td>
		</tr>
	</table>
	<h5>Anexos Oculares:</h5>
	@if ($certificado)
	<p>{{ $certificado[0]->AnexosOculares }}</p>
	@endif
	<h5>Segmento Anterior:</h5>
	@if ($certificado)
	<p>{{ $certificado[0]->SegmentoAnterior }}</p>
	@endif
	<h5>Fondo Ojo:</h5>
	@if ($certificado)
	<p>{{ $certificado[0]->FondoOjo }}</p>
	@endif
	<h5>Percepción Cromática:</h5>
	@if ($certificado)
	<p>{{ $certificado[0]->PercepcionCromatica }}</p>
	@endif
	<h5>Refracción:</h5>
	<table class="table tblrefraccion table-condensed">
		<tr>
			<td></td>
			<th>Sph</th>
			<th>Cyl</th>
			<th>Eje</th>
			<th>Add</th>
			<th>Bifocal</th>
			<th>A.V.</th>
		</tr>
		<tr>
			<th>O.D.</th>
			@if ($refraccion)
			<td>{{ $refraccion[0]->RefraccionSphOD }}</td>
			<td>{{ $refraccion[0]->RefraccionCylOD }}</td>
			<td>{{ $refraccion[0]->RefraccionEjeOD }}</td>
			<td>{{ $refraccion[0]->RefraccionAddOD }}</td>
			<td>{{ $refraccion[0]->RefraccionBifocalOD }}</td>
			<td>{{ $refraccion[0]->RefraccionAVOD }}</td>
			@endif
		</tr>
		<tr>
			<th>O.I.</th>
			@if ($refraccion)
			<td>{{ $refraccion[0]->RefraccionSphOI }}</td>
			<td>{{ $refraccion[0]->RefraccionCylOI }}</td>
			<td>{{ $refraccion[0]->RefraccionEjeOI }}</td>
			<td>{{ $refraccion[0]->RefraccionAddOI }}</td>
			<td>{{ $refraccion[0]->RefraccionBifocalOI }}</td>
			<td>{{ $refraccion[0]->RefraccionAVOI }}</td>
			@endif
		</tr>
	</table>
	<h5>Diagnóstico:</h5>
	@if ($certificado)
	<p>{{ $certificado[0]->Diagnostico }}</p>
	@endif
	<br /><br />
	<center>
		________________________________ <br>
		Dr. Gerardo Contreras Herrera
	</center>
	<div class="boton">
		<button id="btnImprimir" name="btnImprimir" onclick="window.print();" class="btn btn-primary"><i class="icon-print icon-white"></i> Imprimir</button>
		<button id="btnCerrarVentana" name="btnCerrarVentana" onclick="cerrarVentana()" class="btn btn-danger"><i class="icon-remove icon-white"></i> Cerrar</button>
	</div>
@stop

@section('Javascript')
	<script text="javascript">
		$(document).on('ready',inicio);

		function inicio(){
			window.print();
			cerrarVentana();
		}

		var cerrarVentana = function (){
			setTimeout("window.close()",10);
		}
	</script>
@stop