$(document).on("ready",inicio);

function inicio() //Inicio del documento
{
	$("#txtRefraccionEsfera").on({
		change:refraccionEsfera,
		keydown:refraccionEsfera,
		keyup:refraccionEsfera
	});
	$("#txtRefraccionCilindro").on({
		change:refraccionCilindro,
		keydown:refraccionCilindro,
		keyup:refraccionCilindro
	});
	$("#txtRefraccionEje").on({
		change:refraccionEje,
		keydown:refraccionEje,
		keyup:refraccionEje
	});
	$("#txtQueratometriaOD,#txtQueratometriaOI").on({
		change:promedioQueratometrias,
		keydown:promedioQueratometrias,
		keyup:promedioQueratometrias
	});
	$("#txtRefraccionEsfera2,#txtDistanciaVertex").on({
		change:ajustePlanoEsfera,
		keydown:ajustePlanoEsfera,
		keyup:ajustePlanoEsfera
	});
	$("#txtRefraccionCilindro2").on({
		change:ajustePlanoCilindro,
		keydown:ajustePlanoCilindro,
		keyup:ajustePlanoCilindro
	});
	$("#txtRefraccionEje2").on({
		change:ajustePlanoEje,
		keydown:ajustePlanoEje,
		keyup:ajustePlanoEje
	});
	$("#txtPorcentajeAjusteLasik").on({
		change:ajusteLasikEsfera,
		keydown:ajusteLasikEsfera,
		keyup:ajusteLasikEsfera
	});
	$("#txtQueratometriaOD2,#txtQueratometriaOI2").on({
		change:promedioQueratometrias2,
		keydown:promedioQueratometrias2,
		keyup:promedioQueratometrias2
	});
	$("#txtCilindroPuro").on({
		change:esferaAjustada,
		keydown:esferaAjustada,
		keyup:esferaAjustada
	});
	$("#txtRefraccionEsfera3,#txtDistanciaVertex3").on({
		change:tratamientoEsfera,
		keydown:tratamientoEsfera,
		keyup:tratamientoEsfera
	});
	$("#txtRefraccionCilindro3").on({
		change:tratamientoCilindro,
		keydown:tratamientoCilindro,
		keyup:tratamientoCilindro
	});
	$("#txtRefraccionEje3").on({
		change:tratamientoEje,
		keydown:tratamientoEje,
		keyup:tratamientoEje
	});
	$("#txtQueratometriaOD3,#txtQueratometriaOI3").on({
		change:queratometriaPromedio3,
		keydown:queratometriaPromedio3,
		keyup:queratometriaPromedio3
	});
	$("#txtRefraccionEsfera4,#txtRefraccionCilindro4").on({
		change:trasponerEsfera,
		keydown:trasponerEsfera,
		keyup:trasponerEsfera
	});
	$("#txtRefraccionEje4").on({
		change:trasponerEje4,
		keydown:trasponerEje4,
		keyup:trasponerEje4
	});
	$("#txtQueratometriasOD4,#txtQueratometriasOI4").on({
		change:promedioQueratometrias4,
		keydown:promedioQueratometrias4,
		keyup:promedioQueratometrias4
	});
	activarMenu();
}
var activarMenu = function (){
	$(".menu_principal li:first-child").removeClass("active");
	$(".menu_principal li:eq(1)").addClass("active");
}
function promedioQueratometrias4(){
	$("#txtQueratometriasPromedio4").val((parseFloat($("#txtQueratometriasOD4").val()) + parseFloat($("#txtQueratometriasOI4").val()))/2);
}
function trasponerEje4(){
	if(parseFloat($("#txtRefraccionEje4").val()) > 90){
		$("#txtTransponerEje4").val(parseFloat($("#txtRefraccionEje4").val()) - 90);
	}else{
		$("#txtTransponerEje4").val(parseFloat($("#txtRefraccionEje4").val()) + 90);
	}
	$("#txtCilindroHipermetropicoEje").val($("#txtTransponerEje4").val());
	$("#txtCilindroMiopicoEje").val($("#txtRefraccionEje4").val());
}
function trasponerEsfera(){
	$("#txtTransponerEsfera4").val(parseFloat($("#txtRefraccionEsfera4").val()) + parseFloat($("#txtRefraccionCilindro4").val()));
	$("#txtTransponerCilindro4").val(parseFloat($("#txtRefraccionCilindro4").val()) * -1);

	$("#txtCilindroHipermetropicoPoder").val(parseFloat($("#txtTransponerCilindro4").val()) + parseFloat($("#txtTransponerEsfera4").val()));
	$("#txtCilindroMiopicoPoder").val($("#txtTransponerEsfera4").val());
}

