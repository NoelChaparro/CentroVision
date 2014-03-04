@extends('layouts.reportes')

@section('titulo')  
    Impresión Completa de Expediente
@stop

@section('css')
@stop

@section('Contenido')
	<br><br><br><br><br><br>
	<table class="table table-condensed">
		<tr>
			<th>Nombre:</th>
			<td>{{$Paciente[0]->Nombre}}</td>
			<th>Domicilio:</th>
			<td>{{$Paciente[0]->Domicilio}}</td>
			<th>Colonia:</th>
			<td>{{$Paciente[0]->Colonia}}</td>
		</tr>
		<tr>
			<td></td><td></td>
			<th>Campo:</th>
			<td>{{$Paciente[0]->Campo}}</td>
			<th>Ciudad:</th>
			<td>{{$Paciente[0]->Ciudad}}</td>
		</tr>
		<tr>
			<th>Sexo:</th>
			<td>
				@if ($Paciente[0]->Sexo == 'M')
					Masculino
				@else
					Femenino
				@endif
			</td>
			<th>Edad:</th>
			<td>{{$Paciente[0]->Edad}}</td>
			<th>Ocupación:</th>
			<td>{{$Paciente[0]->Ocupacion}}</td>
		</tr>
		<tr>
			<th>Teléfono:</th>
			<td>{{$Paciente[0]->Telefono}}</td>
			<th>Referencia:</th>
			<td>{{$Paciente[0]->Referencia}}</td>
		</tr>
	</table>
	<p></p>

	<h3>Padecimiento:</h3>
	@if ($Padecimiento)
	<table class="table">
		<tr>
			<th>Sintomatología:</th>
			<td>{{$Padecimiento[0]->Sintomatologia}}</td>
		</tr>
		<tr>
			<th>Antecedentes:</th>
			<td>{{$Padecimiento[0]->Antecedentes}}</td>
		</tr>
	</table>
	@endif
	<p></p>

	<h3>Agudeza Visual:</h3>
	<table class="table">
		<tr>
			<th colspan="3" style="text-align:center">Ojo Derecho</th>
			<th colspan="3" style="text-align:center">Ojo Izquierdo</th>
		</tr>
		<tr>
			<td style="text-align:center">AVSCOD:</td>
			<td style="text-align:center">CCOD:</td>
			<td style="text-align:center">(.):</td>
			<td style="text-align:center">AVSCOI:</td>
			<td style="text-align:center">CCOI:</td>
			<td style="text-align:center">(.):</td>
		</tr>
		<tr>
			@if ($AgudezaVisual)
			<td style="text-align:center">{{$AgudezaVisual[0]->AVSCOD}}</td>
			<td style="text-align:center">{{$AgudezaVisual[0]->CCD}}</td>
			<td style="text-align:center">{{$AgudezaVisual[0]->PuntoD}}</td>
			<td style="text-align:center">{{$AgudezaVisual[0]->AVSCOI}}</td>
			<td style="text-align:center">{{$AgudezaVisual[0]->CCI}}</td>
			<td style="text-align:center">{{$AgudezaVisual[0]->PuntoI}}</td>
			@endif
		</tr>		
	</table>	
	<p></p>

	<h3>Biomicroscopía e Iris:</h3>
	<table class="table">
		<tr>
			<th>Conjuntiva, Cornea, Iris, Pupilas y Cristalino OD:</th>
			<th>Conjuntiva, Cornea, Iris, Pupilas y Cristalino OI:</th>
		</tr>
		<tr>
			@if ($Biomicroscopia)
			<td>{{$Biomicroscopia[0]->CCIPCD}}</td>			
			<td>{{$Biomicroscopia[0]->CCIPCI}}</td>
			@endif
		</tr>
		<tr>
			<td>BUT: {{$Biomicroscopia[0]->BUTD}} Seg.</td>
			<td>BUT: {{$Biomicroscopia[0]->BUTI}} Seg.</td>
		</tr>
	</table>
	<p></p>

	<h3>Fondo y Retina:</h3>
	<table class="table">
		<tr>
			<th>Papila, Mácula, Vasos y Retina Periférica OD:</th>
			<th>Papila, Mácula, Vasos y Retina Periférica OI:</th>
		</tr>
		<tr>
			@if ($FondoRetina)
			<td>{{$FondoRetina[0]->PMVRD}}</td>
			<td>{{$FondoRetina[0]->PMVRI}}</td>
			@endif
		</tr>
	</table>	
	<p></p>

	<h3>Gonioscopía</h3>
	<table class="table">
		@if ($Gonioscopia)
		<tr>
			<td></td><td>{{$Gonioscopia[0]->G1D}}</td><td></td><td></td><td></td><td></td><td>{{$Gonioscopia[0]->G1I}}</td><td></td>
		</tr>
		<tr>
			<td>{{$Gonioscopia[0]->G2D}}</td><td></td><td>{{$Gonioscopia[0]->G3D}}</td><td></td><td></td><td>{{$Gonioscopia[0]->G2I}}</td><td></td><td>{{$Gonioscopia[0]->G3I}}</td>
		</tr>
		<tr>
			<td></td><td>{{$Gonioscopia[0]->G4D}}</td><td></td><td></td><td></td><td></td><td>{{$Gonioscopia[0]->G4I}}</td><td></td>
		</tr>
		@endif	
	</table>
	<p></p>


	<h3>Movilidad:</h3>
	@if ($Movilidad)
	<table class="table">
		
		<tr>
			<td></td><td>{{$Movilidad[0]->M1D}}</td><td></td><td>{{$Movilidad[0]->M2D}}</td><td></td><td>{{$Movilidad[0]->M1C}}</td><td></td><td>{{$Movilidad[0]->M1I}}</td><td></td><td>{{$Movilidad[0]->M2I}}</td><td></td>
		</tr>
		<tr>
			<td>{{$Movilidad[0]->M3D}}</td><td></td><td>{{$Movilidad[0]->M4D}}</td><td></td><td></td><td>{{$Movilidad[0]->M2C}}</td><td></td><td></td><td>{{$Movilidad[0]->M3I}}</td><td></td><td>{{$Movilidad[0]->M4I}}</td>
		</tr>
		<tr>
			<td></td><td>{{$Movilidad[0]->M5D}}</td><td></td><td>{{$Movilidad[0]->M6D}}</td><td></td><td>{{$Movilidad[0]->M3C}}</td><td></td><td>{{$Movilidad[0]->M5I}}</td><td></td><td>{{$Movilidad[0]->M6I}}</td><td></td>
		</tr>
	</table>
	<table class="table table-condensed">
		<tr>
			<th>PPM:</th>
			<td>{{$Movilidad[0]->PPM}}</td>
			<th>P. Monocular: </th>
			<td>{{$Movilidad[0]->PMonocular}}</td>
			<th>P. Alterno: </th>
			<td>{{$Movilidad[0]->PAlterno}}</td>
		</tr>
		<tr>
			<th>Ducciones:</th>
			<td>{{$Movilidad[0]->Ducciones}}</td>
			<th>Versiones:</th>
			<td>{{$Movilidad[0]->Versiones}}</td>
			<th>Ojo Fijador:</th>
			<td>{{$Movilidad[0]->OjoFijador}}</td>
		</tr>
	</table>
	@endif
	<p></p>

	<h3>Refracción:</h3>
	@if ($Refraccion)
	<table class="table">
		<tr>
			<td>Exoftalmometria OD: {{$Refraccion[0]->ExoftalmometriaOD}}</td>
			<td></td>
			<td>Exoftalmometria OI: {{$Refraccion[0]->ExoftalmometriaOI}}</td>
		</tr>
		<tr>
			<td></td><td>Barra: {{$Refraccion[0]->ExoftalmometriaBase}}</td><td></td>
		</tr>
		<tr>
			<td>Paquimetría OD: {{$Refraccion[0]->PaquimetriaOD}}</td>
			<td></td>
			<td>Paquimetría OI: {{$Refraccion[0]->PaquimetriaOI}}</td>
		</tr>
	</table>
	<table class="table">
		<thead>
			<tr>
				<td>Sph</td>
				<td>Cyl</td>
				<td>Eje</td>
				<td>Add</td>
				<td>Bifocal</td>
				<td>AV</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$Refraccion[0]->RefraccionSphOD}}</td>
				<td>{{$Refraccion[0]->RefraccionCylOD}}</td>								
				<td>{{$Refraccion[0]->RefraccionEjeOD}}</td>
				<td>{{$Refraccion[0]->RefraccionAddOD}}</td>
				<td>{{$Refraccion[0]->RefraccionBifocalOD}}</td>
				<td>{{$Refraccion[0]->RefraccionAVOD}}</td>
				<th>Ojo Derecho</th>
			</tr>
			<tr>
				<td>{{$Refraccion[0]->RefraccionSphOI}}</td>
				<td>{{$Refraccion[0]->RefraccionCylOI}}</td>								
				<td>{{$Refraccion[0]->RefraccionEjeOI}}</td>
				<td>{{$Refraccion[0]->RefraccionAddOI}}</td>
				<td>{{$Refraccion[0]->RefraccionBifocalOI}}</td>
				<td>{{$Refraccion[0]->RefraccionAVOI}}</td>
				<th>Ojo Izquierdo</th>
			</tr>
		</tbody>
	</table>
	<table class="table">
		<thead>
			<tr>
				<td>Sph</td>
				<td>Cyl</td>								
				<td>Eje</td>
				<td></td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$Refraccion[0]->EsquiascopiaSphOD}}</td>
				<td>{{$Refraccion[0]->EsquiascopiaCylOD}}</td>								
				<td>{{$Refraccion[0]->EsquiascopiaEjeOD}}</td>
				<th>Ojo Derecho</th>
			</tr>
			<tr>
				<td>{{$Refraccion[0]->EsquiascopiaSphOI}}</td>
				<td>{{$Refraccion[0]->EsquiascopiaCylOI}}</td>									
				<td>{{$Refraccion[0]->EsquiascopiaEjeOI}}</td>
				<th>Ojo Izquierdo</th>
			</tr>
		</tbody>
	</table>
	<table class="table">
		<tr>
			<th>Queratometría OD: </th>
			<td>{{$Refraccion[0]->QueratometriaOD}}</td>
		</tr>
		<tr>
			<th>Queratometría OI: </th>
			<td>{{$Refraccion[0]->QueratometriaOI}}</td>			
		</tr>
	</table>
	@endif
	<p></p>

	<h3>Diagnóstico:</h3>
	@if ($Diagnostico)
		{{$Diagnostico[0]->Diagnostico}}
	@endif
	<p></p>

	<h3>Tratamiento:</h3>
	@if ($Tratamiento)
		{{$Tratamiento[0]->Tratamiento}}
	@endif
	<p></p>

	<h3>Certificado:</h3>
	@if ($Certificado)
	<table class="table">
		<tr>
			<th>Anexos Oculares: </th>
			<td>{{$Certificado[0]->AnexosOculares}}</td>
		</tr>
		<tr>
			<th>Segmento Anterior: </th>
			<td>{{$Certificado[0]->SegmentoAnterior}}</td>
		</tr>
		<tr>
			<th>Fondo Ojo: </th>
			<td>{{$Certificado[0]->FondoOjo}}</td>
		</tr>
		<tr>
			<th>Percepción Cromática: </th>
			<td>{{$Certificado[0]->PercepcionCromatica}}</td>
		</tr>
		<tr>
			<th>Diagnóstico: </th>
			<td>{{$Certificado[0]->Diagnostico}}</td>
		</tr>
		<tr>
			<th>Tratamiento: </th>
			<td>{{$Certificado[0]->Tratamiento}}</td>
		</tr>
	</table>
	@endif
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