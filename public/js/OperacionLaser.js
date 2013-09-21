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