@extends('layouts.reportes')

@section('titulo')  
    Impresión Completa de Expediente
@stop

@section('css')
@stop

@section('Contenido')
	{{$Paciente[0]->Nombre}}
	{{$Paciente[0]->Domicilio}}
	{{$Paciente[0]->Colonia}}
	{{$Paciente[0]->Campo}}
	{{$Paciente[0]->Ciudad}}
	{{$Paciente[0]->Edad}}
	@if ($Paciente[0]->Sexo == 'M')
		Masculino
	@else
		Femenino
	@endif
	{{$Paciente[0]->Ocupacion}}
	{{$Paciente[0]->Telefono}}
	{{$Paciente[0]->Referencia}}
	<p></p>

	Padecimiento<br />
	@if ($Padecimiento)
	{{$Padecimiento[0]->Sintomatologia}}
	{{$Padecimiento[0]->Antecedentes}}
	@endif
	<p></p>

	Agudeza Visual<br />
	@if ($AgudezaVisual)
	{{$AgudezaVisual[0]->AVSCOD}}
	{{$AgudezaVisual[0]->CCD}}
	{{$AgudezaVisual[0]->PuntoD}}
	{{$AgudezaVisual[0]->AVSCOD}}
	{{$AgudezaVisual[0]->AVSCOI}}
	{{$AgudezaVisual[0]->CCI}}
	{{$AgudezaVisual[0]->PuntoI}}
	{{$AgudezaVisual[0]->ParpadoD}}
	{{$AgudezaVisual[0]->ParpadoI}}
	{{$AgudezaVisual[0]->MmhgD}}
	{{$AgudezaVisual[0]->MmhgI}}
	@endif
	<p></p>

	Biomicroscopía e Iris <br />
	@if ($Biomicroscopia)
	{{$Biomicroscopia[0]->BUTD}}
	{{$Biomicroscopia[0]->BUTI}}
	{{$Biomicroscopia[0]->CCIPCD}}
	{{$Biomicroscopia[0]->CCIPCI}}
	@endif
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