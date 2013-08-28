@extends('layouts.base')
@section('titulo')  
    Expediente Paciente
@stop

@section('Contenido')
	<!-- start: Main Menu -->
	<div id="sidebar-left" class="span2">
		<nav class=" sidebar-nav">
			<ul class="nav nav-tabs nav-stacked main-menu" id="mytab">	
				<li><a href="#mnInicio" class="active"><i class="hidden-tablet icon-white icon-home"></i><span class="hidden-phone"> Inicio</span></a></li>
	            <li><a href="#mnDatos_Generales"><i class="hidden-tablet icon-white icon-user"></i><span class="hidden-phone"> Datos Generales</span></a></li>
	            <li><a href="#mnPadecimientos"><i class="hidden-tablet icon-white icon-briefcase"></i><span class="hidden-phone"> Padecimientos</span></a></li>
	            <li><a href="#mnAgudeza_Visual"><i class="hidden-tablet icon-white icon-minus-sign"></i><span class="hidden-phone"> Agudeza Visual</span></a></li>
	            <li><a href="#mnBiomicroscopiaIris"><i class="hidden-tablet icon-white icon-eye-close"></i><span class="hidden-phone"> Biomicroscopia</span></a></li>                
	            <li><a href="#mnFondoRetina"><i class="hidden-tablet icon-white icon-road"></i><span class="hidden-phone"> Fondo y Retina</span></a></li>
	            <li><a href="#mnGonioscopia"><i class="hidden-tablet icon-white icon-filter"></i><span class="hidden-phone"> Gonioscopia</span></a></li>
	            <li><a href="#mnMovilidad"><i class="hidden-tablet icon-white icon-th-large"></i><span class="hidden-phone"> Movilidad</span></a></li>
	            <li><a href="#mnRefraccion"><i class="hidden-tablet icon-white icon-picture"></i><span class="hidden-phone"> Refracción</span></a></li>
	            <li><a href="#mnDiagnostico"><i class="hidden-tablet icon-white icon-comment"></i><span class="hidden-phone"> Diagnosticos</span></a></li>
	            <li><a href="#mnTratamiento"><i class="hidden-tablet icon-white icon-folder-open"></i><span class="hidden-phone"> Tratamiento</span></a></li>
	            <li><a href="#mnReceta"><i class="hidden-tablet icon-white icon-ok"></i><span class="hidden-phone"> Receta</span ></a></li>
	            <li><a href="#mnLentes"><i class="hidden-tablet icon-white icon-zoom-in"></i><span class="hidden-phone"> Lentes</span></a></li>
	            <li><a href="#mnCertificado"><i class="hidden-tablet icon-white icon-file"></i><span class="hidden-phone"> Certificado</span></a></li>
	            <li><a href="#mnResumen_Clinico"><i class="hidden-tablet icon-white icon-list"></i><span class="hidden-phone"> Resumen Clinico</span></a></li>
	            <li><a href="#mnHospitalizacion"><i class="hidden-tablet icon-white icon-plus"></i><span class="hidden-phone"> Hospitalizacion</span></a></li>
	            <li><a href="#mnConsentimientoCirugiaOcularExtraocular"><i class="hidden-tablet icon-white icon-plus"></i><span class="hidden-phone"> Concentimiento Cirugía Ocular/Extraocular</span></a></li>
	            <li><a href="#mnConsentimientoAplicacionMedicamentosIntravitreos"><i class="hidden-tablet icon-white icon-plus"></i><span class="hidden-phone"> Concentimiento Aplicación de Medicamentos Intravitreos</span></a></li>
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
		{{ Form::open(array('action' => 'ExpedientePacienteController@guardarExpediente','class' => 'form-horizontal frmExpedientePaciente', 'data-validate' => 'parsley')) }}
		<input type='hidden' name='varIdPaciente' id="varIdPaciente" value='' />
		<!--start: Inicio -->
		<section id="mnInicio">
			<figure>
				<img src="img/logo.jpg" alt="">
			</figure>
			<a href="#mdlBuscarPaciente" role="button" class="btn btn-primary" data-toggle="modal" id="btnBuscarPacienteModal"><i class="icon-search icon-white"></i> Buscar Paciente</a>
       		<div class="modal hide fade" tabindex="-1" role="dialog" id="mdlBuscarPaciente">
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
       		</br></br></br></br>
		</section>
		<!--End: Inicio -->
		
		<!--start: Datos Generales -->
		<section id="mnDatos_Generales">
			<legend>Registrar Paciente</legend>
			<div class="row">
				<div class="control-group">
				  	{{ Form::label('nombre', 'Nombre:', array('class' => 'control-label')) }}
				  	<div class="controls">
				    	{{ Form::text('nombre','',array('class' => 'input-xxlarge', 'data-required' => 'true')) }}
				  	</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group">
					{{ Form::label('domicilio', 'Domicilio:', array('class' => 'control-label')) }}
					<div class="controls">
				    	{{ Form::text('domicilio','',array('class' => 'input-xxlarge', 'data-required' => 'true')) }}
				  	</div>
				</div>
			</div>
			
			<div class="row">	
				<div class="control-group span3">
				  	{{ Form::label('colonia', 'Colonia:', array('class' => 'control-label')) }}
				  	<div class="controls">
				    	{{ Form::text('colonia','',array('class' => 'input-large')) }}				
				  	</div>
				</div>									
				<div class="control-group span3">
				  	{{ Form::label('campo', 'Campo:', array('class' => 'control-label')) }}
				  	<div class="controls">
				    	{{ Form::text('campo','',array('class' => 'input-medium')) }}				
				  	</div>
				</div>
			</div>	

			<div class="row">
				<div class="control-group span3">
				  	{{ Form::label('ciudad', 'Ciudad:', array('class' => 'control-label')) }}
				  	<div class="controls">
				    	{{ Form::text('ciudad','',array('class' => 'input-xlarge')) }}
				  	</div>
				</div>
				<div class="control-group span3">
				  	{{ Form::label('telefono', 'Telefono:', array('class' => 'control-label')) }}
				  	<div class="controls">
				    	{{ Form::text('telefono','',array('class' => 'input-small')) }}
				  	</div>
				</div>	
			</div>
			
			<div class="row">
				<div class="control-group span3">
				  	{{ Form::label('fechanacimiento', 'Fecha Nacimiento:',array('class' => 'control-label', 'for' => 'date01')) }}
				  	<div class="controls">
				  		{{ Form::text('fechanacimiento','',array('class' => 'input-small datepicker', 'id' => 'date01', 'placeholder' => 'DD/MM/YYYY', 'data-required' => 'true')) }}
				  	</div>
				</div>
				<div class="control-group span5">
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
			</div>

			<div class="row">
				<div class="control-group">
				  	{{ Form::label('ocupacion', 'Ocupación:', array('class' => 'control-label')) }}
				  	<div class="controls">
				    	{{ Form::text('ocupacion','',array('class' => 'input-xlarge')) }}
				  	</div>
				</div>				
			</div>
							
			<div class="row">
				<div class="control-group">
				  	{{ Form::label('referencia', 'Referencia:', array('class' => 'control-label')) }}
				  	<div class="controls">
				    	{{ Form::text('referencia','',array('class' => 'input-xlarge')) }}
				  	</div>
				</div>
			</div>
			</br></br></br></br>
		</section>
		<!-- end: Datos Generales -->
		
		<!-- start: Padecimiento -->
		<section id="mnPadecimientos"> 
			<legend>Padecimiento</legend>
			<div class="row">
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
			</div>	
			</br></br></br></br>				
		</section>
		<!-- end: Padecimiento -->
		
		<!-- start: Agudeza Visual -->
		<section id="mnAgudeza_Visual">
			<legend>Agudeza Visual</legend>
			<h5>Ojo Derecho</h5>
			<div class="row">
				<div class="control-group span2">
				  	{{ Form::label('AVSCOD', 'AVSCOD:', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::text('AVSCOD','',array('class' => 'input-mini')) }}
				  	</div>
				</div>

				<div class="control-group span2">
				  	{{ Form::label('CCD', 'CCD:', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::text('CCD','',array('class' => 'input-mini')) }}
				  	</div>
				</div>

				<div class="control-group span2">
				  	{{ Form::label('PuntoD', '(.):', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::text('PuntoD','',array('class' => 'input-mini')) }}
				  	</div>
				</div>
			</div>
			
			<h5>Ojo Izquierdo</h5>
			<div class="row">
				<div class="control-group span2">
				  	{{ Form::label('AVSCOI', 'AVSCOI:', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::text('AVSCOI','',array('class' => 'input-mini')) }}
				  	</div>
				</div>

				<div class="control-group span2">
				  	{{ Form::label('CCI', 'CCI:', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::text('CCI','',array('class' => 'input-mini')) }}
				  	</div>
				</div>

				<div class="control-group span2">
				  	{{ Form::label('PuntoI', '(.):', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::text('PuntoI','',array('class' => 'input-mini')) }}
				  	</div>
				</div>
			</div>
			
			<h5>Ojo Derecho</h5>
			<div class="row">
				<div class="control-group span2">
	   			  	{{ Form::label('TonometriaD5', '5.5:', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::text('TonometriaD5','',array('class' => 'input-mini')) }}
				  </div>
				</div>

				<div class="control-group span2">
	 			  	{{ Form::label('TonometriaD10', '10.0:', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::text('TonometriaD10','',array('class' => 'input-mini')) }}  
				  	</div>
				</div>
			</div>
			
			<div class="row">
				<div class="control-group">
				  	{{ Form::label('ParpadoD', 'Órbita, Parpados y Aparato Lagrimal:', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::textarea('ParpadoD','',array('class' => 'span6')) }}
				  	</div>
				</div>
			</div>
			
			<h5>Ojo Izquierdo</h5>	
			<div class="row">
				<div class="control-group span2">
				  	{{ Form::label('TonometriaI5', '5.5:', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::text('TonometriaI5','',array('class' => 'input-mini')) }}
				  	</div>
				</div>

				<div class="control-group span2">
				  	{{ Form::label('TonometriaI10', '10.0:', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::text('TonometriaI10','',array('class' => 'input-mini')) }}
				  	</div>
				</div>
			</div>

			<div class="row">
				<div class="control-group">
			      	{{ Form::label('ParpadoI', 'Órbita, Parpados y Aparato Lagrimal:', array('class' => 'control-label')) }}
				  	<div class="controls"> 
				    	{{ Form::textarea('ParpadoI','',array('class' => 'span6')) }}                    
				  </div>
				</div>
			</div>
			<h5>Tonometría</h5>
			<div class="row">
				<div class="span3">
					<div class="control-group span2">
					{{ Form::label('MmhgD', 'MmhgD:', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::text('MmhgD','',array('class' => 'input-mini')) }}
				  	</div>
				</div>
				</div>
				<div class="span3">
					<div class="control-group">
					{{ Form::label('MmhgI', 'MmhgI:', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::text('MmhgI','',array('class' => 'input-mini')) }}
				  	</div>
				</div>
				</div>
			</div>
			</br></br></br></br>
		</section>
		<!-- end: Agudeza Visual -->
		
		<!--start: Biomicroscopia e Iris -->
		<section id="mnBiomicroscopiaIris">
				
			<legend>Biomicroscopía e Iris</legend>
			<div class="row">
				<div class="control-group">
				  	{{ Form::label('CCIPCD', 'Conjuntiva, Cornea, Iris, Pupilas y Cristalino: ', array ('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::textarea('CCIPCD','',array('class' => 'span6')) }}
				  	</div>
				</div>

				<div class="control-group">
				  	{{ Form::label('BUTD', 'BUTD: ', array ('class' => 'control-label')) }}
				  	<div class="controls">
				    	{{ Form::text('BUTD','',array('class' => 'input-mini')) }}
				    	Seg.                
				  	</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group">
				  	{{ Form::label('CCIPCI', 'Conjuntiva, Cornea, Iris, Pupilas y Cristalino: ', array ('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::textarea('CCIPCI','',array('class' => 'span6')) }}
				  	</div>
				</div>

				<div class="control-group">
				  	{{ Form::label('BUTI', 'BUTI: ', array ('class' => 'control-label')) }}
				  	<div class="controls">
				    	{{ Form::text('BUTI','',array('class' => 'input-mini')) }}
				    	Seg.                
				  	</div>
				</div>
			</div>
			</br></br></br></br>
		</section>
		<!-- end: Biomicroscopia e Iris -->
		
		<!-- start: Fondo y Retina -->
		<section id="mnFondoRetina">
			<legend>Fondo y Retina</legend>
			<div class="row">
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
			</div>
			</br></br></br></br>
		</section>
		<!-- end: Fondo y Retina -->
		
		<!-- start: Gonioscopía -->
		<section id="mnGonioscopia">
			<legend>Gonioscopía</legend>
			<h5>Ojo Derecho</h5>
			<div class="row">
				<table>
					<tr>
						<td></td>
						<td>
							<div class="control-group">
								<div class="controls ">
									{{ Form::text('G1D','',array('class' => 'input-mini', 'id'=> 'G1D')) }}
								</div>
							</div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<div class="controls">
									{{ Form::text('G2D','',array('class' => 'input-mini', 'id'=> 'G2D')) }}
								</div>
							</div>
						</td>
						<td></td>
						<td>
							<div class="control-group">
								<div class="controls">
									{{ Form::text('G3D','',array('class' => 'input-mini', 'id'=> 'G3D')) }}
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<div class="control-group">
								<div class="controls">
									{{ Form::text('G4D','',array('class' => 'input-mini', 'id'=> 'G4D')) }}
								</div>
							</div>
						</td>
						<td></td>
					</tr>
				</table>
			</div>
			
			<h5>Ojo Izquierdo</h5>
			<div class="row">
				<table>
					<tr>
						<td></td>
						<td>
							<div class="control-group">
								<div class="controls">
									{{ Form::text('G1I','',array('class' => 'input-mini', 'id'=> 'G1I')) }}
								</div>
							</div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							<div class="control-group">
								<div class="controls">
									{{ Form::text('G2I','',array('class' => 'input-mini', 'id'=> 'G2I')) }}
								</div>
							</div>
						</td>
						<td></td>
						<td>
							<div class="control-group">
								<div class="controls">
									{{ Form::text('G3I','',array('class' => 'input-mini', 'id'=> 'G3I')) }}
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<div class="control-group">
								<div class="controls">
									{{ Form::text('G4I','',array('class' => 'input-mini', 'id'=> 'G4I')) }}
								</div>
							</div>
						</td>
						<td></td>
					</tr>
				</table>
			</div>
			</br></br></br></br>
		</section>
		<!-- End: Gonioscopía -->
		
		<!-- start: Movilidad -->
		<section id="mnMovilidad">
			<legend>Movilidad</legend>
			<div class="row">
				<div class="span3">
					<table>
						<tr>
							<td></td>
							<td>
								<div class="control-group">
									{{ Form::text('M1D','',array('class' => 'input-mini', 'id'=> 'M1D')) }}
								</div>
							</td>
							<td></td>
							<td>
								<div class="control-group">	
									{{ Form::text('M2D','',array('class' => 'input-mini', 'id'=> 'M2D')) }}
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="control-group">
									{{ Form::text('M3D','',array('class' => 'input-mini', 'id'=> 'M3D')) }}
								</div>
							</td>
							<td></td>
							<td>
								<div class="control-group">
									{{ Form::text('M4D','',array('class' => 'input-mini', 'id'=> 'M4D')) }}
								</div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<div class="control-group">
									{{ Form::text('M5D','',array('class' => 'input-mini', 'id'=> 'M5D')) }}
								</div>
							</td>
							<td></td>
							<td>
								<div class="control-group">
									{{ Form::text('M6D','',array('class' => 'input-mini', 'id'=> 'M6D')) }}
								</div>
							</td>
						</tr>
					</table>
				</div>
				<div class="span2">
					<div class="control-group">
						{{ Form::text('M1C','',array('class' => 'input-small', 'id'=> 'M1C')) }}
					</div>

					<div class="control-group">
						{{ Form::text('M2C','',array('class' => 'input-small', 'id'=> 'M2C')) }}
					</div>

					<div class="control-group">
						{{ Form::text('M3C','',array('class' => 'input-small', 'id'=> 'M3C')) }}
					</div>
				</div>
				<div class="span3">
					<table>
						<tr>
							<td>
								<div class="control-group">
									{{ Form::text('M1I','',array('class' => 'input-mini', 'id'=> 'M1I')) }}
								</div>
							</td>
							<td></td>
							<td>
								<div class="control-group">
									{{ Form::text('M2I','',array('class' => 'input-mini', 'id'=> 'M2I')) }}
								</div>
							</td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<div class="control-group">
									{{ Form::text('M3I','',array('class' => 'input-mini', 'id'=> 'M3I')) }}
								</div>
							</td>
							<td></td>
							<td>
								<div class="control-group">
									{{ Form::text('M4I','',array('class' => 'input-mini', 'id'=> 'M4I')) }}
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="control-group">
									{{ Form::text('M5I','',array('class' => 'input-mini', 'id'=> 'M5I')) }}
								</div>
							</td>
							<td></td>
							<td>
								<div class="control-group">
									{{ Form::text('M6I','',array('class' => 'input-mini', 'id'=> 'M6I')) }}
								</div>
							</td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="row">
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
			</div>
			</br></br></br></br>
		</section>
		<!-- end: Movilidad -->
		
		<!-- start: Refracción -->
		<section id="mnRefraccion">
			<legend>Refracción</legend>
			<div class="row">
				<div class="control-group span3">
					{{ Form::label('ExoftalmometriaOD', 'Exoftalmometria OD: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::text('ExoftalmometriaOD','',array('class' => 'input-large')) }}
					</div>
				</div>

				<div class="control-group span3">
					{{ Form::label('ExoftalmometriaOI', 'Exoftalmometria OI: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::text('ExoftalmometriaOI','',array('class' => 'input-large')) }}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group">
					{{ Form::label('ExoftalmometriaBase', 'Exoftalmometria Base: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::text('ExoftalmometriaBase','',array('class' => 'input-xlarge')) }}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="control-group span3">
					{{ Form::label('PaquimetriaOD', 'Paquimetría OD: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::text('PaquimetriaOD','',array('class' => 'input-large')) }}
					</div>
				</div>

				<div class="control-group span3">
					{{ Form::label('PaquimetriaOI', 'Paquimetría OI: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::text('PaquimetriaOI','',array('class' => 'input-large')) }}
					</div>
				</div>
			</div>
			<h5>Refracción</h5>
			<div class="row">
				<div class="controls">
					<table>
						<thead>
							<tr>
								<td><span>Sph</span></td>
								<td><span>Eje</span></td>
								<td><span>Bifocal</span></td>
								<td><span>CyI</span></td>
								<td><span>Add</span></td>
								<td><span>AV</span></td>
								<td><span></span></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="control-group">
										{{ Form::text('RefraccionSphOD','',array('class' => 'input-mini', 'id' => 'RefraccionSphOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('RefraccionEjeOD','',array('class' => 'input-mini', 'id' => 'RefraccionEjeOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('RefraccionBifocalOD','',array('class' => 'input-mini', 'id' => 'RefraccionBifocalOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('RefraccionCylOD','',array('class' => 'input-mini', 'id' => 'RefraccionCylOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('RefraccionAddOD','',array('class' => 'input-mini', 'id' => 'RefraccionAddOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('RefraccionAVOD','',array('class' => 'input-mini', 'id' => 'RefraccionAVOD')) }}
									</div>
								</td>
								<td><span>Ojo Derecho</span></td>
							</tr>
							<tr>
								<td>
									<div class="control-group">
										{{ Form::text('RefraccionSphOI','',array('class' => 'input-mini', 'id' => 'RefraccionSphOI')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('RefraccionEjeOI','',array('class' => 'input-mini', 'id' => 'RefraccionEjeOI')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('RefraccionBifocalOI','',array('class' => 'input-mini', 'id' => 'RefraccionBifocalOI')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('RefraccionCylOI','',array('class' => 'input-mini', 'id' => 'RefraccionCylOI')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('RefraccionAddOI','',array('class' => 'input-mini', 'id' => 'RefraccionAddOI')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('RefraccionAVOI','',array('class' => 'input-mini', 'id' => 'RefraccionAVOI')) }}
									</div>
								</td>
								<td><span>Ojo Izquierdo</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<h5>Esquiascopia</h5>
			<div class="row">
				<div class="controls">
					<table>
						<thead>
							<tr>
								<td><span>Sph</span></td>
								<td><span>Eje</span></td>
								<td><span>Bifocal</span></td>
								<td><span>CyI</span></td>
								<td><span>Add</span></td>
								<td><span>AV</span></td>
								<td><span></span></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="control-group">
										{{ Form::text('EsquiascopiaSphOD','',array('class' => 'input-mini', 'id' => 'EsquiascopiaSphOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('EsquiascopiaEjeOD','',array('class' => 'input-mini', 'id' => 'EsquiascopiaEjeOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('EsquiascopiaBifocalOD','',array('class' => 'input-mini', 'id' => 'EsquiascopiaBifocalOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('EsquiascopiaCylOD','',array('class' => 'input-mini', 'id' => 'EsquiascopiaCylOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('EsquiascopiaAddOD','',array('class' => 'input-mini', 'id' => 'EsquiascopiaAddOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('EsquiascopiaAVOD','',array('class' => 'input-mini', 'id' => 'EsquiascopiaAVOD')) }}
									</div>
								</td>
								<td><span>Ojo Derecho</span></td>
							</tr>
							<tr>
								<td><div class="control-group">
										{{ Form::text('EsquiascopiaSphOI','',array('class' => 'input-mini', 'id' => 'EsquiascopiaSphOI')) }}
									</div></td>
								<td>
									<div class="control-group">
										{{ Form::text('EsquiascopiaEjeOI','',array('class' => 'input-mini', 'id' => 'EsquiascopiaEjeOI')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('EsquiascopiaBifocalOI','',array('class' => 'input-mini', 'id' => 'EsquiascopiaBifocalOI')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('EsquiascopiaCylOI','',array('class' => 'input-mini', 'id' => 'EsquiascopiaCylOI')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('EsquiascopiaAddOI','',array('class' => 'input-mini', 'id' => 'EsquiascopiaAddOI')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('EsquiascopiaAVOI','',array('class' => 'input-mini', 'id' => 'EsquiascopiaAVOI')) }}
									</div>
								</td>
								<td><span>Ojo Izquierdo</span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
				<div class="row">
					<div class="span3">
						<div class="control-group">
							{{ Form::label('QueratometriaOD', 'Queratometría OD: ', array('class' => 'control-label')) }}
							<div class="controls">
								{{ Form::text('QueratometriaOD','',array('class' => 'input-medium')) }}
							</div>
						</div>
					</div>
					<div class="span3">
						<div class="control-group">
							{{ Form::label('QueratometriaOI', 'Queratometría OI: ', array('class' => 'control-label')) }}
							<div class="controls">
								{{ Form::text('QueratometriaOI','',array('class' => 'input-medium')) }}
							</div>
						</div>			
					</div>				
				</div>
				</br></br></br></br>
		</section>
		<!-- end: Refracción -->
		
		<!-- start: Diagnóstico -->
		<section id="mnDiagnostico">
			<legend>Diagnóstico</legend>
			<div class="control-group">
				<div class="row">
			  	<label class="control-label" for="chkDiagnostico">Diagnóstico:</label>
			  	</div>
			  	<div class="controls">
			  		<div class="row">
			  			<div class="span3">
						    <label class="checkbox" for="AstigmatismoD">
						      	{{ Form::checkbox("AstigmatismoD", "1"); }}
						      	Astigmatismo OD
						    </label>
						    <label class="checkbox" for="GlaucomaD">
						      	{{ Form::checkbox("GlaucomaD", "1"); }}
						      	Glaucoma OD
						    </label>
						    <label class="checkbox" for="ConjuntivitisD">
						      	{{ Form::checkbox("ConjuntivitisD", "1"); }}
						      	Conjuntivitis OD
						    </label>
						    <label class="checkbox" for="CataratasD">
						      	{{ Form::checkbox("CataratasD", "1"); }}
						      	Cataratas OD
						    </label>
						    <label class="checkbox" for="EstrabismoD">
						      	{{ Form::checkbox("EstrabismoD", "1"); }}
						      	Estrabismo OD
						    </label>				   
						    <label class="checkbox" for="QueratitisD">
						      	{{ Form::checkbox("QueratitisD", "1"); }}
						      	Queratitis OD
						    </label>    
						</div>
					<div class="span3">
					    <label class="checkbox" for="AstigmatismoI">
					      	{{ Form::checkbox("AstigmatismoI", "1"); }}
					      	Astigmatismo OI
					    </label>
					    <label class="checkbox" for="GlaucomaI">
					      	{{ Form::checkbox("GlaucomaI", "1"); }}
					      	Glaucoma OI
					    </label>
					    <label class="checkbox" for="ConjuntivitisI">
					      	{{ Form::checkbox("ConjuntivitisI", "1"); }}
					      	Conjuntivitis OI
					    </label>
						<label class="checkbox" for="CataratasI">
					      	{{ Form::checkbox("CataratasI", "1"); }}
					      	Cataratas OI
					    </label>
					    <label class="checkbox" for="EstrabismoI">
					      	{{ Form::checkbox("EstrabismoI", "1"); }}
					      	Estrabismo OI
					    </label>
					    <label class="checkbox" for="QueratitisI">
					      	{{ Form::checkbox("QueratitisI", "1"); }}
					      	Queratitis OI
					    </label>
				    </div>
			 	</div>
			</div>
		</br>
			<div class="row">
				<div class="control-group">
					{{ Form::label('Diagnostico', 'Diagnóstico: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::textarea('Diagnostico','',array('class' => 'span6')) }}
					</div>
				</div>
			</div>
			</br></br></br></br>
		</section>
		<!-- end: Diagnóstico -->
		
		<!-- start: Tratamiento -->
		<section id="mnTratamiento">
			<legend>Tratamiento</legend>
			<div class="row">
				<div class="control-group">
					{{ Form::label('Tratamiento', 'Tratamiento: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::textarea('Tratamiento','',array('class' => 'span6 ckeditor')) }}
					</div>
				</div>
			</div>
			</br></br></br></br>
		</section>
		<!-- end: Tratamiento -->
		
		<!-- start: Receta -->
		<section id="mnReceta">
			<legend>Receta</legend>
			<div class="row">
				<div class="control-group">
					{{ Form::label('Receta', 'Receta: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::textarea('Receta','',array('class' => 'span6')) }}
					</div>
				</div>
			</div>
			<div class="controls">
				<a href="#" class="btn btn-info"><i class="icon-print icon-white"></i> Imprimir</a>
			</div>
			</br></br></br></br>
		</section>
		<!-- end: Receta -->
		
		<!-- start: Lentes -->
		<section id="mnLentes">
			<legend>Lentes</legend>
			<div class="row">
				<div class="controls">
					<table>
						<thead>
							<tr>
								<td><span>Sph</span></td>
								<td><span>Cyl</span></td>
								<td><span>Eje</span></td>
								<td><span>DI</span></td>
								<td><span>Prisma</span></td>
								<td><span>Base</span></td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="control-group">
										{{ Form::text('SphOD','',array('class' => 'input-mini', 'id' => 'SphOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('CylOD','',array('class' => 'input-mini', 'id' => 'CylOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('EjeOD','',array('class' => 'input-mini', 'id' => 'EjeOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('DIOD','',array('class' => 'input-mini', 'id' => 'DIOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('PrismaOD','',array('class' => 'input-mini', 'id' => 'PrismaOD')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('BaseOD','',array('class' => 'input-mini', 'id' => 'BaseOD')) }}
									</div>
								</td>
								<td>
									<span>Ojo Derecho</span>
								</td>
							</tr>
							<tr>
								<td>
									<div class="control-group">
										{{ Form::text('SphOI','',array('class' => 'input-mini', 'id' => 'SphOI')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('CylOI','',array('class' => 'input-mini', 'id' => 'CylOI')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('EjeOI','',array('class' => 'input-mini', 'id' => 'EjeOI')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('DIOI','',array('class' => 'input-mini', 'id' => 'DIOI')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('PrismaOI','',array('class' => 'input-mini', 'ip' => 'PrismaOI')) }}
									</div>
								</td>
								<td>
									<div class="control-group">
										{{ Form::text('BaseOI','',array('class' => 'input-mini', 'id' => 'BaseOI')) }}
									</div>
								</td>
								<td>
									<span>Ojo Izquierdo</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="row">
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
			</div>
			<div class="row">
				<div class="controls">
					<label class="checkbox span3" for="Cristal">
					    {{ Form::checkbox("Cristal", "1"); }}
					    Cristal
				    </label>

				    <label class="checkbox span3" for="CR39">
					    {{ Form::checkbox("CR39", "1"); }}
					    CR-39
				    </label>
			    </div>
			</div>
			<div class="row">
			    <div class="control-group">
					{{ Form::label('ObservacionesLentes', 'Observaciones: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::text('ObservacionesLentes','',array('class' => 'input-xxlarge')) }}
					</div>
				</div>
			</div>
			<div class="controls">
				<a href="#" class="btn btn-info" id="btnImprimirRecetaLentes"><i class="icon-print icon-white"></i> Imprimir</a>
			</div>
			</br></br></br></br>
		</section>
		<!-- end: Lentes -->
		
		<!-- start: Certificado -->
		<section id="mnCertificado">
			<legend>Certificado</legend>
			<div class="row">
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
			</div>
			<div class="controls">
				<a href="#" class="btn btn-info" id="btnImprimirCertificado"><i class="icon-print icon-white"></i> Imprimir</a>
			</div>			
			</br></br></br></br>
		</section>
		<!-- end: Certificado -->
		
		<!-- start: Resumen Clínico -->
		<section id="mnResumen_Clinico">
			<legend>Resumen Clínico</legend>
			<div class="row">
				<div class="control-group">
					{{ Form::label('ResumenClinico', 'Resumen Clínico: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::textarea('ResumenClinico','',array('class' => 'span6 ckeditor')) }}
					</div>
				</div>
			</div>
			</br></br></br></br>
		</section>	
		<!-- end: Resumen Clínico -->
		
		<!-- start: Hospitalización -->
		<section id="mnHospitalizacion">
			<legend>Hospitalización</legend>
			<div class="row">
				<div class="control-group">
					{{ Form::label('Clinica', 'Clínica: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::text('Clinica','',array('class' => 'input-xxlarge')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('Orden', 'Orden: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::textarea('Orden','',array('class' => 'span6 ckeditor')) }}
					</div>
				</div>
			</div>
			</br></br></br></br>
		</section>		
		<!-- end: Hospitalización -->
		
		<!-- start: Consentimiento de Cirugia Ocular y Extraocular -->
		<section id="mnConsentimientoCirugiaOcularExtraocular">
			<legend>Consentimiento Informado de Cirugía Ocular y Extraocular</legend>
			<div class="row">
				<div class="control-group">
					{{ Form::label('CirugiaOcularExtraocular', 'Cirugía Ocular/Extraocular: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::textarea('CirugiaOcularExtraocular','',array('class' => 'span6')) }}
					</div>
				</div>
			</div>
			<div class="controls">
				<button id="btnImprimirConsentimientoCirugiaOcularExtraocular" class="btn btn-info"><i class="icon-print icon-white"></i> Imprimir</button>
			</div>
			</br></br></br></br>
		</section>		
		<!-- end: Consentimiento de Cirugia Ocular y Extraocular -->
		
		<!-- start: Consentimiento Aplicacion Medicamentos Intravitreos -->
		<section id="mnConsentimientoAplicacionMedicamentosIntravitreos">
			<legend>Consentimiento Informado para Aplicación de Medicamentos Intravitreos</legend>
			<div class="row">
				<div class="control-group">
					{{ Form::label('ResponsableLegal', 'Responsable Legal: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::text('ResponsableLegal','',array('class' => 'input-xxlarge')) }}
					</div>
				</div>

				<div class="control-group">
					{{ Form::label('ConsentimientoMedicamentosIntravitreos', 'Medicamentos Intravitreos: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::textarea('ConsentimientoMedicamentosIntravitreos','',array('class' => 'span6')) }}
					</div>
				</div>
			</div>
			<div class="controls">
				<button id="btnImprimirConsentimientoMedicamentosIntravitreos" class="btn btn-info"><i class="icon-print icon-white"></i> Imprimir</button>
			</div>
			</br></br></br></br>
			</br></br></br></br>
			</br></br></br></br>
			</br></br></br></br>
			</br></br></br></br>
			</br></br></br></br>
		</section>		
		<!-- end: Consentimiento Aplicacion Medicamentos Intravitreos -->
		
		<!-- start: Button -->
		<div class="control-group" id="btn_box">
		  	<label class="control-label"></label>
		  	<div class="controls">
		    	<input value="Guardar" class="btn btn-large btn-primary" type="submit">
		    	<input value="Cancelar" class="btn btn-large btn-danger" type="button" id="btnCancelar">
		  	</div>
		</div>
		<!-- end: button-->
	
	{{ Form::close() }}

	</div><!--/fluid-row-->
@stop


@section('Javascript')
	<script src="js/ExpedientePaciente.js"></script>
	<script src="js/lib/messages.es.js"></script>
	<script src="js/lib/parsley.js"></script>
	<script src="libs/ckeditor/ckeditor.js"></script>
@stop