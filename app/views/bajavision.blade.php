@extends('layouts.base')
@section('titulo')  
    Baja Visión
@stop

@section('Contenido')
{{ Form::open(array('action' => 'BajaVisionController@guardarBajaVision','class' => 'form-horizontal frmBajaVision')) }}
	<input type='hidden' name='varIdPaciente' id="varIdPaciente" value='' />
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


{{ Form::close() }}
@stop

@section('Javascript')
	<script src="js/BajaVision.js"></script>
@stop