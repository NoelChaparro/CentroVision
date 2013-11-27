@extends('layouts.base')
@section('titulo')  
    Operación Laser
@stop

@section('Contenido')	 
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
				<legend>Ajuste de Lasik</legend>
				<div class="row">
					<table class="span10">
						<tbody>
							<tr>
								<th style="text-align:center;">Nombre</th>
								<th><input type="text" class="input-xxlarge" id="nombre" disabled="disabled"></th>
								<th style="text-align:center;">Fecha</th>
								<th><input type="text" class="input-small"  name="fecha" id="fecha" disabled="disabled"></th>
								<th style="text-align:center;">Edad</th>
								<th><input type="text" class="input-mini" id="txtEdad"></th>
							</tr>
						</tbody>
					</table>
				</div>
				</br></br>
				<form action="" id="frmOperacionLaser">
				<div class="row">
					<div class="span6">
						<div class="row">
							<div class="span5">
								<H4>Ojo Derecho</H4>
							</div>
						</div>
						<div class="row">
							<table class="span7">
								<tbody>
									<tr>
										<th style="text-align:center;">Hiper</th>
										<th><input type="text" class="input-small" id="txtHiper"></th>
										<th style="text-align:center;">KH</th>
										<th><input type="text" class="input-small" id="txtKH"></th>
										<th style="text-align:center;">KV</th>
										<th><input type="text" class="input-small" id="txtKV"></th>
									</tr>
									<tr>
										<th style="text-align:center;">Esfera</th>
										<th><input type="text" class="input-small" id="txtRefraccionEsfera"></th>
										<th style="text-align:center;">Cilindro</th>
										<th><input type="text" class="input-small" id="txtRefraccionCilindro"></th>
										<th style="text-align:center;">Eje</th>
										<th><input type="text" class="input-small" id="txtRefraccionEje"></th>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="row">
							<table class="span7">
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
					<div class="offset2 span6">
						<div class="row">
							<div class="span5">
								<H4>Ojo Izquierdo</H4>
							</div>
						</div>
						<div class="row">
							<table class="span7">
								<tbody>
									<tr>
										<th style="text-align:center;">Hiper</th>
										<th><input type="text" class="input-small" id="txtHiperI"></th>
										<th style="text-align:center;">KH</th>
										<th><input type="text" class="input-small" id="txtKHI"></th>
										<th style="text-align:center;">KV</th>
										<th><input type="text" class="input-small" id="txtKVI"></th>
									</tr>
									<tr>
										<th style="text-align:center;">Esfera</th>
										<th><input type="text" class="input-small" id="txtRefraccionEsferaI"></th>
										<th style="text-align:center;">Cilindro</th>
										<th><input type="text" class="input-small" id="txtRefraccionCilindroI"></th>
										<th style="text-align:center;">Eje</th>
										<th><input type="text" class="input-small" id="txtRefraccionEjeI"></th>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="row">
							<table class="span7">
								<tbody>
									<tr>
										<th style="text-align:right;">Anillo</th>
										<td style="text-align:center;"><input type="text" class="input-small" id="txtAnilloI" disabled="disabled"></td>	
										<td></td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td style="text-align:center;"><input type="text" class="input-small" id="txtVal1I" disabled="disabled"></td>							
										<td style="text-align:center;"><input type="text" class="input-small" id="txtVal2I" disabled="disabled"></td>							
										<td style="text-align:center;"><input type="text" class="input-small" id="txtVal3I" disabled="disabled"></td>							
									</tr>
									<tr>
										<td></td>
										<td style="text-align:center;"><input type="text" class="input-small" id="txtVal4I" disabled="disabled"></td>							
										<td style="text-align:center;"><input type="text" class="input-small" id="txtVal5I" disabled="disabled"></td>							
										<td style="text-align:center;"><input type="text" class="input-small" id="txtVal6I" disabled="disabled"></td>							
									</tr>
									<tr>
										<td></td>
										<td style="text-align:center;"><input type="text" class="input-small" id="txtVal7I" disabled="disabled"></td>							
										<td style="text-align:center;"><input type="text" class="input-small" id="txtVal8I" disabled="disabled"></td>							
										<td style="text-align:center;"><input type="text" class="input-small" id="txtVal9I" disabled="disabled"></td>							
									</tr>
									<tr>
										<td></td>
										<td></td>
										<td style="text-align:center;"><input type="text" class="input-small" id="txtVal10I" disabled="disabled"></td>							
										<td style="text-align:center;"><input type="text" class="input-small" id="txtVal11I" disabled="disabled"></td>							
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>	
				
				</form>
		</div>
		<!-- start: Button -->
	<div class="control-group" id="btn_box">
	  	<label class="control-label"></label>
	  	<div class="controls">
			<input value="Imprimir" class="btn btn-large btn-danger" type="button" id="btnImprimirOperacionLaser" onclick="window.print();" disabled>
	    	<input value="Cancelar" class="btn btn-large btn-danger" type="button" id="btnCancelarOperacionLaser">
	  	</div>
	</div>
	<!-- end: button-->
@stop


@section('Javascript')
	<script src="js/OperacionLaser.js"></script>
	
@stop