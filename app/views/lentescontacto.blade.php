@extends('layouts.baseother')
@section('titulo')  
    Operación Laser
@stop

@section('Contenido')
	{{ Form::open(array('action' => 'LentesContactoController@guardarLentesContacto','class' => 'form-horizontal frmLentesContacto')) }}
		<input type='hidden' name='varIdPaciente' id="varIdPaciente" value='{{$Paciente[0]->IdPaciente}}' />
		<!--</br></br>
		<div class="row offset1">
				<ul class="hover-block">
      				<li>
        				<a href="#mdlBuscarPaciente" role="button" data-toggle="modal" id="btnBuscarPacienteModal">
			              	<div class="b-blue cont-icon"><i class="icon-users"></i></div> 
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
   		</div>-->
   		<br><br>
		
		<!--start: Cuadro Respaldo -->
		<div style="display:none">
			<div id="dataRespaldo">
				¿Que respaldo desea realizar? <br><br>
				<button id="btnRespaldarBaseDatos"  class="btn btn-info">Base de Datos</button>
				<button id="btnRespaldarSistema"  class="btn btn-info">Archivos de Sistema</button>
				<div id="loadingRespado"></div>
			</div>
		</div>
		<!--End: Cuadro Respaldo -->
		
		<div class="row">
			<div class="span7">
				<div class="control-group">
				  	{{ Form::label('nombre', 'Nombre:', array('class' => 'control-label')) }}
				  	<div class="controls">
				    	{{ Form::text('nombre',$Paciente[0]->Nombre,array('class' => 'input-xxlarge', 'disabled' => '')) }}
				  	</div>
				</div>
			</div>
			<div class="span5">
				<div class="control-group"> 
				  	{{ Form::label('fecha', 'Fecha:', array('class' => 'control-label')) }}
				  	<div class="controls">
				    	{{ Form::text('fecha',$fechaActual,array('class' => 'input-small', 'disabled' => '')) }}
				  	</div>					
				</div>
			</div>
		</div>

		<!-- Tabla de Queratometria y Refraccion -->
		<table class="table">
			<thead>
				<tr>
					<th colspan="5" style="text-align:center;">Queratometría</th>
					<th colspan="3" style="text-align:center;">Refracción</th>
				</tr>
				<tr>
					<th></th>
					<th style="text-align:center;">Horizontal</th>
					<th style="text-align:center;">Eje</th>
					<th style="text-align:center;">Vertical</th>
					<th style="text-align:center;">Eje</th>
					<th style="text-align:center;">Sph</th>
					<th style="text-align:center;">Cyl</th>
					<th style="text-align:center;">Eje</th>
				</tr>				
			</thead>
			<tbody>
				<tr>
					<td>OD</td>
					<td style="text-align:center;">{{ Form::text('queratometriaHorizontalOD','',array('class' => 'input-xlarge','id' => 'queratometriaHorizontalOD')) }}</td>
					<td style="text-align:center;">{{ Form::text('queratometriaHorizontalEjeOD', '', array('class' => 'input-small','id'=>'queratometriaHorizontalEjeOD')); }}</td>
					<td style="text-align:center;">{{ Form::text('queratometriaVerticalOD', '', array('class' => 'input-xlarge','id'=>'queratometriaVerticalOD')); }}</td>
					<td style="text-align:center;">{{ Form::text('queratometriaVerticalEjeOD', '', array('class' => 'input-small','id'=>'queratometriaVerticalEjeOD')); }}</td>
					<td style="text-align:center;">{{ Form::text('refraccionSphOD', '', array('class' => 'input-small','id'=>'refraccionSphOD')); }}</td>
					<td style="text-align:center;">{{ Form::text('refraccionCylOD', '', array('class' => 'input-small','id'=>'refraccionCylOD')); }}</td>
					<td style="text-align:center;">{{ Form::text('refraccionEjeOD', '', array('class' => 'input-small','id'=>'refraccionEjeOD')); }}</td>
				</tr>
				<tr>
					<td>OS</td>
					<td style="text-align:center;">{{ Form::text('queratometriaHorizontalOI','',array('class' => 'input-xlarge','id' => 'queratometriaHorizontalOI')) }}</td>
					<td style="text-align:center;">{{ Form::text('queratometriaHorizontalEjeOI', '', array('class' => 'input-small','id'=>'queratometriaHorizontalEjeOI')); }}</td>
					<td style="text-align:center;">{{ Form::text('queratometriaVerticalOI', '', array('class' => 'input-xlarge','id'=>'queratometriaVerticalOI')); }}</td>
					<td style="text-align:center;">{{ Form::text('queratometriaVerticalEjeOI', '', array('class' => 'input-small','id'=>'queratometriaVerticalEjeOI')); }}</td>
					<td style="text-align:center;">{{ Form::text('refraccionSphOI', '', array('class' => 'input-small','id'=>'refraccionSphOI')); }}</td>
					<td style="text-align:center;">{{ Form::text('refraccionCylOI', '', array('class' => 'input-small','id'=>'refraccionCylOI')); }}</td>
					<td style="text-align:center;">{{ Form::text('refraccionEjeOI', '', array('class' => 'input-small','id'=>'refraccionEjeOI')); }}</td>						</tr>
			</tbody>
		</table>
		<!-- Fin tabla Queratometria y Refraccion -->
		<br><br>
		<!-- Tabla de Material del lente -->
		<table class="table">
			<thead>
				<tr>
					<th style="text-align:center;">Material</th>
					<th style="text-align:center;">Marca</th>
					<th style="text-align:center;">Tipo</th>
					<th style="text-align:center;">Color</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="text-align:center;">{{ Form::text('material', '', array('class' => 'input-xlarge','id'=>'material')); }}</td>
					<td style="text-align:center;">{{ Form::text('marca', '', array('class' => 'input-xlarge','id'=>'marca')); }}</td>
					<td style="text-align:center;">{{ Form::text('tipo', '', array('class' => 'input-xlarge','id'=>'tipo')); }}</td>
					<td style="text-align:center;">{{ Form::text('color', '', array('class' => 'input-xlarge','id'=>'color')); }}</td>
				</tr>
			</tbody>
		</table>
		<!-- Fin Tabla de Material del lente -->
		<br><br>
		<!-- Tabla de Material del lente -->
		<table class="table">
			<thead>
				<tr>
					<th></th>
					<th style="text-align:center;">CB</th>
					<th style="text-align:center;">Diametro</th>
					<th style="text-align:center;">CPP</th>
					<th style="text-align:center;">Poder</th>
					<th style="text-align:center;">SR</th>
					<th style="text-align:center;">RX Final</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>OD</td>
					<td style="text-align:center;">{{ Form::text('curvaBaseOD', '', array('class' => 'input-medium','id'=>'curvaBaseOD')); }}</td>
					<td style="text-align:center;">{{ Form::text('diametroOD', '', array('class' => 'input-small','id'=>'diametroOD')); }}</td>
					<td style="text-align:center;">{{ Form::text('cppOD', '', array('class' => 'input-small','id'=>'cppOD')); }}</td>
					<td style="text-align:center;">{{ Form::text('poderOD', '', array('class' => 'input-small','id'=>'poderOD')); }}</td>
					<td style="text-align:center;">{{ Form::text('srOD', '', array('class' => 'input-xlarge','id'=>'srOD')); }}</td>
					<td style="text-align:center;">{{ Form::text('rxFinalOD', '', array('class' => 'input-small','id'=>'rxFinalOD')); }}</td>
				</tr>
				<tr>
					<td>OS</td>
					<td style="text-align:center;">{{ Form::text('curvaBaseOI', '', array('class' => 'input-medium','id'=>'curvaBaseOI')); }}</td>
					<td style="text-align:center;">{{ Form::text('diametroOI', '', array('class' => 'input-small','id'=>'diametroOI')); }}</td>
					<td style="text-align:center;">{{ Form::text('cppOI', '', array('class' => 'input-small','id'=>'cppOI')); }}</td>
					<td style="text-align:center;">{{ Form::text('poderOI', '', array('class' => 'input-small','id'=>'poderOI')); }}</td>
					<td style="text-align:center;">{{ Form::text('srOI', '', array('class' => 'input-xlarge','id'=>'srOI')); }}</td>
					<td style="text-align:center;">{{ Form::text('rxFinalOI', '', array('class' => 'input-small','id'=>'rxFinalOI')); }}</td>
				</tr>
			</tbody>
		</table>
		<!-- Fin Tabla de Material del lente -->
		<br><br>
		<!-- Observaciones -->
		<div class="control-group">
		  	{{ Form::label('observaciones', 'Observaciones:', array('class' => 'control-label')) }}
		  	<div class="controls">                     
		    	{{ Form::textarea('observaciones','',array('class' => 'span10')) }}
		  	</div>
		</div>
		<!-- Fin Observaciones -->
		<!-- start: Button -->
		<div class="control-group" id="btn_box">
		  	<label class="control-label"></label>
		  	<div class="controls">
		    	<input value="Guardar" class="btn btn-large btn-primary" type="submit" id="btnGuardarLenteContacto">
		    	<input value="Cancelar" class="btn btn-large btn-danger" type="button" id="btnCancelarLenteContacto">
		  	</div>
		</div>
		<!-- end: button-->
	{{ Form::close() }}

	<div class="alert alert-error">
		<h4>Historial</h4>
	</div>

	<div id="historialLentesContacto">
	</div>
@stop

@section('Javascript')
	<script src="../js/LentesContacto.js"></script>
@stop