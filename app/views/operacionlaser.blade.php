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
				<form action="" id="frmOperacionLaser">				
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
										<th><input type="text" class="input-mini" id="RefraccionSphOD"></th>
										<th>-</th>
										<th><input type="text" class="input-mini" id="RefraccionCylOD"></th>
										<th>X</th>
										<th><input type="text" class="input-mini" id="RefraccionEjeOD"></th>
										<th></th>
										<th>CV:20/<input type="text" class="input-mini" id="txtCCOD"></th>
									</tr>
									<tr>
										<th></th>
										<th>OI:</th>
										<th><input type="text" class="input-mini" id="RefraccionSphOI"></th>
										<th>-</th>
										<th><input type="text" class="input-mini" id="RefraccionCylOI"></th>
										<th>X</th>
										<th><input type="text" class="input-mini" id="RefraccionEjeOI"></th>
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
										<th colspan="4">QUERATOMETRIAS:</th>
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
										<th colspan="8">ESTUDIOS COMPLEMENTARIOS:</th>
									</tr>
									<tr>
										<th colspan="8">Queratometrias Topograficas</th>
									</tr>
									<tr>
										<th>OD:</th>
										<th><input type="text" class="input-mini" id="txtQT1"></th>
										<th>X</th>
										<th><input type="text" class="input-mini" id="txtQT2"></th>
										<th>/</th>
										<th><input type="text" class="input-mini" id="txtQT3"></th>
										<th>X</th>
										<th><input type="text" class="input-mini" id="txtQT4"></th>
									</tr>
									<tr>
										<th>OI:</th>
										<th><input type="text" class="input-mini" id="txtQT5"></th>
										<th>X</th>
										<th><input type="text" class="input-mini" id="txtQT6"></th>
										<th>/</th>
										<th><input type="text" class="input-mini" id="txtQT7"></th>
										<th>X</th>
										<th><input type="text" class="input-mini" id="txtQT8"></th>
									</tr>
								</tbody>
							</table>
						<div class="row">
							<div class="span12">
								<table>
									<tr>
										<th>Paquimetria</th>
										<th>OD: <input type="text" class="input-mini" id="txtpaqOD"></th>
										<th>OI: <input type="text" class="input-mini" id="txtpaqOI"></th>
									</tr>
								</table>
							</div>
						</div>
						</div>
					</div>
					<hr>
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
											<td style="text-align:left;"><input type="text" class="input-mini" id="txtValt" disabled="disabled"></td>							
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
											<td style="text-align:left;"><input type="text" class="input-mini" id="txtValtI" disabled="disabled"></td>							
											<td style="text-align:center;"><input type="text" class="input-small" id="txtVal10I" disabled="disabled"></td>							
											<td style="text-align:center;"><input type="text" class="input-small" id="txtVal11I" disabled="disabled"></td>							
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<br><br>
					<div class="row">
						<div class="span12">
							<span style="vertical-align:top;">Observaciones:</span>
							<textarea  id="observaciones"></textarea>
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
			<div class="span"><strong>Medico Tratante:</strong>&nbsp;&nbsp;&nbsp;&nbsp;</div>
			<div class="span"><span>Dr. Gerardo Contreras Herrera</span></div>
		</div>
		<div class="row">
			<div class="span"><strong>Nombre del Paciente:</strong>&nbsp;&nbsp;&nbsp;&nbsp;</div>
			<div class="span"><span id="rnombre"></span></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="span"><strong>Telefono:</strong>&nbsp;&nbsp;&nbsp;&nbsp;</div>
			<div class="span"><span id="rtelefono"></span></div>
		</div>
		<div class="row">
			<div class="span"><strong>Edad:</strong> &nbsp;<span id="redad"></span>&nbsp;años&nbsp;&nbsp;&nbsp;</div>
			<div class="span"><strong>Sexo:</strong> &nbsp;<span id="rsexo"></span>&nbsp;&nbsp;&nbsp;</div>
			<div class="span"><strong>Profesion:</strong> &nbsp;<span id="rprofesion"></span></div>
		</div>	
		<div class="row">
			<div class="span">
				<strong>Fecha Programada:</strong>&nbsp; <span id="rfecha">&nbsp;&nbsp;&nbsp;</span>
			</div>
			<div class="span">
				<strong>Hora:</strong> &nbsp;<span id="rhora">&nbsp;&nbsp;&nbsp;</span>
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
				</tr>
				<tr>
					<td>
						<table>
	
							<tr>
								<th>Refraccion:</th>
								<th>OD:&nbsp;&nbsp;&nbsp;</th>
								<td><span id="rRefraccionSphOD"></span>&nbsp;&nbsp;&nbsp;</td>
								<th>-&nbsp;&nbsp;&nbsp;</th>
								<td><span id="rRefraccionCylOD"></span>&nbsp;&nbsp;&nbsp;</td>
								<th>X&nbsp;&nbsp;&nbsp;</th>
								<td><span id="rRefraccionEjeOD"></span>&nbsp;&nbsp;&nbsp;</td>
								<th>CV:&nbsp;&nbsp;&nbsp;</th>
								<td><span id="rtxtCCOD"></span>&nbsp;&nbsp;&nbsp;</td>
							</tr>
							<tr>
								<td></td>
								<th>OI:&nbsp;&nbsp;&nbsp;</th>
								<td><span id="rRefraccionSphOI"></span>&nbsp;&nbsp;&nbsp;</td>
								<th>-&nbsp;&nbsp;&nbsp;</th>
								<td><span id="rRefraccionCylOI"></span>&nbsp;&nbsp;&nbsp;</td>
								<th>X&nbsp;&nbsp;&nbsp;</th>
								<td><span id="rRefraccionEjeOI"></span>&nbsp;&nbsp;&nbsp;</td>
								<th>CV:&nbsp;&nbsp;&nbsp;</th>
								<td><span id="rtxtCCOI"></span>&nbsp;&nbsp;&nbsp;</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td><strong>REFRACCION CICLOPLEJICA:</strong></td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<th>Refraccion:&nbsp;&nbsp;&nbsp;</th>
								<th>OD:&nbsp;&nbsp;&nbsp;</th>
								<td><span id="rtxtEsferaOD2"></span>&nbsp;&nbsp;&nbsp;</td>
								<th>-&nbsp;&nbsp;&nbsp;</th>
								<td><span id="rtxtCilindroOD2"></span>&nbsp;&nbsp;&nbsp;</td>
								<th>x&nbsp;&nbsp;&nbsp;</th>
								<td><span id="rtxtEjeOD2"></span>&nbsp;&nbsp;&nbsp;</td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<th>OI:&nbsp;&nbsp;&nbsp;</th>
								<td><span id="rtxtEsferaOI2"></span>&nbsp;&nbsp;&nbsp;</td>
								<th>-&nbsp;&nbsp;&nbsp;</th>
								<td><span id="rtxtCilindroOI2"></span>&nbsp;&nbsp;&nbsp;</td>
								<th>x&nbsp;&nbsp;&nbsp;</th>
								<td><span id="rtxtEjeOI2"></span>&nbsp;&nbsp;&nbsp;</td>
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
				<h5>QUERATOMETRIAS:</h5>
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
							<th colspan="8">ESTUDIOS COMPLEMENTARIOS:</th>
						</tr>
						<tr>
							<th colspan="8">Queratometrias Topograficas</th>
						</tr>
						<tr>
							<td></td>
							<th>&nbsp;OD:&nbsp;</th>
							<td><span id="rtxtQT1"></span>&nbsp;</td>
							<th>x&nbsp;</th>
							<td><span id="rtxtQT2"></span>&nbsp;</td>
							<th>/&nbsp;</th>
							<td><span id="rtxtQT3"></span>&nbsp;</td>
							<th>x&nbsp;</th>
							<td><span id="rtxtQT4"></span>&nbsp;</td>
						</tr>
						<tr>
							<td></td>
							<th>&nbsp;OI:&nbsp;</th>
							<td><span id="rtxtQT5"></span>&nbsp;</td>
							<th>x&nbsp;</th>
							<td><span id="rtxtQT6"></span>&nbsp;</td>
							<th>/&nbsp;</th>
							<td><span id="rtxtQT7"></span>&nbsp;</td>
							<th>x&nbsp;</th>
							<td><span id="rtxtQT8"></span>&nbsp;</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row">
				<div class="span12">
					<table>
						<tr>
							<th>Paquimetria</th>
							<th>OD:</th><th><span id="rtxtpaqOD"></th>
							<th>OI:</th><th><span id="rtxtPOOI"></th>
						</tr>
					</table>
				</div>
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
						<td style="width:50%;">
							<table class="span6 table">
								<thead>
									<tr>
										<th>Ojo Derecho:</th>
									</tr>
								</thead>
								<tbody>
									<table>
										<tr>
											<th>Anillo:</th>
											<td><span id="rtxtAnillo"></span></td>
										</tr>
										<tr>
											<td></td>
											<td class="text-center"><span id="rtxtValt"></span></td>
											<td class="text-center"><span id="rtxtVal2"></span></td>
											<td>X</td>
											<td class="text-center"><span id="rtxtVal3"></span></td>
										</tr>
									</table>
								</tbody>
							</table>
							<table>
								<thead>
									<tr>
										<th>Ojo Izquierdo:</th>
									</tr>
								</thead>
								<tbody>
									<table>
										<tr>
											<th>Anillo:</th>
											<td><span id="rtxtAnilloI"></span></td>
										</tr>
										<tr>
											<td></td>
											<td class="text-center"><span id="rtxtValtI"></span></td>
											<td class="text-center"><span id="rtxtVal2I"></span></td>
											<td>X</td>
											<td class="text-center"><span id="rtxtVal3I"></span></td>
										</tr>
									</table>
								</tbody>
							</table>
						</td>
						<td style="width:50%;">
							<table>
								<tr>
									<th>Observaciones:</th>
								</tr>
								<tr>
									<th>
										<textarea id="robservaciones"></textarea>	
									</th>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			
		</div>
	</div>
						
@stop


@section('Javascript')
	<script src="js/OperacionLaser.js"></script>
	
@stop