@extends('layouts.base')
@section('titulo')  
    Operación Laser
@stop

@section('Contenido')	
	<div class="container">
		<h1>Ajuste de Lasik</h1>
		<table class="table">
			<thead>
				<tr>
					<th></th>
					<th style="text-align:center;">Esfera</th>
					<th style="text-align:center;">Cilindro</th>
					<th></th>
					<th style="text-align:center;">Eje</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>Refracción</th>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtRefraccionEsfera"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtRefraccionCilindro"></td>
					<td>X</td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtRefraccionEje"></td>
				</tr>
			</tbody>
		</table>
		<br><br><br><br><br>
		<table class="table">
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
					<th>Queratometría</th>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtQueratometriaOD"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtQueratometriaOI"></td>
					<td>X</td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtQueratometriaEje"></td>
				</tr>
			</tbody>
		</table>
		<br><br><br><br><br>
		<table class="table">
			<tbody>
				<tr>
					<th>Ajuste 20%</th>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste20Esfera"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste20Cilindro"></td>
					<td>X</td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste20Eje"></td>
				</tr>
				<tr>
					<th>Ajuste 19%</th>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste19Esfera"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste19Cilindro"></td>
					<td>X</td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste19Eje"></td>
				</tr>
				<tr>
					<th>Ajuste 18%</th>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste18Esfera"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste18Cilindro"></td>
					<td>X</td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste18Eje"></td>
				</tr>
				<tr>
					<th>Ajuste 17%</th>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste17Esfera"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste17Cilindro"></td>
					<td>X</td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste17Eje"></td>
				</tr>
				<tr>
					<th>Ajuste 16%</th>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste16Esfera"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste16Cilindro"></td>
					<td>X</td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste16Eje"></td>
				</tr>
				<tr>
					<th>Ajuste 15%</th>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste15Esfera"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste15Cilindro"></td>
					<td>X</td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjuste15Eje"></td>
				</tr>				
			</tbody>
		</table>
		<div class="row">
		  	<b>Promedio Queratometrías: </b><input type="text" class="input-small" id="txtPromedioQueratometrias" />
		</div>
		<br><br>
		<h1>CAP Miopia</h1>
		<table class="table">
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
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjustePlanoEsfera"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjustePlanoCilindro"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjustePlanoEje"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtPorcentajeAjusteLasik" /></td>
				</tr>
				<tr>
					<th>Ajuste de Lasik</th>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjusteLasikEsfera"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjusteLasikCilindro"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjusteLasikEje"></td>
				</tr>
				<tr>
					<th>Ajuste de Cilindro</th>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjusteCilindroEsfera"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjusteCilindroCilindro"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtAjusteCilindroEje"></td>
				</tr>				
			</tbody>
		</table>
		<table class="table">
			<thead>
				<tr>
					<th colspan="3" style="text-align:center;">Queratometrías</th>
				</tr>
				<tr>
					<th style="text-align:center;">OD</th>
					<th style="text-align:center;">OI</th>
					<th style="text-align:center;">Eje</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtQueratometriaOD2"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtQueratometriaOI2"></td>
					<td style="text-align:center;"><input type="text" class="input-small" id="txtQueratometriaEje2"></td>
				</tr>
			</tbody>
		</table>
		<div class="row">
		  	<b>Promedio Queratometrías: </b><input type="text" class="input-small" id="txtPromedioQueratometrias2" />
		</div>
		<h4>Resultado:</h4>
		<table>
			<thead>
				<tr>
					<th>Esfera</th>
					<th>Cilindro</th>
					<th>Eje</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="text" class="input-small" id="txtEsfera"></td>
					<td><input type="text" class="input-small" id="txtCilindro"></td>
					<td><input type="text" class="input-small" id="txtEje"></td>
				</tr>
			</tbody>
		</table>
		<h4>Reducción de la Esfera por Cilindro Puro:</h4>
		<table>
			<thead>
				<tr>
					<th>Cilindro Puro</th>
					<th>Esfera Ajustada</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="text" class="input-small" id="txtCilindroPuro"></td>
					<td><input type="text" class="input-small" id="txtEsferaAjustada"></td>
				</tr>
			</tbody>
		</table>
		<br><br>
		<h1>Hipermetropia y Astigmatismo</h1>
		<table class="table">
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
					<td><input type="text" id="txtRefraccionEsfera3"></td>
					<td><input type="text" id="txtRefraccionCilindro3"></td>
					<td><input type="text" id="txtRefraccionEje3"></td>
				</tr>
				<tr>
					<th>Distancia al Vertex</th>
					<td><input type="text" id="txtDistanciaVertex3"></td>
				</tr>
				<tr>
					<th>Tratamiento</th>
					<td><input type="text" id="txtTratamientoEsfera3"></td>
					<td><input type="text" id="txtTratamientoCilindro3"></td>
					<td><input type="text" id="txtTratamientoEje3"></td>
				</tr>
			</tbody>
		</table>
		<h4>Queratometrías</h4>
		<table>
			<thead>
				<tr>
					<th>OD</th>
					<th>OI</th>
					<th>Eje</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="text" id="txtQueratometriaOD3"></td>
					<td><input type="text" id="txtQueratometriaOI3"></td>
					<td><input type="text" id="txtQueratometriaEje3"></td>
				</tr>
				<tr>
					<td colspan="3" style="text-align:center;"><input type="text" id="txtPromedio3"></td>
				</tr>
			</tbody>
		</table>
		<br><br>
		<h1>Astigmatismo Mixto</h1>
		<table class="table">
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
					<td><input type="text" id="txtRefraccionEsfera4"></td>
					<td><input type="text" id="txtRefraccionCilindro4"></td>
					<td><input type="text" id="txtRefraccionEje4"></td>
				</tr>
				<tr>
					<th>Transponer</th>
					<td><input type="text" id="txtTransponerEsfera4"></td>
					<td><input type="text" id="txtTransponerCilindro4"></td>
					<td><input type="text" id="txtTransponerEje4"></td>
				</tr>
			</tbody>
		</table>
		<table class="table">
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
					<td><input type="text" id="txtCilindroHipermetropicoPoder"></td>
					<td><input type="text" id="txtCilindroHipermetropicoEje"></td>
				</tr>
				<tr>
					<th>Cilindro Miopico</th>
					<td><input type="text" id="txtCilindroMiopicoPoder"></td>
					<td><input type="text" id="txtCilindroMiopicoEje"></td>
				</tr>
			</tbody>
		</table>
		<h4>Queratometrias</h4>
		<table class="table">
			<tbody>
				<tr>
					<th>OD</th>
					<td><input type="text" id="txtQueratometriasOD4"></td>
				</tr>
				<tr>
					<th>OI</th>
					<td><input type="text" id="txtQueratometriasOI4"></td>
				</tr>
				<tr>
					<th>Eje</th>
					<td><input type="text" id="txtQueratometriasEje4"></td>
				</tr>
				<tr>
					<th>Promedio</th>
					<td><input type="text" id="txtQueratometriasPromedio4"></td>
				</tr>				
			</tbody>
		</table>
	</div>	
@stop


@section('Javascript')
	<script src="js/OperacionLaser.js"></script>
@stop