function queratometriaPromedio3(){
	$("#txtPromedio3").val((parseFloat($("#txtQueratometriaOD3").val()) + parseFloat($("#txtQueratometriaOI3").val())) / 2);
}
function tratamientoEje(){
	$("#txtTratamientoEje3").val($("#txtRefraccionEje3").val());
}
function tratamientoCilindro(){
	$("#txtTratamientoCilindro3").val($("#txtRefraccionCilindro3").val());
}
function tratamientoEsfera(){
	$("#txtTratamientoEsfera3").val($("#txtRefraccionEsfera3").val() / (1-(0.001 * parseFloat($("#txtRefraccionEsfera3").val()) * parseFloat($("#txtDistanciaVertex3").val()))));
}
function esferaAjustada(){
	$("#txtEsferaAjustada").val(parseFloat($("#txtAjusteCilindroEsfera").val()) - ( 0.125 * parseFloat($("#txtCilindroPuro").val())));
}
function promedioQueratometrias2(){
	$("#txtPromedioQueratometrias2").val((parseFloat($("#txtQueratometriaOD2").val()) + parseFloat($("#txtQueratometriaOI2").val()))/2);
}
function ajusteLasikEsfera(){
	$("#txtAjusteLasikEsfera").val((parseFloat($("#txtAjustePlanoEsfera").val()) * (1 - (parseFloat($("#txtPorcentajeAjusteLasik").val())/100))) * -1);
	$("#txtAjusteCilindroEsfera").val($("#txtAjusteLasikEsfera").val() * -1);
	$("#txtEsfera").val($("#txtAjusteCilindroEsfera").val());
}
function ajustePlanoEje(){
	$("#txtAjustePlanoEje").val($("#txtRefraccionEje2").val());
	$("#txtAjusteLasikEje").val($("#txtRefraccionEje2").val());
	$("#txtAjusteCilindroEje").val($("#txtRefraccionEje2").val());
	$("#txtEje").val($("#txtRefraccionEje2").val());
}
function ajustePlanoCilindro(){
	$("#txtAjustePlanoCilindro").val($("#txtRefraccionCilindro2").val());
	$("#txtAjusteLasikCilindro").val($("#txtRefraccionCilindro2").val());
	$("#txtAjusteCilindroCilindro").val($("#txtRefraccionCilindro2").val() * 1.2);
	$("#txtCilindro").val($("#txtAjusteCilindroCilindro").val());
}
function ajustePlanoEsfera(){
	$("#txtAjustePlanoEsfera").val(parseFloat($("#txtRefraccionEsfera2").val()) / (1 - (0.001 * parseFloat($("#txtDistanciaVertex").val()) * parseFloat($("#txtRefraccionEsfera2").val()))));
}
function refraccionEsfera(){
	$("#txtAjuste20Esfera").val($("#txtRefraccionEsfera").val()*0.8);
	$("#txtAjuste19Esfera").val($("#txtRefraccionEsfera").val()*0.81);
	$("#txtAjuste18Esfera").val($("#txtRefraccionEsfera").val()*0.82);
	$("#txtAjuste17Esfera").val($("#txtRefraccionEsfera").val()*0.83);
	$("#txtAjuste16Esfera").val($("#txtRefraccionEsfera").val()*0.84);
	$("#txtAjuste15Esfera").val($("#txtRefraccionEsfera").val()*0.85);
}
function refraccionCilindro(){
	$("#txtAjuste20Cilindro").val($("#txtRefraccionCilindro").val());
	$("#txtAjuste19Cilindro").val($("#txtRefraccionCilindro").val());
	$("#txtAjuste18Cilindro").val($("#txtRefraccionCilindro").val());
	$("#txtAjuste17Cilindro").val($("#txtRefraccionCilindro").val());
	$("#txtAjuste16Cilindro").val($("#txtRefraccionCilindro").val());
	$("#txtAjuste15Cilindro").val($("#txtRefraccionCilindro").val());
}
function refraccionEje(){
	$("#txtAjuste20Eje").val($("#txtRefraccionEje").val());
	$("#txtAjuste19Eje").val($("#txtRefraccionEje").val());
	$("#txtAjuste18Eje").val($("#txtRefraccionEje").val());
	$("#txtAjuste17Eje").val($("#txtRefraccionEje").val());
	$("#txtAjuste16Eje").val($("#txtRefraccionEje").val());
	$("#txtAjuste15Eje").val($("#txtRefraccionEje").val());
}
function promedioQueratometrias(){
	$("#txtPromedioQueratometrias").val((parseFloat($("#txtQueratometriaOD").val()) + parseFloat($("#txtQueratometriaOI").val()))/2);
}