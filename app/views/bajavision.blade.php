@extends('layouts.base')
@section('titulo')  
    Baja Visión
@stop

@section('Contenido')
{{ Form::open(array('action' => 'BajaVisionController@guardarBajaVision','class' => 'form-horizontal frmBajaVision')) }}
	<input type='hidden' name='varIdPaciente' id="varIdPaciente" value='' />
	</br></br>
	<div class="row offset1">
			<ul class="hover-block">
  				<li>
    				<a href="#mdlBuscarPaciente" role="button" data-toggle="modal" id="btnBuscarPacienteModal">
		              	<!-- Image -->
		              	<div class="b-blue cont-icon"><i class="icon-users"></i></div> 
		              	<!-- Content with background color Class -->
		              	<div class="hover-content b-blue">
		                	<h4>Buscar</h4>
		                	Buscar paciente en la base de datos de acuerdo al nombre
		              	</div>
		            </a>
		        </li>
			</ul>
	</div>
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
   	<br><br>

   	<div class="row">
		<div class="span7">
			<div class="control-group">
			  	{{ Form::label('nombre', 'Nombre:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('nombre','',array('class' => 'input-xxlarge', 'disabled' => '')) }}
			  	</div>
			</div>
		</div>
		<div class="span5">
			<div class="control-group"> 
			  	{{ Form::label('fecha', 'Fecha:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('fecha','',array('class' => 'input-small', 'disabled' => '')) }}
			  	</div>					
			</div>
		</div>
	</div>

   	<div class="row">
		<div class="span4">
			<div class="control-group">
			  	{{ Form::label('edad', 'Edad:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('edad','',array('class' => 'input-small', 'disabled' => '')) }}
			  	</div>
			</div>
		</div>
		<div class="span4">
			<div class="control-group"> 
			  	{{ Form::label('horaconsulta', 'Hora de Consulta:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('horaconsulta','',array('class' => 'input-small', 'disabled' => '')) }}
			  	</div>					
			</div>
		</div>
	</div>

	<h4>Historia Clínica Oftalmológica</h4>
	<div class="row">
		<div class="span8">
			<div class="control-group">
			  	{{ Form::label('antecedentes', 'Antecedentes:', array('class' => 'control-label')) }}
			  	<div class="controls">                     
			    	{{ Form::textarea('antecedentes','',array('class' => 'span8')) }}
			  	</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="span6">
			<div class=" span1">
				{{ Form::label('AVSCOD', 'AVSCOD:') }}
			</div>
			<div class="span1">
				{{ Form::label('CCD', 'CCOD:') }}
			</div>
			<div class="span1">
				{{ Form::label('PuntoD', '(.):') }}
			</div>
		</div>
		<div class="span6">
			<div class="span1">
				{{ Form::label('AVSCOI', 'AVSCOI:') }}
			</div>
			<div class="span1">
				{{ Form::label('CCI', 'CCOI:') }}
			</div>
			<div class="span1">
				{{ Form::label('PuntoI', '(.):') }}
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span6">
		  	<div class="span1">
		  		{{ Form::text('AVSCOD','',array('class' => 'input-mini')) }}
		  	</div>
		  	<div class="span1">
		  		{{ Form::text('CCD','',array('class' => 'input-mini')) }}
		  	</div>
		  	<div class="span1">
		  		{{ Form::text('PuntoD','',array('class' => 'input-mini')) }}
		  	</div>
		</div>
		<div class="span6">
		  	<div class="span1">
		  		{{ Form::text('AVSCOI','',array('class' => 'input-mini')) }}
		  	</div>
		  	<div class="span1">
		  		{{ Form::text('CCI','',array('class' => 'input-mini')) }}
		  	</div>
		  	<div class="span1">
		  		{{ Form::text('PuntoI','',array('class' => 'input-mini')) }}
		  	</div>
		</div>
	</div>
	<br /><br />
	<div class="row">
		<div class="span5">
			<div class="control-group">
			  	{{ Form::label('PIOD', 'PIO OD:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('PIOD','',array('class' => 'input-small')) }}
			  	</div>
			</div>
		</div>
		<div class="span5">
			<div class="control-group"> 
			  	{{ Form::label('PIOI', 'PIO OI:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('PIOI','',array('class' => 'input-small')) }}
			  	</div>					
			</div>
		</div>
	</div>

	<div class="row">
		<div class="span5">
			<div class="control-group">
			  	{{ Form::label('estudio', 'Requiere algún estudio:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('estudio','',array('class' => 'input-large')) }}
			  	</div>
			</div>
		</div>
		<div class="span5">
			<div class="control-group"> 
			  	{{ Form::label('medicamentos', 'Requiere tomar medicamentos:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::text('medicamentos','',array('class' => 'input-large')) }}
			  	</div>					
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
						<td><span>Cyl</span></td>
						<td><span>Eje</span></td>
						<td><span>Bifocal</span></td>
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
								{{ Form::text('RefraccionCylOD','',array('class' => 'input-mini', 'id' => 'RefraccionCylOD')) }}
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
								{{ Form::text('RefraccionCylOI','',array('class' => 'input-mini', 'id' => 'RefraccionCylOI')) }}
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
	<h5>Exploración</h5>
	<div class="row">
		<div class="span5">
			<div class="control-group">
			  	{{ Form::label('lamparaHendiduraOD', 'Lampara de Hendidura:', array('class' => 'control-label')) }}
			  	<div class="controls">
			    	{{ Form::textarea('lamparaHendiduraOD','',array('class' => 'span5')) }}
			  	</div>
			</div>
		</div>
		<div class="span5">
			<div class="control-group">
			  	<div class="controls">
			    	{{ Form::textarea('lamparaHendiduraOI','',array('class' => 'span5','id' => 'lamparaHendiduraOI')) }}
			  	</div>
			</div>
		</div>		
	</div>
	
	<div class="row">
		<div class="span5">
			<div class="control-group">
			  	{{ Form::label('fondoOjoOD', 'Fondo de Ojo:', array('class' => 'control-label')) }}
			  	<div class="controls">                     
			    	{{ Form::textarea('fondoOjoOD','',array('class' => 'span5')) }}
			  	</div>
			</div>
		</div>
		<div class="span5">
			<div class="control-group">
			  	<div class="controls">
			    	{{ Form::textarea('fondoOjoOI','',array('class' => 'span5','id' => 'fondoOjoOI')) }}
			  	</div>
			</div>
		</div>		
	</div>

	<div class="row">
		<div class="span8">
			<div class="control-group">
				<h5>Impresión Diagnóstica</h5>
			  	<div class="controls">
			    	{{ Form::textarea('impresionDiagnostica','',array('class' => 'span8', 'id' => 'impresionDiagnostica')) }}
			  	</div>
			</div>
		</div>
	</div>


	<!-- start: Button -->
	<div class="control-group" id="btn_box">
	  	<label class="control-label"></label>
	  	<div class="controls">
	    	<input value="Guardar" class="btn btn-large btn-primary" type="submit" id="btnGuardarBajaVision" disabled>
			<input value="Imprimir" class="btn btn-large btn-info" type="button" id="btnImprimirBajaVision" disabled>
	    	<input value="Cancelar" class="btn btn-large btn-danger" type="button" id="btnCancelarBajaVision">
	  	</div>
	</div>
	<!-- end: button-->

{{ Form::close() }}
@stop

@section('Javascript')
	<script src="js/BajaVision.js"></script>
@stop