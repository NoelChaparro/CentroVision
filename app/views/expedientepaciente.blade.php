@extends('layouts.reportes')

@section('titulo')  
    Impresión Completa de Expediente
@stop

@section('css')
@stop

@section('Contenido')
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
		</tr>
	</table>
	
	
	{{$Biomicroscopia[0]->BUTI}}
	
	
	
	<p></p>

	Fondo y Retina <br />
	@if ($FondoRetina)
	{{$FondoRetina[0]->PMVRD}}
	{{$FondoRetina[0]->PMVRI}}
	@endif
	<p></p>

	Gonioscopía <br />
	@if ($Gonioscopia)
	{{$Gonioscopia[0]->G1D}}
	{{$Gonioscopia[0]->G2D}}
	{{$Gonioscopia[0]->G3D}}
	{{$Gonioscopia[0]->G4D}}
	{{$Gonioscopia[0]->G1I}}
	{{$Gonioscopia[0]->G2I}}
	{{$Gonioscopia[0]->G3I}}
	{{$Gonioscopia[0]->G4I}}
	@endif
	<p></p>

	Movilidad <br />
	@if ($Movilidad)
	{{$Movilidad[0]->M1D}}
	{{$Movilidad[0]->M2D}}
	{{$Movilidad[0]->M3D}}
	{{$Movilidad[0]->M4D}}
	{{$Movilidad[0]->M5D}}
	{{$Movilidad[0]->M6D}}
	{{$Movilidad[0]->M1C}}
	{{$Movilidad[0]->M2C}}
	{{$Movilidad[0]->M3C}}
	{{$Movilidad[0]->M1I}}
	{{$Movilidad[0]->M2I}}
	{{$Movilidad[0]->M3I}}
	{{$Movilidad[0]->M4I}}
	{{$Movilidad[0]->M5I}}
	{{$Movilidad[0]->M6I}}
	{{$Movilidad[0]->PPM}}
	{{$Movilidad[0]->PMonocular}}
	{{$Movilidad[0]->PAlterno}}
	{{$Movilidad[0]->Ducciones}}
	{{$Movilidad[0]->Versiones}}
	{{$Movilidad[0]->OjoFijador}}
	@endif
	<p></p>

	Refracción <br />
	@if ($Refraccion)
	{{$Refraccion[0]->ExoftalmometriaOD}}
	{{$Refraccion[0]->ExoftalmometriaOI}}
	{{$Refraccion[0]->ExoftalmometriaBase}}
	{{$Refraccion[0]->PaquimetriaOD}}
	{{$Refraccion[0]->PaquimetriaOI}}
	{{$Refraccion[0]->RefraccionSphOD}}
	{{$Refraccion[0]->RefraccionCylOD}}
	{{$Refraccion[0]->RefraccionEjeOD}}
	{{$Refraccion[0]->RefraccionAddOD}}
	{{$Refraccion[0]->RefraccionBifocalOD}}
	{{$Refraccion[0]->RefraccionAVOD}}

	{{$Refraccion[0]->RefraccionSphOI}}
	{{$Refraccion[0]->RefraccionCylOI}}
	{{$Refraccion[0]->RefraccionEjeOI}}
	{{$Refraccion[0]->RefraccionAddOI}}
	{{$Refraccion[0]->RefraccionBifocalOI}}
	{{$Refraccion[0]->RefraccionAVOI}}

	{{$Refraccion[0]->EsquiascopiaSphOD}}
	{{$Refraccion[0]->EsquiascopiaCylOD}}
	{{$Refraccion[0]->EsquiascopiaEjeOD}}
	{{$Refraccion[0]->EsquiascopiaSphOI}}
	{{$Refraccion[0]->EsquiascopiaCylOI}}
	{{$Refraccion[0]->EsquiascopiaEjeOI}}

	{{$Refraccion[0]->QueratometriaOD}}
	{{$Refraccion[0]->QueratometriaOI}}
	@endif
	<p></p>
	Diagnóstico <br />
	@if ($Diagnostico)
		@if ($Diagnostico[0]->AstigmatismoD)
			Asigmatismo OD
		@endif
		@if ($Diagnostico[0]->GlaucomaD)
			Glaucoma OD
		@endif
		@if ($Diagnostico[0]->CataratasD)
			Cataratas OD
		@endif
		@if ($Diagnostico[0]->ConjuntivitisD)
			Conjuntivitis OD
		@endif
		@if ($Diagnostico[0]->QueratitisD)
			Queratitis OD
		@endif
		@if ($Diagnostico[0]->EstrabismoD)
			Estrabismo OD
		@endif
		@if ($Diagnostico[0]->AstigmatismoI)
			Asigmatismo OI
		@endif
		@if ($Diagnostico[0]->GlaucomaI)
			Glaucoma OI
		@endif
		@if ($Diagnostico[0]->CataratasI)
			Cataratas OI
		@endif
		@if ($Diagnostico[0]->ConjuntivitisI)
			Conjuntivitis OI
		@endif
		@if ($Diagnostico[0]->QueratitisI)
			Queratitis OI
		@endif
		@if ($Diagnostico[0]->EstrabismoI)
			Estrabismo OI
		@endif
		{{$Diagnostico[0]->Diagnostico}}
	@endif
	<p></p>

	Tratamiento <br />
	@if ($Tratamiento)
	{{$Tratamiento[0]->Tratamiento}}
	@endif
	<p></p>

	Certificado <br />
	@if ($Certificado)
	{{$Certificado[0]->AnexosOculares}}
	{{$Certificado[0]->SegmentoAnterior}}
	{{$Certificado[0]->FondoOjo}}
	{{$Certificado[0]->PercepcionCromatica}}
	{{$Certificado[0]->Diagnostico}}
	{{$Certificado[0]->Tratamiento}}
	@endif
	<div class="boton">
		<button id="btnImprimir" name="btnImprimir" onclick="window.print();" class="btn btn-info"><i class="icon-print icon-white"></i> Imprimir</button>
		<button id="btnRegresar" name="btnRegresar" onclick="history.back()" class="btn btn-primary"><i class="icon-chevron-left icon-white"></i> Regresar</button>
	</div>		
@stop