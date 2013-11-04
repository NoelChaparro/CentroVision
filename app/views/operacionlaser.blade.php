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
			<br><br>
			<section id="lasik">
				<legend>Ajuste de Lasik</legend>
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














				<!--<div class="row">
					<table class="span8">
						<thead>
							<tr>
								<th></th>
								<th style="text-align:center;">Ojo Derecho</th>
								<th style="text-align:center;">Ojo Izquierdo</th>
								<th></th>
								<th style="text-align:center;">Eje</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="span2">Queratometría</td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtQueratometriaOD"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtQueratometriaOI"></td>
								<td>X</td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtQueratometriaEje"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<br><br>
				<div class="row">
					<table class="span8">
						<tbody>
							<tr>
								<th>Ajuste 20%</th>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste20Esfera" disabled="disabled"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste20Cilindro" disabled="disabled"></td>
								<td>X</td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste20Eje" disabled="disabled"></td>
							</tr>
							<tr>
								<th>Ajuste 19%</th>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste19Esfera" disabled="disabled"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste19Cilindro" disabled="disabled"></td>
								<td>X</td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste19Eje" disabled="disabled"></td>
							</tr>
							<tr>
								<th>Ajuste 18%</th>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste18Esfera" disabled="disabled"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste18Cilindro" disabled="disabled"></td>
								<td>X</td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste18Eje" disabled="disabled"></td>
							</tr>
							<tr>
								<th>Ajuste 17%</th>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste17Esfera" disabled="disabled"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste17Cilindro" disabled="disabled"></td>
								<td>X</td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste17Eje" disabled="disabled"></td>
							</tr>
							<tr>
								<th>Ajuste 16%</th>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste16Esfera" disabled="disabled"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste16Cilindro" disabled="disabled"></td>
								<td>X</td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste16Eje" disabled="disabled"></td>
							</tr>
							<tr>
								<th>Ajuste 15%</th>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste15Esfera" disabled="disabled"</td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste15Cilindro" disabled="disabled"</td>
								<td>X</td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste15Eje" disabled="disabled"</td>
							</tr>				
						</tbody>
					</table>
					<div class="span4">
					  	<b>Promedio Queratometrías: </b><input type="text" class="input-small" id="txtPromedioQueratometrias" disabled="disabled">
					</div>
				</div>
			</section>

			<section id="miopia">
				<div>
					<legend>CAP Miopia</legend>
				</div>
				<div class="row">
					<table class="span10">
						<thead>
							<tr>
								<th></th>
								<th style="text-align:center;">Esfera</th>
								<th style="text-align:center;">Cilindro</th>
								<th style="text-align:center;">Eje</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Refracción</th>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtRefraccionEsfera2"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtRefraccionCilindro2"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtRefraccionEje2"></td>
							</tr>
							<tr>
								<th>Distancia Vertex</th>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtDistanciaVertex"></td>
								<td></td>
								<td></td>
								<th style="text-align:center;">Porcentaje Ajuste de Lasik</th>
							</tr>
							<tr>
								<th>Ajuste a Plano Corneal</th>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjustePlanoEsfera" disabled="disabled"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjustePlanoCilindro" disabled="disabled"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjustePlanoEje" disabled="disabled"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtPorcentajeAjusteLasik" /></td>
							</tr>
							<tr>
								<th>Ajuste de Lasik</th>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjusteLasikEsfera" disabled="disabled"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjusteLasikCilindro" disabled="disabled"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjusteLasikEje" disabled="disabled"></td>
							</tr>
							<tr>
								<th>Ajuste de Cilindro</th>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjusteCilindroEsfera" disabled="disabled"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjusteCilindroCilindro" disabled="disabled"></td>
								<td style="text-align:center;"><input type="text" class="input-small" id="txtAjusteCilindroEje" disabled="disabled"></td>
							</tr>				
						</tbody>
					</table>
				</div>
				<div class="row">
					<table class="span7 offset1">
						<thead>
							<tr>
								<th colspan="3">Queratometrías</th>
							</tr>
							<tr>
								<th>OD</th>
								<th>OI</th>
								<th>Eje</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="text" class="input-small" class="input-small" id="txtQueratometriaOD2"></td>
								<td><input type="text" class="input-small" class="input-small" id="txtQueratometriaOI2"></td>
								<td><input type="text" class="input-small" class="input-small" id="txtQueratometriaEje2"></td>
							</tr>
							<tr>
								<td colspan="3" style="text-align:center;"><b>Promedio de Queratometrías:</b><input type="text" class="input-small" id="txtPromedioQueratometrias2" disabled="disabled"></td>
							</tr>
						</tbody>
					</table>
				</div>
			
				<div class="row">
					<h5>Resultado:</h5>
					<table class="span6">
						<thead>
							<tr>
								<th>Esfera</th>
								<th>Cilindro</th>
								<th>Eje</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="text" class="input-small" id="txtEsfera" disabled="disabled"></td>
								<td><input type="text" class="input-small" id="txtCilindro" disabled="disabled"></td>
								<td><input type="text" class="input-small" id="txtEje" disabled="disabled"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row">
					<h5>Reducción de la Esfera por Cilindro Puro:</h5>
				
				<table class="span6">
					<thead>
						<tr>
							<th>Cilindro Puro</th>
							<th>Esfera Ajustada</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><input type="text" class="input-small" id="txtCilindroPuro"></td>
							<td><input type="text" class="input-small" id="txtEsferaAjustada" disabled="disabled"></td>
						</tr>
					</tbody>
				</table>
				</div>
			</section>

			<section id="hipermetropia">
				<legend>Hipermetropia y Astigmatismo</legend>
				<div class="row">
					<table class="span8">
						<thead>
							<tr>
								<th></th>
								<th>Esfera</th>
								<th>Cilindro</th>
								<th>Eje</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Refracción</th>
								<td><input type="text" class="input-small" id="txtRefraccionEsfera3"></td>
								<td><input type="text" class="input-small" id="txtRefraccionCilindro3"></td>
								<td><input type="text" class="input-small" id="txtRefraccionEje3"></td>
							</tr>
							<tr>
								<th>Distancia al Vertex</th>
								<td><input type="text" class="input-small" id="txtDistanciaVertex3"></td>
							</tr>
							<tr>
								<th>Tratamiento</th>
								<td><input type="text" class="input-small" id="txtTratamientoEsfera3" disabled="disabled"></td>
								<td><input type="text" class="input-small" id="txtTratamientoCilindro3" disabled="disabled"></td>
								<td><input type="text" class="input-small" id="txtTratamientoEje3" disabled="disabled"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row">
					<table class="span7 offset1">
						<thead>
							<tr>
							<th colspan="3">Queratometrías</th>
						</tr>
							<tr>
								<th>OD</th>
								<th>OI</th>
								<th>Eje</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input type="text" class="input-small" id="txtQueratometriaOD3"></td>
								<td><input type="text" class="input-small" id="txtQueratometriaOI3"></td>
								<td><input type="text" class="input-small" id="txtQueratometriaEje3"></td>
							</tr>
							<tr>
								<td colspan="3" style="text-align:center;"><b>Promedio de Queratometrías:</b><input type="text" class="input-small" id="txtPromedio3" disabled="disabled"></td>
							</tr>
						</tbody>
					</table>
				</div>
				</br></br>
			</section>

			<section id="astigmatismo">
				<legend>Astigmatismo Mixto</legend>
				<div class="row">
					<table class="span8">
						<thead>
							<tr>
								<th></th>
								<th>Esfera</th>
								<th>Cilindro</th>
								<th>Eje</th>
							</tr>				
						</thead> 
						<tbody>
							<tr>
								<th>Refracción</th>
								<td><input type="text" class="input-small" id="txtRefraccionEsfera4"></td>
								<td><input type="text" class="input-small" id="txtRefraccionCilindro4"></td>
								<td><input type="text" class="input-small" id="txtRefraccionEje4"></td>
							</tr>
							<tr>
								<th>Transponer</th>
								<td><input type="text" class="input-small" id="txtTransponerEsfera4" disabled="disabled"></td>
								<td><input type="text" class="input-small" id="txtTransponerCilindro4" disabled="disabled"></td>
								<td><input type="text" class="input-small" id="txtTransponerEje4" disabled="disabled"></td>
							</tr>
						</tbody>
					</table>
					<table class="span5">
						<thead>
							<tr>
								<th></th>
								<th>Poder</th>
								<th>Eje</th>
							</tr>				
						</thead>
						<tbody>
							<tr>
								<th>Cilindro Hipermetropico</th>
								<td><input type="text" class="input-small" id="txtCilindroHipermetropicoPoder" disabled="disabled"></td>
								<td><input type="text" class="input-small" id="txtCilindroHipermetropicoEje" disabled="disabled"></td>
							</tr>
							<tr>
								<th>Cilindro Miopico</th>
								<td><input type="text" class="input-small" id="txtCilindroMiopicoPoder" disabled="disabled"></td>
								<td><input type="text" class="input-small" id="txtCilindroMiopicoEje" disabled="disabled"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="row">
					<h5>Queratometrias</h5>
					<table class="span4">
						<tbody>
							<tr>
								<th>OD</th>
								<td><input type="text" class="input-small" id="txtQueratometriasOD4"></td>
							</tr>
							<tr>
								<th>OI</th>
								<td><input type="text" class="input-small" id="txtQueratometriasOI4"></td>
							</tr>
							<tr>
								<th>Eje</th>
								<td><input type="text" class="input-small" id="txtQueratometriasEje4"></td>
							</tr>
							<tr>
								<th>Promedio</th>
								<td><input type="text" class="input-small" id="txtQueratometriasPromedio4" disabled="disabled"></td>
							</tr>				
						</tbody>
					</table>
				</div>
				</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
			</section>-->
		</div>
@stop


@section('Javascript')
	<script src="js/OperacionLaser2.js"></script>
	
@stop