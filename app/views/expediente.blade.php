@extends('layouts.base')
@section('titulo')  
    Centro de Visión
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
	                        <li><a href="#mnFondoRetina"><i class="hidden-tablet icon-white icon-road"></i><span class="hidden-phone"> Fondo</span></a></li>
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
		<section id="Inicio">
			<button href="#mdlBuscarPaciente" role="button" class="btn btn-large " data-toggle="modal" id="btnBuscarPacienteModal">Buscar Paciente</button>
       		<div class="modal hide fade" tabindex="-1" role="dialog" style="display:none" id="mdlBuscarPaciente">
            	<div class="modal-header">
               		<a class="close" data-dismiss="modal">&times;</a>
               		<h3>Buscar Paciente</h3>
               		<br />
               		<input type="text" class="input-xlarge search-query span4" id="txtBuscarPaciente" placeholder="Buscar Paciente">
               		<button type="submit" class="btn" id="btnBuscarPaciente">Buscar</button>
           		</div>
           		<div class="modal-body">
           			<div class="span10">
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
       	    	</div>
   	        	<div class="modal-footer">
                	<a href="#" class="btn" data-dismiss="modal">Cerrar</a>
           		</div>
       		</div>
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
				    	{{ Form::text('domicilio','',array('class' => 'input-xxlarge')) }}
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
				  		{{ Form::text('fechanacimiento','',array('class' => 'input-small datepicker', 'id' => 'date01', 'placeholder' => 'DD/MM/YYYY')) }}
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
			
			<legend>Tonometría</legend>
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

				<div class="control-group span2">
					{{ Form::label('MmhgD', 'MmhgD:', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::text('MmhgD','',array('class' => 'input-mini')) }}
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

				<div class="control-group span2">
					{{ Form::label('MmhgI', 'MmhgI:', array('class' => 'control-label')) }}
				  	<div class="controls">
				  		{{ Form::text('MmhgI','',array('class' => 'input-mini')) }}
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
				<div class="span3">
					<div class="control-group">
						{{ Form::label('RefraccionSphOD', 'RefraccionSphOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('RefraccionSphOD','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('RefraccionEjeOD', 'RefraccionEjeOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('RefraccionEjeOD','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('RefraccionBifocalOD', 'RefraccionBifocalOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('RefraccionBifocalOD','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('RefraccionCylOD', 'RefraccionCylOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('RefraccionCylOD','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('RefraccionAddOD', 'RefraccionAddOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('RefraccionAddOD','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('RefraccionAVOD', 'RefraccionAVOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('RefraccionAVOD','',array('class' => 'input-large')) }}
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="control-group">
						{{ Form::label('RefraccionSphOI', 'RefraccionSphOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('RefraccionSphOI','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('RefraccionEjeOI', 'RefraccionEjeOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('RefraccionEjeOI','',array('class' => 'input-large')) }}
						</div>
					</div>				
					<div class="control-group">
						{{ Form::label('RefraccionBifocalOI', 'RefraccionBifocalOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('RefraccionBifocalOI','',array('class' => 'input-large')) }}
						</div>
					</div>					
					<div class="control-group">
						{{ Form::label('RefraccionCylOI', 'RefraccionCylOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('RefraccionCylOI','',array('class' => 'input-large')) }}
						</div>
					</div>					
					<div class="control-group">
						{{ Form::label('RefraccionAddOI', 'RefraccionAddOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('RefraccionAddOI','',array('class' => 'input-large')) }}
						</div>
					</div>					
					<div class="control-group">
						{{ Form::label('RefraccionAVOI', 'RefraccionAVOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('RefraccionAVOI','',array('class' => 'input-large')) }}
						</div>
					</div>
				</div>
			</div>
			<h5>Esquiascopia</h5>
			<div class="row">
				<div class="span3">
					<div class="control-group">
						{{ Form::label('EsquiascopiaSphOD', 'EsquiascopiaSphOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('EsquiascopiaSphOD','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('EsquiascopiaEjeOD', 'EsquiascopiaEjeOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('EsquiascopiaEjeOD','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('EsquiascopiaBifocalOD', 'EsquiascopiaBifocalOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('EsquiascopiaBifocalOD','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('EsquiascopiaCylOD', 'EsquiascopiaCylOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('EsquiascopiaCylOD','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('EsquiascopiaAddOD', 'EsquiascopiaAddOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('EsquiascopiaAddOD','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('EsquiascopiaAVOD', 'EsquiascopiaAVOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('EsquiascopiaAVOD','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('QueratometriaOD', 'Queratometría OD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('QueratometriaOD','',array('class' => 'input-large')) }}
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="control-group">
						{{ Form::label('EsquiascopiaSphOI', 'EsquiascopiaSphOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('EsquiascopiaSphOI','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('EsquiascopiaEjeOI', 'EsquiascopiaEjeOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('EsquiascopiaEjeOI','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('EsquiascopiaBifocalOI', 'EsquiascopiaBifocalOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('EsquiascopiaBifocalOI','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('EsquiascopiaCylOI', 'EsquiascopiaCylOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('EsquiascopiaCylOI','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('EsquiascopiaAddOI', 'EsquiascopiaAddOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('EsquiascopiaAddOI','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('EsquiascopiaAVOI', 'EsquiascopiaAVOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('EsquiascopiaAVOI','',array('class' => 'input-large')) }}
						</div>
					</div>
					<div class="control-group">
						{{ Form::label('QueratometriaOI', 'Queratometría OI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('QueratometriaOI','',array('class' => 'input-large')) }}
						</div>
					</div>			
				</div>				
			</div>
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

		</section>
		<!-- end: Diagnóstico -->

		<!-- start: Tratamiento -->
		<section id="mnTratamiento">
			<legend>Tratamiento</legend>
			<div class="row">
				<div class="control-group">
					{{ Form::label('Tratamiento', 'Tratamiento: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::textarea('Tratamiento','',array('class' => 'span6')) }}
					</div>
				</div>
			</div>
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
		</section>
		<!-- end: Receta -->

		<!-- start: Lentes -->
		<section id="mnLentes">
			<legend>Lentes</legend>
			<div class="row">
				<div class="span3">
					<div class="control-group">
						{{ Form::label('SphOD', 'SphOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('SphOD','',array('class' => 'input-large')) }}
						</div>
					</div>

					<div class="control-group">
						{{ Form::label('CylOD', 'CylOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('CylOD','',array('class' => 'input-large')) }}
						</div>
					</div>

					<div class="control-group">
						{{ Form::label('EjeOD', 'EjeOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('EjeOD','',array('class' => 'input-large')) }}
						</div>
					</div>

					<div class="control-group">
						{{ Form::label('DIOD', 'DIOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('DIOD','',array('class' => 'input-large')) }}
						</div>
					</div>

					<div class="control-group">
						{{ Form::label('PrismaOD', 'PrismaOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('PrismaOD','',array('class' => 'input-large')) }}
						</div>
					</div>

					<div class="control-group">
						{{ Form::label('BaseOD', 'BaseOD: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('BaseOD','',array('class' => 'input-large')) }}
						</div>
					</div>
				</div>
				<div class="span3">
					<div class="control-group">
						{{ Form::label('SphOI', 'SphOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('SphOI','',array('class' => 'input-large')) }}
						</div>
					</div>

					<div class="control-group">
						{{ Form::label('CylOI', 'CylOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('CylOI','',array('class' => 'input-large')) }}
						</div>
					</div>

					<div class="control-group">
						{{ Form::label('EjeOI', 'EjeOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('EjeOI','',array('class' => 'input-large')) }}
						</div>
					</div>

					<div class="control-group">
						{{ Form::label('DIOI', 'DIOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('DIOI','',array('class' => 'input-large')) }}
						</div>
					</div>

					<div class="control-group">
						{{ Form::label('PrismaOI', 'PrismaOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('PrismaOI','',array('class' => 'input-large')) }}
						</div>
					</div>
					
					<div class="control-group">
						{{ Form::label('BaseOI', 'BaseOI: ', array('class' => 'control-label')) }}
						<div class="controls">
							{{ Form::text('BaseOI','',array('class' => 'input-large')) }}
						</div>
					</div>
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
		</section>
		<!-- end: Certificado -->

		<!-- start: Resumen Clínico -->
		<section id="mnResumen_Clinico">
			<legend>Resumen Clínico</legend>
			<div class="row">
				<div class="control-group">
					{{ Form::label('ResumenClinico', 'Resumen Clínico: ', array('class' => 'control-label')) }}
					<div class="controls">
						{{ Form::textarea('ResumenClinico','',array('class' => 'span6')) }}
					</div>
				</div>
			</div>
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
						{{ Form::textarea('Orden','',array('class' => 'span6')) }}
					</div>
				</div>
			</div>
		</section>		
		<!-- end: Hospitalización -->

		<!-- start: Button -->
		<div class="control-group">
		  	<label class="control-label"></label>
		  	<div class="controls">
		    	<input value="Guardar" class="btn btn-large btn-primary" type="submit">
		    	<input value="Cancelar" class="btn btn-large btn-primary" type="button" id="btnCancelar">
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
@stop