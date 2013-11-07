@extends('layouts.base')
@section('titulo')  
    Operación Laser
@stop

@section('Contenido')	
	<!-- start: Main Menu -->
	<div id="sidebar-left" class="span2">
		<nav class=" sidebar-nav">
			<ul class="nav nav-tabs nav-stacked main-menu" id="mytab">	
				<li><a href="#lasik"><i class="hidden-tablet icon-white icon-adjust"></i><span class="hidden-phone"> Ajuste de Lasik</span></a></li>
	           	<!--<li><a href="#miopia"><i class="hidden-tablet icon-white icon-search"></i><span class="hidden-phone"> Ajuste de Miopia</span></a></li>
	           	<li><a href="#hipermetropia"><i class="hidden-tablet icon-white icon-eye-close"></i><span class="hidden-phone"> Hipermetropía y Astigmatismo</span></a></li>
	           	<li><a href="#astigmatismo"><i class="hidden-tablet icon-white icon-tint"></i><span class="hidden-phone"> Astigmatismo Mixto</span></a></li>-->

			</ul>
		</nav>
	</div>
	<!-- end: Main Menu--> 
		<div class="offset2">
			</br></br>
			<section id="lasik">
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
       		</br></br>
		</section>
			<br><br>
			<section>
				<legend>Ajuste de Lasik</legend>
				<div class="row">
					<table class="span8">
						<tbody>
							<tr>
								<th style="text-align:center;">Nombre</th>
								<th><input type="text" class="input-xxlarge" id="nombre" disabled="disabled"></th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row">
					<table class="span8">
						<tbody>
							<tr>
								<th style="text-align:center;">Edad</th>
								<th><input type="text" class="input-small" id="txtEdad"></th>
								<th style="text-align:center;">Hiper</th>
								<th><input type="text" class="input-small" id="txtHiper"></th>
							</tr>
							<tr>
								<th style="text-align:center;">KH</th>
								<th><input type="text" class="input-small" id="txtKH"></th>
								<th style="text-align:center;">KV</th>
								<th><input type="text" class="input-small" id="txtKV"></th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row">
					<table class="span8">
						<thead>
							<tr>
								<th style="text-align:center;">Esfera</th>
								<th style="text-align:center;">Cilindro</th>
								<th style="text-align:center;">Eje</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtRefraccionEsfera"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtRefraccionCilindro"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtRefraccionEje"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row">
					<table class="span8">
						<tbody>
							<tr>
								<th style="text-align:right;">Anillo</th>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAnillo" disabled="disabled"></td>	
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtVal1" disabled="disabled"></td>							
								<td style="text-align:center;"><input type="text" class="input-small" id="txtVal2" disabled="disabled"></td>							
								<td style="text-align:center;"><input type="text" class="input-small" id="txtVal3" disabled="disabled"></td>							
							</tr>
							<tr>
								<td></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtVal4" disabled="disabled"></td>							
								<td style="text-align:center;"><input type="text" class="input-small" id="txtVal5" disabled="disabled"></td>							
								<td style="text-align:center;"><input type="text" class="input-small" id="txtVal6" disabled="disabled"></td>							
							</tr>
							<tr>
								<td></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtVal7" disabled="disabled"></td>							
								<td style="text-align:center;"><input type="text" class="input-small" id="txtVal8" disabled="disabled"></td>							
								<td style="text-align:center;"><input type="text" class="input-small" id="txtVal9" disabled="disabled"></td>							
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtVal10" disabled="disabled"></td>							
								<td style="text-align:center;"><input type="text" class="input-small" id="txtVal11" disabled="disabled"></td>							
							</tr>
						</tbody>
					</table>
				</div>
		</div>
		<!-- start: Button -->
		<div class="control-group" id="btn_box">
		  	<label class="control-label"></label>
		  	<div class="controls">
		    	<input value="Guardar" class="btn btn-large btn-primary" type="submit" id="btnGuardarExpedientePaciente">
		    	<input value="Cancelar" class="btn btn-large btn-danger" type="button" id="btnCancelar">
		  	</div>
		</div>
		<!-- end: button-->
@stop


@section('Javascript')
	<script src="js/OperacionLaser2.js"></script>
	
@stop