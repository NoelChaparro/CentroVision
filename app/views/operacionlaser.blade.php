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
       			<br><br><br><br>
				<legend>Ajuste de Lasik</legend>
				<div class="row">
					<table class="span12">
						<tbody>
							<tr>
								<th style="text-align:center;">Nombre</th>
								<th><input type="text" class="input-xxlarge" id="nombre" disabled="disabled"></th>
								<th style="text-align:center;">Fecha</th>
								<th><input type="text" class="input-small"  name="fecha" id="fecha" disabled="disabled"></th>
								<th style="text-align:center;">Telefono</th>
								<th><input type="text" class="input-small"  name="telefono" id="telefono" disabled="disabled"></th>
							</tr>
							<tr>
								<th colspan="2"></th>
								<th style="text-align:center;">Edad</th>
								<th><input type="text" class="input-mini" id="txtEdad"></th>
								<th style="text-align:center;">Hiper</th>
								<th><input type="text" class="input-mini" id="txtHiper"></th>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row">
					<table class="span6">
						<tbody>
							<tr>
								<th style="text-align:center;">Fecha Programada</th>
								<th><input type="text" class="input-medium" id="txtFechaProgramada"></th>
								<th style="text-align:center;">Hora</th>
								<th><input type="text" class="input-mini" id="txtHora"></th>
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
											<th style="text-align:left;">Esfera</th>
											<th></th>
											<th style="text-align:left;">Cilindro</th>
											<th></th>
											<th style="text-align:left;">Eje</th>
											<th></th>
										</tr>
										<tr>
											<th><input type="text" class="input-small" id="txtRefraccionEsfera"></th>
											<th></th>
											<th><input type="text" class="input-small" id="txtRefraccionCilindro"></th>
											<th></th>
											<th><input type="text" class="input-small" id="txtRefraccionEje"></th>
											<th></th>
										</tr>
										<tr>
											<th></th>
											<th style="text-align:center;">KH</th>
											<th><input type="text" class="input-small" id="txtKH"></th>
											<th style="text-align:center;">KV</th>
											<th><input type="text" class="input-small" id="txtKV"></th>
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
											<th style="text-align:left;">Esfera</th>
											<th></th>
											<th style="text-align:left;">Cilindro</th>
											<th></th>
											<th style="text-align:left;">Eje</th>
											<th></th>
										</tr>
										<tr>
											<th><input type="text" class="input-small" id="txtRefraccionEsfera"></th>
											<th></th>
											<th><input type="text" class="input-small" id="txtRefraccionCilindro"></th>
											<th></th>
											<th><input type="text" class="input-small" id="txtRefraccionEje"></th>
											<th></th>
										</tr>
										<tr>
											<th></th>
											<th style="text-align:center;">KH</th>
											<th><input type="text" class="input-small" id="txtKH"></th>
											<th style="text-align:center;">KV</th>
											<th><input type="text" class="input-small" id="txtKV"></th>
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
					<hr>
					<div class="row">
						<div class="span6">
							<table class="span6">
								<tbody>
									<tr>
										<th>A.V. S.C.</th>
										<th> OD:20/<input type="text" class="input-mini" id="txtAVOD"></th>
										<th>OI:20/<input type="text" class="input-mini" id="txtAVOI"></th> 
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="span6">
							<table class="span6">
								<tbody>
									<tr>
										<th colspan="4">REVISION NO CICLOPLEJICA:</th>
									</tr>
									<tr>
										<th>Refraccion:</th>
										<th>OD:</th>
										<th><input type="text" class="input-mini" id="RefraccionSphOD" disabled="disabled"></th>
										<th>-</th>
										<th><input type="text" class="input-mini" id="RefraccionCylOD" disabled="disabled"></th>
										<th>X</th>
										<th><input type="text" class="input-mini" id="RefraccionEjeOD" disabled="disabled"></th>
										<th></th>
										<th>CV:20/<input type="text" class="input-mini" id="txtCCOD"></th>
									</tr>
									<tr>
										<th></th>
										<th>OI:</th>
										<th><input type="text" class="input-mini" id="RefraccionSphOI" disabled="disabled"></th>
										<th>-</th>
										<th><input type="text" class="input-mini" id="RefraccionCylOI" disabled="disabled"></th>
										<th>X</th>
										<th><input type="text" class="input-mini" id="RefraccionEjeOI" disabled="disabled"></th>
										<th></th>
										<th>CV:20/<input type="text" class="input-mini" id="txtCCOI"></th>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="span6">
							<table class="span6">
								<tbody>
									<tr>
										<th colspan="4">REVISION CICLOPLEJICA:</th>
									</tr>
									<tr>
										<th>Refraccion:</th>
										<th>OD:</th>
										<th><input type="text" class="input-mini" id="txtEsferaOD2"></th>
										<th>-</th>
										<th><input type="text" class="input-mini" id="txtCilindroOD2"></th>
										<th>X</th>
										<th><input type="text" class="input-mini" id="txtEjeOD2"></th>
										<th></th>
										<th></th>
									</tr>
									<tr>
										<th></th>
										<th>OI:</th>
										<th><input type="text" class="input-mini" id="txtEsferaOI2"></th>
										<th>-</th>
										<th><input type="text" class="input-mini" id="txtCilindroOI2"></th>
										<th>X</th>
										<th><input type="text" class="input-mini" id="txtEjeOI2"></th>
										<th></th>
										<th></th>
									</tr>
								</tbody>
							</table>
						</div>
					</div>	
					<hr>
					<div class="row">
						<div class="span12">
							<table class="span7">
								<tbody>
									<tr>
										<th colspan="4">QUERATROMETRIAS:</th>
									</tr>
									<tr>
										<th>OD:</th>
										<th><input type="text" class="input-mini" id="txtQ1"></th>
										<th>X</th>
										<th><input type="text" class="input-mini" id="txtQ2"></th>
										<th>/</th>
										<th><input type="text" class="input-mini" id="txtQ3"></th>
										<th>X</th>
										<th><input type="text" class="input-mini" id="txtQ4"></th>
									</tr>
									<tr>
										<th>OI:</th>
										<th><input type="text" class="input-mini" id="txtQ5"></th>
										<th>X</th>
										<th><input type="text" class="input-mini" id="txtQ6"></th>
										<th>/</th>
										<th><input type="text" class="input-mini" id="txtQ7"></th>
										<th>X</th>
										<th><input type="text" class="input-mini" id="txtQ8"></th>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="span6">
							Presion Ocular:       OD:<input type="text" class="input-mini" id="txtPOOD">mmHg       OI<input type="text" class="input-mini" id="txtPOOI">mmHg
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="span8">
							<table class="span8">
								<tbody>
									<tr>
										<th colspan="4"> EXPLORACION FISICA:</th>
									</tr>
									<tr>
										<th>Cornea:</th>
										<th><input type="radio" name="cornea" checked="checked"> Transparente</th>
										<th><input type="radio" name="cornea"> No Trasparente</th>
									</tr>
									<tr>
										<th>Tamaño Corneal:</th>
										<th><input type="radio" name="tcorneal" checked="checked"> Derecha</th>
										<th><input type="radio" name="tcorneal"> Izquierda</th>
									</tr>
									<tr>
										<th>Segmento Anterior:</th>
										<th><input type="radio" name="segmento" checked="checked"> Normal</th>
										<th><input type="radio" name="segmento"> Anormal</th>
									</tr>
									<tr>
										<th>Tamaño Pupilar:</th>
										<th><input type="radio" name="tpupilar" checked="checked"> Derecha</th>
										<th><input type="radio" name="tpupilar"> Izquierda</th>
									</tr>
									<tr>
										<th>Cristalino:</th>
										<th><input type="radio" name="cristalino" checked="checked"> Derecho</th>
										<th><input type="radio" name="cristalino"> Izquierdo</th>
									</tr>
									<tr><br></tr>
									<tr>
										<th colspan="4">FO.B/M <input type="text" class="input-large" id="txFOBM"></th>
									</tr>
								</tbody>							
							</table>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="span12">
							<table class="span6">
								<tbody>
									<tr>
										<th>Estudios Complementarios:</th>
										<th>Topografia</th>
										<th><input type="radio" name="topo" checked="checked"> Si</th>
										<th><input type="radio" name="topo"> No</th>
									</tr>
									<tr>
										<th>Paquimetria</th>
										<th>OD: <input type="text" class="input-mini"></th>
										<th>OI: <input type="text" class="input-mini"></th>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="span12">
							<span>Observaciones</span>
							<input type="textarea">
						</div>
					</div>
				</form>
			</section>
		<!-- start: Button -->
	<div class="control-group" id="btn_box">
	  	<label class="control-label"></label>
	  	<div class="controls">
			<input value="Imprimir" class="btn btn-large btn-danger" type="button" id="btnImprimirOperacionLaser" onclick="window.print();" disabled>
	    	<input value="Cancelar" class="btn btn-large btn-danger" type="button" id="btnCancelarOperacionLaser">
	  	</div>
	</div>
	<!-- end: button-->
	<div class="container">
		<div class="row">
			<img class="pull-right" src="logo" alt="">
			<img class="pull-left" src="logo2" alt="">
			<legend class="text-center">PROGRAMACION QUIRURGICA</legend>
		</div>
		<div class="row">
			<div class="span3">
				Fecha Programada:XXXXX
			</div>
			<div class="span3">
				<span>Hora:</span> <span>XXXX</span>
			</div>
		</div>
		<div class="row">
			<div class="span3"><span>Medico Tratante: </span></div>
			<div class="span8"><span>Dr. Gerardo Contreras Herrera</span></div>
		</div>
		<div class="row">
			<div class="span3"><span>Nombre del Paciente: </span></div>
			<div class="span8"><span>XXXXX</span></div>
		</div>
		<div class="row">
			<div class="span3"><span>Edad: </span><span>XXXXX</span></div>
			<div class="span3"><span>Sexo: </span><span>XXXXX</span></div>
			<div class="span3"><span>Profesion </span></div>
		</div>	
		<div class="row">
			<div class="span3">
				<h5>REVISION NO CICLOPLEJICA:</h5>
			</div>
			<div class="span3">
				<h5>REVISION CICLOPLEJICA:</h5>
			</div>
		</div>
		<div class="row">
			<div class="pull-left">
				<table>
					<tr>
						<td>Refraccion:</td>
						<td>OD:</td>
						<td>XXX</td>
						<td>-</td>
						<td>XXX</td>
						<td>X</td>
						<td>XXX</td>
						<td>CV:</td>
						<td>XXXX</td>
					</tr>
					<tr>
						<td></td>
						<td>OI:</td>
						<td>XXX</td>
						<td>-</td>
						<td>XXX</td>
						<td>X</td>
						<td>XXX</td>
						<td>CV:</td>
						<td>XXXX</td>
					</tr>
				</table>
			</div>
			<div class="pull-right">
				<table>
					<tr>
						<td>Refraccion:</td>
						<td>OD:</td>
						<td>XXX</td>
						<td>-</td>
						<td>XXX</td>
						<td>X</td>
						<td>XXX</td>
						<td>CV:</td>
						<td>XXXX</td>
					</tr>
					<tr>
						<td></td>
						<td>OI:</td>
						<td>XXX</td>
						<td>-</td>
						<td>XXX</td>
						<td>X</td>
						<td>XXX</td>
						<td>CV:</td>
						<td>XXXX</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h5>QURATOMETRIAS:</h5>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<table sclass="table">
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>OD:</td>
						<td>XXX</td>
						<td>X</td>
						<td>XXX</td>
						<td>/</td>
						<td>XXX</td>
						<td>X</td>
						<td>XXXX</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>OI:</td>
						<td>XXX</td>
						<td>X</td>
						<td>XXX</td>
						<td>/</td>
						<td>XXX</td>
						<td>X</td>
						<td>XXXX</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="span12">
				<h5>PLAN QUIRURGICO:</h5>
			</div>
		</div>
		<div class="row">
			<div class="pull-left">
			<table>
				<tr>
					<td><span>Hiper:</span></td>
					<td><span>XXX</span></td>
					<td><span>KH:</span></td>
					<td><span>XXX</span></td>
					<td><span>KV:</span></td>
					<td><span>XXX</span></td>
				</tr>
				<tr>
					<td><span>Esfera:</span></td>
					<td><span>XXX</span></td>
					<td><span>Cilindro:</span></td>
					<td><span>XXX</span></td>
					<td><span>Eje:</span></td>
					<td><span>XXX</span></td>
				</tr>
				<tr>
					<td><span>Anillo:</span></td>
					<td><span>XXX</span></td>
				</tr>
				<tr>
					<td><span></span></td>
					<td><span>XXX</span></td>
					<td><span>XXX</span></td>
					<td><span>XXX</span></td>
				</tr>
				<tr>
					<td><span></span></td>
					<td><span>XXX</span></td>
					<td><span>XXX</span></td>
					<td><span>XXX</span></td>
				</tr>
				<tr>
					<td><span></span></td>
					<td><span>XXX</span></td>
					<td><span>XXX</span></td>
					<td><span>XXX</span></td>
				</tr>
				<tr>
					<td><span></span></td>
					<td><span></span></td>
					<td><span>XXX</span></td>
					<td><span>XXX</span></td>
				</tr>
			</table>
			</div>
			<div class="pull-right">
			<table>
				<tr>
					<td><span>Hiper:</span></td>
					<td><span>XXX</span></td>
					<td><span>KH:</span></td>
					<td><span>XXX</span></td>
					<td><span>KV:</span></td>
					<td><span>XXX</span></td>
				</tr>
				<tr>
					<td><span>Esfera:</span></td>
					<td><span>XXX</span></td>
					<td><span>Cilindro:</span></td>
					<td><span>XXX</span></td>
					<td><span>Eje:</span></td>
					<td><span>XXX</span></td>
				</tr>
				<tr>
					<td><span>Anillo:</span></td>
					<td><span>XXX</span></td>
				</tr>
				<tr>
					<td><span></span></td>
					<td><span>XXX</span></td>
					<td><span>XXX</span></td>
					<td><span>XXX</span></td>
				</tr>
				<tr>
					<td><span></span></td>
					<td><span>XXX</span></td>
					<td><span>XXX</span></td>
					<td><span>XXX</span></td>
				</tr>
				<tr>
					<td><span></span></td>
					<td><span>XXX</span></td>
					<td><span>XXX</span></td>
					<td><span>XXX</span></td>
				</tr>
				<tr>
					<td><span></span></td>
					<td><span></span></td>
					<td><span>XXX</span></td>
					<td><span>XXX</span></td>
				</tr>
			</table>
			</div>
		</div>
	</div>
@stop


@section('Javascript')
	<script src="js/OperacionLaser.js"></script>
	
@stop