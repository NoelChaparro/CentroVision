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
				<legend>Lasik</legend>
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
								<th><input type="text" class="input-mini" id="txtEdad"> años</th>
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
											<td>Total:</td>
											<td style="text-align:center;"><input type="text" class="input-small" id="txtValt" disabled="disabled"></td>							
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
											<th><input type="text" class="input-small" id="txtRefraccionEsferaI"></th>
											<th></th>
											<th><input type="text" class="input-small" id="txtRefraccionCilindroI"></th>
											<th></th>
											<th><input type="text" class="input-small" id="txtRefraccionEjeI"></th>
											<th></th>
										</tr>
										<tr>
											<th></th>
											<th style="text-align:center;">KH</th>
											<th><input type="text" class="input-small" id="txtKHI"></th>
											<th style="text-align:center;">KV</th>
											<th><input type="text" class="input-small" id="txtKVI"></th>
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
											<td>Total:</td>
											<td style="text-align:center;"><input type="text" class="input-small" id="txtValtI" disabled="disabled"></td>							
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
										<th colspan="4">REFRACCION NO CICLOPLEJICA:</th>
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
										<th colspan="4">REFRACCION CICLOPLEJICA:</th>
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
							<table class="span6">
								<th>Presion Ocular:</th>
								<th>OD:</th>
								<td><input type="text" class="input-mini" id="txtPOOD">mmHg</td>
								<th>OI:</th>
								<td><input type="text" class="input-mini" id="txtPOOI">mmHg</td>
							</table>
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
										<th><input type="radio" name="cornea" value="Trasparente" checked="checked"> Transparente</th>
										<th><input type="radio" name="cornea" value="No Trasparente"> No Trasparente</th>
									</tr>
									<tr>
										<th>Tamaño Corneal:</th>
										<th><input type="radio" name="tcorneal" value="Derecha" checked="checked"> Derecha</th>
										<th><input type="radio" name="tcorneal" value="Izquierda"> Izquierda</th>
									</tr>
									<tr>
										<th>Segmento Anterior:</th>
										<th><input type="radio" name="segmento" value="Normal" checked="checked"> Normal</th>
										<th><input type="radio" name="segmento" value="Anormal"> Anormal</th>
									</tr>
									<tr>
										<th>Tamaño Pupilar:</th>
										<th><input type="radio" name="tpupilar" value="Derecha" checked="checked"> Derecha</th>
										<th><input type="radio" name="tpupilar" value="Izquierda"> Izquierda</th>
									</tr>
									<tr>
										<th>Cristalino:</th>
										<th><input type="radio" name="cristalino" value="Derecho" checked="checked"> Derecho</th>
										<th><input type="radio" name="cristalino" value="Izquierdo"> Izquierdo</th>
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
										<th>OD: <input type="text" class="input-mini" id="txtpaqOD"></th>
										<th>OI: <input type="text" class="input-mini" id="txtpaqOI"></th>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="span12">
							<span>Observaciones</span>
							<input type="textarea" id="observaciones">
						</div>
					</div>
				</form>
			</section>
		<!-- start: Button -->
	<div class="control-group" id="btn_box">
	  	<label class="control-label"></label>
	  	<div class="controls">
	  		<input value="Imprimir" class="btn btn-large btn-info" type="button" id="btnImprimirOperacionLaser" disabled>
	    	<input value="Cancelar" class="btn btn-large btn-danger" type="button" id="btnCancelarOperacionLaser">
	  	</div>
	</div>
	<!-- end: button-->
	<div class="reporte">
		<div class="row">
			<!--<img class="pull-right" src="logo" alt="">-->
			<img class="pull-right flotante" src="img/logo.jpg" alt="" width="80">
			<legend class="text-center">PROGRAMACION QUIRURGICA</legend>
		</div>
		<div class="row">
			<div class="span"><span><strong>Medico Tratante:</strong> </span>&nbsp;&nbsp;&nbsp;&nbsp;</div>
			<div class="span"><span>Dr. Gerardo Contreras Herrera</span></div>
		</div>
		<div class="row">
			<div class="span"><span><strong>Nombre del Paciente:</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;</div>
			<div class="span"><span id="rnombre"></span></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="span"><span><strong>Telefono:</strong></span>&nbsp;&nbsp;&nbsp;&nbsp;</div>
			<div class="span"><span id="rtelefono"></span></div>
		</div>
		<div class="row">
			<div class="span"><span><strong>Edad:</strong> </span>&nbsp;<span id="redad"></span>&nbsp;años&nbsp;&nbsp;&nbsp;</div>
			<div class="span"><span><strong>Sexo:</strong> </span>&nbsp;<span id="rsexo"></span>&nbsp;&nbsp;&nbsp;</div>
			<div class="span"><span><strong>Profesion:</strong> </span>&nbsp;<span id="rprofesion"></span></div>
		</div>	
		<div class="row">
			<div class="span">
				<span><strong>Fecha Programada:</strong></span>&nbsp; <span id="rfecha">&nbsp;&nbsp;&nbsp;</span>
			</div>
			<div class="span">
				<span><strong>Hora:</strong></span> &nbsp;<span id="rhora">&nbsp;&nbsp;&nbsp;</span>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="span">
				<table class="span">
					<tbody>
						<tr>
							<th>A.V. S.C.&nbsp;&nbsp;</th>
							<th> OD:20/</th>
							<td><span id="rtxtAVOD"></span>&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<th>OI:20/</th>
							<td><span id="rtxtAVOI"></span></td> 
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<hr>
		<div class="row">
			<table>
				<tr>
					<td><strong>REFRACCION NO CICLOPLEJICA:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td></td>
					<td></td>
					<td><strong>REFRACCION CICLOPLEJICA:</strong></td>
				</tr>
				<tr>
					<td>
						<table>
	
							<tr>
								<th>Refraccion:</th>
								<th>OD:&nbsp;</th>
								<td><span id="rRefraccionSphOD"></span>&nbsp;</td>
								<th>-&nbsp;</th>
								<td><span id="rRefraccionCylOD"></span>&nbsp;</td>
								<th>x</th>
								<td><span id="rRefraccionEjeOD"></span>&nbsp;</td>
								<th>CV:&nbsp;</th>
								<td><span id="rtxtCCOD">&nbsp;</span></td>
							</tr>
							<tr>
								<td></td>
								<th>OI:&nbsp;</th>
								<td><span id="rRefraccionSphOI"></span>&nbsp;</td>
								<th>-&nbsp;</th>
								<td><span id="rRefraccionCylOI"></span>&nbsp;</td>
								<th>X&nbsp;</th>
								<td><span id="rRefraccionEjeOI"></span>&nbsp;</td>
								<th>CV:&nbsp;</th>
								<td><span id="rtxtCCOI"></span>&nbsp;</td>
							</tr>
						</table>
					</td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td></td>
					<td>
						<table>
							<tr>
								<th>Refraccion:&nbsp;</th>
								<th>OD:&nbsp;</th>
								<td><span id="rtxtEsferaOD2"></span>&nbsp;</td>
								<th>-&nbsp;</th>
								<td><span id="rtxtCilindroOD2"></span>&nbsp;</td>
								<th>x&nbsp;</th>
								<td><span id="rtxtEjeOD2"></span>&nbsp;</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<th>OI:&nbsp;</th>
								<td><span id="rtxtEsferaOI2"></span>&nbsp;</td>
								<th>-&nbsp;</th>
								<td><span id="rtxtCilindroOI2"></span>&nbsp;</td>
								<th>x&nbsp;</th>
								<td><span id="rtxtEjeOI2"></span>&nbsp;</td>
								<th></th>
								<td></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
		<hr>
		<div class="row">
			<div class="span">
				<h5>QURATOMETRIAS:</h5>
			</div>
		</div>
		<div class="row">
			<div class="span">
				<table sclass="table">
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<th>&nbsp;OD:&nbsp;</th>
						<td><span id="rtxtQ1"></span>&nbsp;</td>
						<th>x&nbsp;</th>
						<td><span id="rtxtQ2"></span>&nbsp;</td>
						<th>/&nbsp;</th>
						<td><span id="rtxtQ3"></span>&nbsp;</td>
						<th>x&nbsp;</th>
						<td><span id="rtxtQ4"></span>&nbsp;</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<th>&nbsp;OI:&nbsp;</th>
						<td><span id="rtxtQ5"></span>&nbsp;</td>
						<th>x&nbsp;</th>
						<td><span id="rtxtQ6"></span>&nbsp;</td>
						<th>/&nbsp;</th>
						<td><span id="rtxtQ7"></span>&nbsp;</td>
						<th>x&nbsp;</th>
						<td><span id="rtxtQ8"></span>&nbsp;</td>
					</tr>
				</table>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="span">
				<table class="span">
					<tbody>
						<tr>
							<th colspan="4"> EXPLORACION FISICA:</th>
						</tr>
						<tr>
							<th>Cornea:</th>
							<td>&nbsp;&nbsp;<span id="rcornea"></span></td>
							<th>&nbsp;&nbsp;&nbsp;Tamaño Corneal:</th>
							<td>&nbsp;&nbsp;<span id="rtcorneal"></span></td>
						</tr>
						<tr></tr>
						<tr>
							<th>Segmento Anterior:</th>
							<td>&nbsp;&nbsp;<span id="rsegmento"></span></td>
							<th>&nbsp;&nbsp;&nbsp;Tamaño Pupilar:</th>
							<td>&nbsp;&nbsp;<span id="rtpupilar"></span></td>
						</tr>
						<tr></tr>
						<tr>
							<th>Cristalino:</th>
							<td>&nbsp;&nbsp;<span id="rcristalino"></span></td>
						</tr>
						<tr><br></tr>
						<tr>
							<th>FO.B/M</th>
							<td>&nbsp;&nbsp;<span id="rtxFOBM"></span></td>
						</tr>
					</tbody>							
				</table>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="span">
				<table class="span">
					<th>Presion Ocular:&nbsp;&nbsp;&nbsp;</th>
					<th>OD:&nbsp;&nbsp;</th>
					<td><span id="rtxtPOOD"></span>&nbsp;mmHg</td>
					<th>&nbsp;&nbsp;&nbsp;&nbsp;OI:</th>
					<td><span id="rtxtPOOI"></span>&nbsp;mmHg</td>
				</table>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="span">
				<table class="span">
					<tbody>
						<tr>
							<th>Estudios Complementarios:</th>
						</tr>
						<tr>
							<th>Topografia</th>
						</tr>
						<tr>
							<th>Paquimetria</th>
							<th>OD: <span id="rtxtpaqOD"></th>
							<th>OI: <span id="rtxtPOOI"></th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="span">
				<h5>PLAN QUIRURGICO:</h5>
			</div>
		</div>
		<div class="row">
			<table>
				<tr>
					<th>Ojo Izquierdo:</th>
					<th>&nbsp;&nbsp;&nbsp;</th>
					<th>Ojo Derecho:</th>
					<th>&nbsp;&nbsp;&nbsp;</th>
					<th>Observaciones</th>
				</tr>
				<tr>
				<td>
				<table>
					<tr>
						<th><span>Hiper:</span></th>
						<td><span><span id="rtxtHiper"></span></span></td>
						<th><span>KH:</span></th>
						<td><span><span id="rtxtKH"></span></span></td>
						<th><span>KV:</span></th>
						<td><span><span id="rtxtKV"></span></span></td>
					</tr>
					<tr>
						<th><span>Esfera:</span></th>
						<td><span><span id="rtxtRefraccionEsfera"></span></span></td>
						<th><span>Cilindro:</span></th>
						<td><span><span id="rtxtRefraccionCilindro"></span></span></td>
						<th><span>Eje:</span></th>
						<td><span><span id="rtxtRefraccionEje"></span></span></td>
					</tr>
					<tr>
						<th><span>Anillo:</span></th>
						<td><span><span id="rtxtAnillo"></span></span></td>
					</tr>
					<tr>
						<td><span></span></td>
						<td class="text-center"><span><span id="rtxtVal1"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal2"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal3"></span></span></td>
					</tr>
					<tr>
						<td><span></span></td>
						<td class="text-center"><span><span id="rtxtVal4"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal5"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal6"></span></span></td>
					</tr>
					<tr>
						<td><span></span></td>
						<td class="text-center"><span><span id="rtxtVal7"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal8"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal9"></span></span></td>
					</tr>
					<tr>
						<th><span>Total:</span></th>
						<td class="text-center"><span><span id="rtxtValt"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal10"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal11"></span></span></td>
					</tr>
				</table>
				</td>
				<th></th>
				<td>
				<table>
					<tr>
						<th><span>Hiper:</span></th>
						<td><span><span id="rtextHiper2"></span></span></td>
						<th><span>KH:</span></th>
						<td><span><span id="rtxtKHI"></span></span></td>
						<th><span>KV:</span></th>
						<td><span><span id="rrtxtKVI"></span></span></td>
					</tr>
					<tr>
						<th><span>Esfera:</span></th>
						<td><span><span id="rtxtRefraccionEsferaI"></span></span></td>
						<th><span>Cilindro:</span></th>
						<td><span><span id="rtxtRefraccionCilindroI"></span></span></td>
						<th><span>Eje:</span></th>
						<td><span><span id="rtxtRefraccionEjeI"></span></span></td>
					</tr>
					<tr>
						<th><span>Anillo:</span></th>
						<td><span><span id="rtxtAnilloI"></span></span></td>
					</tr>
					<tr>
						<td><span></span></td>
						<td class="text-center"><span><span id="rtxtVal1I"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal2I"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal3I"></span></span></td>
					</tr>
					<tr>
						<td><span></span></td>
						<td class="text-center"><span><span id="rtxtVal4I"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal5I"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal6I"></span></span></td>
					</tr>
					<tr>
						<td><span></span></td>
						<td class="text-center"><span><span id="rtxtVal7I"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal8I"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal9I"></span></span></td>
					</tr>
					<tr>
						<th><span>Total:</span></th>
						<td class="text-center"><span><span id="rtxtValtI"><span></span></td>
						<td class="text-center"><span><span id="rtxtVal10I"></span></span></td>
						<td class="text-center"><span><span id="rtxtVal11I"></span></span></td>
					</tr>
				</table>
				</td>
				<th></th>
				<td><span id="robservaciones"></span></td>
				</tr>
			</table>
		</div>
	</div>
@stop


@section('Javascript')
	<script src="js/OperacionLaser.js"></script>
	
@stop