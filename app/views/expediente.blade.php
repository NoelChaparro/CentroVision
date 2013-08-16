@extends('layouts.base')
@section('titulo')  
    Centro de Visión
@stop

@section('Contenido')

	<!-- start: Main Menu -->
				<div id="sidebar-left" class="span2">
					<nav class="nav-collapse collapse sidebar-nav">
						<ul class="nav nav-tabs nav-stacked main-menu" id="mytab">	
							<li><a href="#Inicio" class="active"><i class="hidden-phone icon-white icon-home"></i><span> Inicio</span></a></li>
	                        <li><a href="#Datos_Generales"><i class="hidden-phone icon-white icon-user"></i><span> Datos Generales</span></a></li> 
	                        <li><a href="#Padecimientos"><i class="hidden-phone icon-white icon-briefcase"></i><span> Padecimientos</span></a></li>
	                        <li><a href="#Agudeza_Visual"><i class="hidden-phone icon-white icon-minus-sign"></i><span> Agudeza Visual</span></a></li>
	                        <li><a href="#BiomicroscopiaIris"><i class="hidden-phone icon-white icon-eye-close"></i><span> Biomicroscopia</span></a></li>                
	                        <li><a href="#FondoRetina"><i class="hidden-phone icon-white icon-road"></i><span> Fondo</span></a></li>
	                        <li><a href="#Gonioscopia"><i class="hidden-phone icon-white icon-filter"></i><span> Gonioscopia</span></a></li>
	                        <li><a href="#Movilidad"><i class="hidden-phone icon-white icon-th-large"></i><span> Movilidad</span></a></li>
	                        <li><a href="#Refraccion"><i class="hidden-phone icon-white icon-picture"></i><span> Exoftalmometria</span></a></li>
	                        <li><a href="#Diagnostico"><i class="hidden-phone icon-white icon-comment"></i><span> Diagnosticos</span></a></li>
	                        <li><a href="#Tratamiento"><i class="hidden-phone icon-white icon-folder-open"></i><span> Tratamiento</span></a></li>
	                        <li><a href="#Receta"><i class="hidden-phone icon-white icon-ok"></i><span> Receta</span></a></li>
	                        <li><a href="#Lentes"><i class="hidden-phone icon-white icon-zoom-in"></i><span> Lentes</span></a></li>
	                        <li><a href="#Certificado"><i class="hidden-phone icon-white icon-file"></i><span> Certificado</span></a></li>
	                        <li><a href="#Resumen_Clinico"><i class="hidden-phone icon-white icon-list"></i><span> Resumen Clinico</span></a></li>
	                        <li><a href="#Hospitalizacion"><i class="hidden-phone icon-white icon-plus"></i><span> Hospitalizacion</span></a></li>
						</ul>
					</nav>
				</div>
				<!-- end: Main Menu -->
				
				<noscript>
					<div class="alert alert-block span10">
						<h4 class="alert-heading">Ups!!!!</h4>
						<p>Se Necesita tener instalado <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> para usar este sitio.</p>
					</div>
				</noscript>

	<!-- start: Content -->
	<div class="offset2">		
		<!-- Form Name -->
		{{ Form::open(array('action' => 'ExpedientePacienteController@guardarExpediente','class' => 'form-horizontal frmExpedientePaciente')) }}
		<!--start: Inicio -->
		<section id="Inicio">
			<button href="#BuscarPaciente" role="button" class="btn btn-large " data-toggle="modal" id="btnBuscarPacienteModal">Buscar Paciente</button>
       		<div class="modal hide fade in" id="BuscarPaciente">
            	<div class="modal-header">
               		<a class="close" data-dismiss="modal">&times;</a>
               		<h3>Buscar Paciente</h3>
               		<br />
               		<input type="text" class="input-xlarge search-query span4" id="txtBuscarPaciente" placeholder="Buscar Paciente">
               		<button type="submit" class="btn" id="btnBuscarPaciente">Buscar</button>
           		</div>
           		<div class="modal-body">
           	    	<table class="table tblBusquedaPacientesModal table-striped">
           	    		<thead>
           	    			<tr>
           	    				<th>#</th>
           	    				<th>Nombre</th>
           	    				<th>Dirección</th>
           	    				<th>Teléfono</th>
           	    			</tr>
           	    		</thead>
						<tbody></tbody>
           	    	</table>
       	    	</div>
   	        	<div class="modal-footer">
                	<a href="#" class="btn" data-dismiss="modal">Cerrar</a>
           		</div>
       		</div>
		</section>
		<!--End: Inicio -->
		<!--start: Datos Generales -->
		<section id="Datos_Generales">
			<legend>Registrar Paciente</legend>

			<div class="control-group">
			  	{{ Form::label('nombre', 'Nombre:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('nombre','',array('class' => 'input-xlarge')) }}
			  	</div>
			</div>
				
			<div class="control-group">
				{{ Form::label('domicilio', 'Domicilio:', array('class' => 'control-label')) }}
				<div class="controls">
			    	{{ Form::text('domicilio','',array('class' => 'input-xlarge')) }}
			  	</div>
			</div>
						
			<div class="control-group">
			  	{{ Form::label('colonia', 'Colonia:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('colonia','',array('class' => 'input-xlarge')) }}				
			  	</div>
			</div>				

			<div class="control-group">
			  	{{ Form::label('campo', 'Campo:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('campo','',array('class' => 'input-xlarge')) }}				
			  	</div>
			</div>				

			<div class="control-group">
			  	{{ Form::label('ciudad', 'Ciudad:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('ciudad','',array('class' => 'input-xlarge')) }}
			  	</div>
			</div>

			<div class="control-group">
			  	{{ Form::label('fechanacimiento', 'Fecha de Nacimiento:',array('class' => 'control-label', 'for' => 'date01')) }}
			  	<div class="controls">
			  		{{ Form::text('fechanacimiento','',array('class' => 'input-small datepicker', 'id' => 'date01', 'placeholder' => 'DD/MM/YYYY')) }}
			  	</div>
			</div>

			<div class="control-group">
			  	{{ Form::label('sexo', 'Sexo:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	<label class="radio inline">
			      		<input type="radio" name="Sexo" value="M" checked="checked">
			      		Masculino
			    	</label>
			    	<label class="radio inline">
			      		<input type="radio" name="Sexo" value="F">
			      		Femenino
			    	</label>
			  </div>
			</div>

			<div class="control-group">
			  	{{ Form::label('ocupacion', 'Ocupación:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('ocupacion','',array('class' => 'input-xlarge')) }}
			  	</div>
			</div>				
							
			<div class="control-group">
			  	{{ Form::label('telefono', 'Telefono:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('telefono','',array('class' => 'input-medium')) }}
			  	</div>
			</div>					
	
			<div class="control-group">
			  	{{ Form::label('referencia', 'Referencia:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('referencia','',array('class' => 'input-xlarge')) }}
			  	</div>
			</div>
		</section>
		<!-- end: Datos Generales -->

		<!-- start: Padecimiento -->
		<section id="Padecimientos"> 
			<legend>Padecimiento</legend>
			<div class="control-group">
			  	{{ Form::label('sintomatologia', 'Sintomatología:', array('class' => 'control-label')) }}
			  	<div class="controls">                     
			    	{{ Form::textarea('sintomatologia','',array('class' => 'span6')) }}
			  	</div>
			</div>

			<div class="control-group">
			  	{{ Form::label('antecedentes', 'Antecedentes:', array('class' => 'control-label')) }}
			  	<div class="controls">
			  		{{ Form::textarea('antecedentes','',array('class' => 'span6')) }}
			  	</div>
			</div>					
		</section>
		<!-- end: Padecimiento -->

		<!-- start: Agudeza Visual -->
		<section id="Agudeza_Visual">
			<legend>Agudeza Visual</legend>
			<div class="control-group">
			  	{{ Form::label('AVSCOD', 'AVSCOD:', array('class' => 'control-label')) }}
			  	<div class="controls">
			  		{{ Form::text('AVSCOD','',array('class' => 'input-medium')) }}
			  	</div>
			</div>

			<div class="control-group">
			  	{{ Form::label('CCD', 'CCD:', array('class' => 'control-label')) }}
			  	<div class="controls">
			  		{{ Form::text('CCD','',array('class' => 'input-medium')) }}
			  	</div>
			</div>

			<div class="control-group">
			  	{{ Form::label('PuntoD', '(.):', array('class' => 'control-label')) }}
			  	<div class="controls">
			  		{{ Form::text('PuntoD','',array('class' => 'input-medium')) }}
			  	</div>
			</div>

			<div class="control-group">
			  	{{ Form::label('AVSCOI', 'AVSCOI:', array('class' => 'control-label')) }}
			  	<div class="controls">
			  		{{ Form::text('AVSCOI','',array('class' => 'input-medium')) }}
			  	</div>
			</div>

			<div class="control-group">
			  	{{ Form::label('CCI', 'CCI:', array('class' => 'control-label')) }}
			  	<div class="controls">
			  		{{ Form::text('CCI','',array('class' => 'input-medium')) }}
			  	</div>
			</div>

			<div class="control-group">
			  	{{ Form::label('PuntoI', '(.):', array('class' => 'control-label')) }}
			  	<div class="controls">
			  		{{ Form::text('PuntoI','',array('class' => 'input-medium')) }}
			  	</div>
			</div>

			<h3>Tonometría</h3>

			<div class="control-group">
   			  	{{ Form::label('TonometriaD5', '5.5:', array('class' => 'control-label')) }}
			  	<div class="controls">
			  		{{ Form::text('TonometriaD5','',array('class' => 'input-medium')) }}
			  </div>
			</div>

			<div class="control-group">
 			  	{{ Form::label('TonometriaD10', '10.0:', array('class' => 'control-label')) }}
			  	<div class="controls">
			  		{{ Form::text('TonometriaD10','',array('class' => 'input-medium')) }}  
			  	</div>
			</div>

			<div class="control-group">
			  	<div class="controls">
			  		{{ Form::text('MmhgD','',array('class' => 'input-medium')) }}
			  	</div>
			</div>

			<div class="control-group">
			  	{{ Form::label('ParpadoD', 'Órbita, Parpados y Aparato Lagrimal:', array('class' => 'control-label')) }}
			  	<div class="controls">
			  		{{ Form::textarea('ParpadoD','',array('class' => 'span6')) }}
			  	</div>
			</div>

			<div class="control-group">
			  	{{ Form::label('TonometriaI5', '5.5:', array('class' => 'control-label')) }}
			  	<div class="controls">
			  		{{ Form::text('TonometriaI5','',array('class' => 'input-medium')) }}
			  	</div>
			</div>

			<div class="control-group">
			  	{{ Form::label('TonometriaI10', '10.0:', array('class' => 'control-label')) }}
			  	<div class="controls">
			  		{{ Form::text('TonometriaI10','',array('class' => 'input-medium')) }}
			  	</div>
			</div>

			<div class="control-group">
			  	<div class="controls">
			  		{{ Form::text('MmhgI','',array('class' => 'input-medium')) }}
			  	</div>
			</div>

			<div class="control-group">
		      	{{ Form::label('ParpadoI', 'Órbita, Parpados y Aparato Lagrimal:', array('class' => 'control-label')) }}
			  	<div class="controls"> 
			    	{{ Form::textarea('ParpadoI','',array('class' => 'span6')) }}                    
			  </div>
			</div>
		</section>
		<!-- end: Agudeza Visual -->

		<!--start: Biomicroscopia e Iris -->
		<section id="BiomicroscopiaIris">
				
			<legend>Biomicroscopía e Iris</legend>

			<div class="control-group">
			  	{{ Form::label('CCIPCD', 'Conjuntiva, Cornea, Iris, Pupilas y Cristalino: ', array ('class' => 'control-label')) }}
			  	<div class="controls">
			  		{{ Form::textarea('CCIPCD','',array('class' => 'span6')) }}
			  	</div>
			</div>

			<div class="control-group">
			  	{{ Form::label('BUTD', 'BUTD: ', array ('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('BUTD','',array('class' => 'input-medium')) }}
			    	Seg.                
			  	</div>
			</div>

			<div class="control-group">
			  	{{ Form::label('CCIPCI', 'Conjuntiva, Cornea, Iris, Pupilas y Cristalino: ', array ('class' => 'control-label')) }}
			  	<div class="controls">
			  		{{ Form::textarea('CCIPCI','',array('class' => 'span6')) }}
			  	</div>
			</div>

			<div class="control-group">
			  	{{ Form::label('BUTI', 'BUTI: ', array ('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('BUTI','',array('class' => 'input-medium')) }}
			    	Seg.                
			  	</div>
			</div>
		</section>
		<!-- end: Biomicroscopia e Iris -->

		<!-- start: Fondo y Retina -->
		<section id="FondoRetina">
			<legend>Fondo y Retina</legend>
			<div class="control-group">
				{{ Form::label('PMVRD', 'Papila, Mácula, Vasos y Retina Periférica: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::textarea('PMVRD','',array('class' => 'span6')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('PMVRI', 'Papila, Mácula, Vasos y Retina Periférica: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::textarea('PMVRI','',array('class' => 'span6')) }}
				</div>
			</div>
		</section>
		<!-- end: Fondo y Retina -->

		<!-- start: Gonioscopía -->
		<section id="Gonioscopia">
			<legend>Gonioscopía</legend>
			<div class="control-group">
				<div class="controls">
					{{ Form::text('G1D','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('G2D','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('G3D','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('G4D','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('G1I','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('G2I','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('G3I','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('G4I','',array('class' => 'input-small')) }}
				</div>
			</div>

		</section>
		<!-- End: Gonioscopía -->

		<!-- start: Movilidad -->
		<section id="Movilidad">
			<legend>Movilidad</legend>
			<div class="control-group">
				<div class="controls">
					{{ Form::text('M1D','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('M2D','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('M3D','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('M4D','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('M5D','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('M6D','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('M1C','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('M2C','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('M3C','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('M1I','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('M2I','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('M3I','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('M4I','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('M5I','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				<div class="controls">
					{{ Form::text('M6I','',array('class' => 'input-small')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('PPM', 'PPM: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('PPM','',array('class' => 'input-xxlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('PMonocular', 'P. Monocular: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('PMonocular','',array('class' => 'input-xxlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('PAlterno', 'P. Alterno: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('PAlterno','',array('class' => 'input-xxlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('Ducciones', 'Ducciones: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('Ducciones','',array('class' => 'input-xxlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('Versiones', 'Versiones: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('Versiones','',array('class' => 'input-xxlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('OjoFijador', 'Ojo Fijador: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('OjoFijador','',array('class' => 'input-xxlarge')) }}
				</div>
			</div>
		</section>
		<!-- end: Movilidad -->

		<!-- start: Refracción -->
		<section id="Refraccion">
			<legend>Refracción</legend>

			<div class="control-group">
				{{ Form::label('ExoftalmometriaOD', 'Exoftalmometria OD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('ExoftalmometriaOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('ExoftalmometriaOI', 'Exoftalmometria OI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('ExoftalmometriaOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('ExoftalmometriaBase', 'Exoftalmometria Base: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('ExoftalmometriaBase','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('PaquimetriaOD', 'Paquimetría OD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('PaquimetriaOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('PaquimetriaOI', 'Paquimetría OI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('PaquimetriaOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<h3>Refracción</h3>

			<div class="control-group">
				{{ Form::label('RefraccionSphOD', 'RefraccionSphOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('RefraccionSphOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('RefraccionCylOD', 'RefraccionCylOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('RefraccionCylOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('RefraccionEjeOD', 'RefraccionEjeOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('RefraccionEjeOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('RefraccionAddOD', 'RefraccionAddOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('RefraccionAddOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('RefraccionBifocalOD', 'RefraccionBifocalOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('RefraccionBifocalOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('RefraccionAVOD', 'RefraccionAVOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('RefraccionAVOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('RefraccionSphOI', 'RefraccionSphOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('RefraccionSphOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('RefraccionCylOI', 'RefraccionCylOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('RefraccionCylOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('RefraccionEjeOI', 'RefraccionEjeOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('RefraccionEjeOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('RefraccionAddOI', 'RefraccionAddOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('RefraccionAddOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('RefraccionBifocalOI', 'RefraccionBifocalOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('RefraccionBifocalOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('RefraccionAVOI', 'RefraccionAVOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('RefraccionAVOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<h3>Esquiascopia</h3>

			<div class="control-group">
				{{ Form::label('EsquiascopiaSphOD', 'EsquiascopiaSphOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('EsquiascopiaSphOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('EsquiascopiaCylOD', 'EsquiascopiaCylOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('EsquiascopiaCylOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('EsquiascopiaEjeOD', 'EsquiascopiaEjeOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('EsquiascopiaEjeOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('REsquiascopiaAddOD', 'EsquiascopiaAddOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('EsquiascopiaAddOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('EsquiascopiaBifocalOD', 'EsquiascopiaBifocalOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('EsquiascopiaBifocalOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('EsquiascopiaAVOD', 'EsquiascopiaAVOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('EsquiascopiaAVOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('EsquiascopiaSphOI', 'EsquiascopiaSphOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('EsquiascopiaSphOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('EsquiascopiaCylOI', 'EsquiascopiaCylOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('EsquiascopiaCylOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('EsquiascopiaEjeOI', 'EsquiascopiaEjeOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('EsquiascopiaEjeOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('REsquiascopiaAddOI', 'EsquiascopiaAddOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('EsquiascopiaAddOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('EsquiascopiaBifocalOI', 'EsquiascopiaBifocalOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('EsquiascopiaBifocalOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('EsquiascopiaAVOI', 'EsquiascopiaAVOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('EsquiascopiaAVOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('QueratometriaOD', 'Queratometría OD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('QueratometriaOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('QueratometriaOI', 'Queratometría OI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('QueratometriaOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

		</section>
		<!-- end: Refracción -->

		<!-- start: Diagnóstico -->
		<section id="Diagnostico">
			<legend>Diagnóstico</legend>

			<div class="control-group">
			  	<label class="control-label" for="chkDiagnostico">Diagnóstico:</label>
			  	<div class="controls">
				    <label class="checkbox" for="AstigmatismoD">
				      	{{ Form::checkbox("AstigmatismoD", "1"); }}
				      	Astigmatismo OD
				    </label>
				    <label class="checkbox" for="GlaucomaD">
				      	{{ Form::checkbox("GlaucomaD", "1"); }}
				      	Glaucoma OD
				    </label>
				    <label class="checkbox" for="CataratasD">
				      	{{ Form::checkbox("CataratasD", "1"); }}
				      	Cataratas OD
				    </label>
				    <label class="checkbox" for="ConjuntivitisD">
				      	{{ Form::checkbox("ConjuntivitisD", "1"); }}
				      	Conjuntivitis OD
				    </label>
				    <label class="checkbox" for="QueratitisD">
				      	{{ Form::checkbox("QueratitisD", "1"); }}
				      	Queratitis OD
				    </label>
				    <label class="checkbox" for="EstrabismoD">
				      	{{ Form::checkbox("EstrabismoD", "1"); }}
				      	Estrabismo OD
				    </label>
				    <label class="checkbox" for="AstigmatismoI">
				      	{{ Form::checkbox("AstigmatismoI", "1"); }}
				      	Astigmatismo OI
				    </label>
				    <label class="checkbox" for="GlaucomaI">
				      	{{ Form::checkbox("GlaucomaI", "1"); }}
				      	Glaucoma OD
				    </label>
				    <label class="checkbox" for="CataratasI">
				      	{{ Form::checkbox("CataratasI", "1"); }}
				      	Cataratas OD
				    </label>
				    <label class="checkbox" for="ConjuntivitisI">
				      	{{ Form::checkbox("ConjuntivitisI", "1"); }}
				      	Conjuntivitis OD
				    </label>
				    <label class="checkbox" for="QueratitisI">
				      	{{ Form::checkbox("QueratitisI", "1"); }}
				      	Queratitis OD
				    </label>
				    <label class="checkbox" for="EstrabismoI">
				      	{{ Form::checkbox("EstrabismoI", "1"); }}
				      	Estrabismo OD
				    </label>
			 	</div>
			</div>

			<div class="control-group">
				{{ Form::label('Diagnostico', 'Diagnóstico: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::textarea('Diagnostico','',array('class' => 'span6')) }}
				</div>
			</div>

		</section>
		<!-- end: Diagnóstico -->

		<!-- start: Tratamiento -->
		<section id="Tratamiento">
			<legend>Tratamiento</legend>

			<div class="control-group">
				{{ Form::label('Tratamiento', 'Tratamiento: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::textarea('Tratamiento','',array('class' => 'span6')) }}
				</div>
			</div>
		</section>
		<!-- end: Tratamiento -->

		<!-- start: Receta -->
		<section id="Receta">
			<legend>Receta</legend>

			<div class="control-group">
				{{ Form::label('Receta', 'Receta: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::textarea('Receta','',array('class' => 'span6')) }}
				</div>
			</div>
		</section>
		<!-- end: Receta -->

		<!-- start: Lentes -->
		<section id="Lentes">
			<legend>Lentes</legend>

			<div class="control-group">
				{{ Form::label('SphOD', 'SphOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('SphOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('CylOD', 'CylOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('CylOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('EjeOD', 'EjeOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('EjeOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('DIOD', 'DIOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('DIOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('PrismaOD', 'PrismaOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('PrismaOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('BaseOD', 'BaseOD: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('BaseOD','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('SphOI', 'SphOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('SphOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('CylOI', 'CylOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('CylOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('EjeOI', 'EjeOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('EjeOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('DIOI', 'DIOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('DIOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('PrismaOI', 'PrismaOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('PrismaOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>
			
			<div class="control-group">
				{{ Form::label('BaseOI', 'BaseOI: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('BaseOI','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('Add', 'Add: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('Add','',array('class' => 'input-xlarge')) }}
				</div>
			</div>
			
			<div class="control-group">
				{{ Form::label('AO', 'AO: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('AO','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('Color', 'Color: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('Color','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('Bifocal', 'Bifocal: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('Bifocal','',array('class' => 'input-xlarge')) }}
				</div>
			</div>

			<label class="checkbox" for="Cristal">
			    {{ Form::checkbox("Cristal", "1"); }}
			    Cristal
		    </label>

		    <label class="checkbox" for="CR39">
			    {{ Form::checkbox("CR39", "1"); }}
			    CR-39
		    </label>

		    <div class="control-group">
				{{ Form::label('ObservacionesLentes', 'Observaciones: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('ObservacionesLentes','',array('class' => 'input-xxlarge')) }}
				</div>
			</div>
		</section>
		<!-- end: Lentes -->

		<!-- start: Certificado -->
		<section id="Certificado">
			<legend>Certificado</legend>

			<div class="control-group">
				{{ Form::label('AnexosOculares', 'Anexos Oculares: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::textarea('AnexosOculares','',array('class' => 'span6')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('SegmentoAnterior', 'Segmento Anterior: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::textarea('SegmentoAnterior','',array('class' => 'span6')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('FondoOjo', 'Fondo Ojo: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::textarea('FondoOjo','',array('class' => 'span6')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('PercepcionCromatica', 'Percepción Cromática: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::textarea('PercepcionCromatica','',array('class' => 'span6')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('DiagnosticoCertificado', 'Diagnóstico: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::textarea('DiagnosticoCertificado','',array('class' => 'span6')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('TratamientoCertificado', 'Tratamiento: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::textarea('TratamientoCertificado','',array('class' => 'span6')) }}
				</div>
			</div>
		</section>
		<!-- end: Certificado -->

		<!-- start: Resumen Clínico -->
		<section id="Resumen_Clinico">
			<legend>Resumen Clínico</legend>

			<div class="control-group">
				{{ Form::label('ResumenClinico', 'Resumen Clínico: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::textarea('ResumenClinico','',array('class' => 'span6')) }}
				</div>
			</div>
		</section>	
		<!-- end: Resumen Clínico -->

		<!-- start: Hospitalización -->
		<section id="Hospitalizacion">
			<legend>Hospitalización</legend>

			<div class="control-group">
				{{ Form::label('Clinica', 'Clínica: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::text('Clinica','',array('class' => 'input-xxlarge')) }}
				</div>
			</div>

			<div class="control-group">
				{{ Form::label('Orden', 'Orden: ', array('class' => 'control-label')) }}
				<div class="controls">
					{{ Form::textarea('Orden','',array('class' => 'span6')) }}
				</div>
			</div>
		</section>		
		<!-- end: Hospitalización -->

		<!-- start: Button -->
		<div class="control-group">
		  	<label class="control-label"></label>
		  	<div class="controls">
		    	<input value="Guardar" class="btn btn-large btn-primary" type="submit">
		    	<input value="Cancelar" class="btn btn-large btn-primary" type="button">
		  	</div>
		</div>
		<!-- end: button-->
	{{ Form::close() }}

	</div><!--/fluid-row-->
@stop


@section('Javascript')
	<script src="js/ExpedientePaciente.js"></script>
@stop