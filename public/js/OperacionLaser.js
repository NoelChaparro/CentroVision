$(document).on("ready",inicio);

function inicio() //Inicio del documento
{
	activarMenu();
	fechaActual();
	$("#txtEdad").on({
	change:CalculoLasikOjoDerecho,
	keyup:CalculoLasikOjoDerecho
	});
	$("#txtHiper").on({
		change:CalculoLasikOjoDerecho,
		keyup:CalculoLasikOjoDerecho
	});
	$("#txtKH").on({
		change:CalculoLasikOjoDerecho,
		keyup:CalculoLasikOjoDerecho
	});
	$("#txtKV").on({
		change:CalculoLasikOjoDerecho,
		keyup:CalculoLasikOjoDerecho
	});
	$("#txtRefraccionEsfera").on({
		change:CalculoLasikOjoDerecho,
		keyup:CalculoLasikOjoDerecho
	});
	$("#txtRefraccionCilindro").on({
		change:CalculoLasikOjoDerecho,
		keyup:CalculoLasikOjoDerecho
	});
	$("#txtRefraccionEje").on({
		change:CalculoLasikOjoDerecho,
		keyup:CalculoLasikOjoDerecho
	});

	$("#txtEdadI").on({
	change:CalculoLasikOjoIzquierdo,
	keyup:CalculoLasikOjoIzquierdo
	});
	$("#txtHiperI").on({
		change:CalculoLasikOjoIzquierdo,
		keyup:CalculoLasikOjoIzquierdo
	});
	$("#txtKHI").on({
		change:CalculoLasikOjoIzquierdo,
		keyup:CalculoLasikOjoIzquierdo
	});
	$("#txtKVI").on({
		change:CalculoLasikOjoIzquierdo,
		keyup:CalculoLasikOjoIzquierdo
	});
	$("#txtRefraccionEsferaI").on({
		change:CalculoLasikOjoIzquierdo,
		keyup:CalculoLasikOjoIzquierdo
	});
	$("#txtRefraccionCilindroI").on({
		change:CalculoLasikOjoIzquierdo,
		keyup:CalculoLasikOjoIzquierdo
	});
	$("#txtRefraccionEjeI").on({
		change:CalculoLasikOjoIzquierdo,
		keyup:CalculoLasikOjoIzquierdo
	});
	$("#btnBuscarPaciente").on("click",buscarPaciente);
	tablaBusquedaPacientesModal();
	$("#btnCancelarOperacionLaser").on("click",limpiarFormularioOperacionLaser);
    //$("#btnGuardarOperacionLaser").on("click",guardarFormularioOperacionLaser);
    $("#btnImprimirOperacionLaser").on("click",imprimirOperacionLaser);   
}
function CalculoLasikOjoDerecho() // Funcion donde se calcula el ojo derecho
{
	var Edad = $("#txtEdad").val();
	var Hiper = parseFloat($("#txtHiper").val());  
	var KH = parseFloat($("#txtKH").val());
	var KV = parseFloat($("#txtKV").val());
	var Esfera = parseFloat($("#txtRefraccionEsfera").val());
	var Cilindro = parseFloat($("#txtRefraccionCilindro").val());
	var Eje = parseFloat($("#txtRefraccionEje").val());
	var B5 =2*(KH*KV)/(KH+KV);
	var F3 = F6+Cilindro;
	var F4 = F6*G6;
	var F5 = Esfera+Cilindro;
	var F6 = 0;
	var F7 = Esfera+(Cilindro/2);
	var G2 = 0;
	var G6 = 0;
	var G7 = 0;
	var G8 = 0;
	var G9 = 0;
	var G10 = 0;
	var H2 = Eje+90;
	var K1 = (Cilindro/(1-(0.012*Cilindro)));
	var L1 = K1+(K1*0.2)+0.001;
		
		if (Cilindro <= -4){
			F6=Esfera+(Math.abs(Cilindro)*0.15);
		}else{
			F6=Esfera;
		}
		
		if (H2 >= 180){
			G2=H2-180;
		}else{
			G2=H2;
		}
		
		if (F6<=0){
			G10=0.75;
		}

		if (F6>-4){
			G7 = 0.85;
			G8 = 0.80;
			G9 = 0.78;
			}else if(F6<=-4 && F6 >-8){
				G7 = 0.80;
				G8 = 0.78;
				G9 = 0.76;
				}else{
					G7 = 0.75;
					G8 = 0.76;
					G9 = 0.76;
				}

		if (Edad<40){
			G6=G7;
		}else if(Edad>39 && Edad < 50){
			G6=G8;
		}else if(Edad>49 && Edad < 60){
			G6=G9;
		}else{
			G6=G10;
		}
		
		var F4 = F6*G6;
		var J2 = 0;
		var J1 = ((F4/(1-(0.012*F4)))/3)+0.001;
		
		if (L1>=J1){
			J2=L1;
		}else if ((L1/2)>=J1){
			J2=L1/2;
		}else if ((L1/3)>=J1){
			J2=L1/3;
		}else if ((L1/4)>=J1){
			J2=L1/4;
		}
		
		var K4 = 0;
		var K5 = 0;
		var K6 = 0;
		
		if (F5<=2){
			K4=F5;
			K5=F5*1.1;
			K6=F5*1.17;
		}else if(F5>2 && F5<=4){
			K4=F5*1.1;
			k5=F5*1.18;
			K6=F5*1.23;
		}else{
			K4=F5*1.2;
			K5=F5*1.25;
			K6=F5*1.28;
		}

		var K3 = 0;
		var L3 = 0;
		var L4 = 0;
		if (Edad<30){
			K3=K4;
			L3=F6*0.86;
			L4=F6*0.96;
		}else if (Edad>29 && Edad<40){
			K3=K5;
			L3=F6*0.9;
			L4=F6*0.98;
		}else if (Edad>39 && Edad<50){
			K3=K6;
			L3=F6*0.99;
			L4=F6*0.99;
		}else{
			K3=F5*1.3;
			L3=F6*1.04;
			L4=F6;
		}
		var B6 = 0;
		if (B5>46){
			B6=1;
		}else if (B5>38 && B5<=43){
			B6=-1;
		}
		$("#txtAnillo").val(B6);

		var B7 = 0;
		var C7 = 0;
		if (F6<=0 && F6>-6 && Cilindro<=0){
			B7=F4;
			C7=Cilindro;
		}else if (F6<=-6){
			B7=J1;
			C7=J2;
		}else if (F6>0 && (Cilindro*-1)>=F6){
			B7=0;
			C7=F6;
		}else if ((F6>0) && ((Cilindro*-1)<F6) && (Hiper==1)){
			B7=K3;
			C7=Cilindro*-1;
		}else if ((F6>0) && ((Cilindro*-1)<F6) && (Hiper==2)){
			B7=L3;
			C7=Cilindro*-1;
		}else if ((F6>0) && ((Cilindro*-1)<F6) && (Hiper==3)){
			B7=L4;
			C7=Cilindro*-1;
		}
		$("#txtVal1").val(B7.toFixed(2));
		$("#txtVal2").val(C7.toFixed(2));

		var D7 = 0;
		if (B7<0 || B7==J1){
			D7=Eje;
		}else{
			D7=G2;
		}
		$("#txtVal3").val(D7.toFixed(2));

		var B8 = 0;
		if (B7==J1){
			B8=J1;
		}
		$("#txtVal4").val(B8.toFixed(2));
		$("#txtVal7").val(B8.toFixed(2));

		var C8 = 0;
		if (C7==F6){
			C8=F6+Cilindro;
		}else if ((C7==(L1/2)) || (C7==(L1/3)) || (C7==(L1/4)) ){
			C8=J2;
		}
		$("#txtVal5").val(C8.toFixed(2));

		var D8 = 0;
		if (C7==F6 || F6<=-6){
			D8=Eje;
		}
		$("#txtVal6").val(D8.toFixed(2));

		var C9 = 0;
		if ((C7==(L1/3)) || (C7==(L1/4))){
			C9=J2;
		}
		$("#txtVal8").val(C9.toFixed(2));

		var C10 = 0;
		if ((B7==(L1/4))){
			C10=J2;
		}
		$("#txtVal10").val(C10.toFixed(2));
		
		var D10 = 0;
		var D9 = 0;
		if (C9==J2){
			D10=Eje;
			D9=Eje;
		} 
		$("#txtVal9").val(D9.toFixed(2));
		$("#txtVal11").val(D10.toFixed(2));
}
function CalculoLasikOjoIzquierdo() // Funcion donde se calcula el ojo izquierdo
{
	var Edad = $("#txtEdadI").val();
	var Hiper = parseFloat($("#txtHiperI").val());  
	var KH = parseFloat($("#txtKHI").val());
	var KV = parseFloat($("#txtKVI").val());
	var Esfera = parseFloat($("#txtRefraccionEsferaI").val());
	var Cilindro = parseFloat($("#txtRefraccionCilindroI").val());
	var Eje = parseFloat($("#txtRefraccionEjeI").val());
	var B5 =2*(KH*KV)/(KH+KV);
	var F3 = F6+Cilindro;
	var F4 = F6*G6;
	var F5 = Esfera+Cilindro;
	var F6 = 0;
	var F7 = Esfera+(Cilindro/2);
	var G2 = 0;
	var G6 = 0;
	var G7 = 0;
	var G8 = 0;
	var G9 = 0;
	var G10 = 0;
	var H2 = Eje+90;
	var K1 = (Cilindro/(1-(0.012*Cilindro)));
	var L1 = K1+(K1*0.2)+0.001;
		
		if (Cilindro <= -4){
			F6=Esfera+(Math.abs(Cilindro)*0.15);
		}else{
			F6=Esfera;
		}
		
		if (H2 >= 180){
			G2=H2-180;
		}else{
			G2=H2;
		}
		
		if (F6<=0){
			G10=0.75;
		}

		if (F6>-4){
			G7 = 0.85;
			G8 = 0.80;
			G9 = 0.78;
			}else if(F6<=-4 && F6 >-8){
				G7 = 0.80;
				G8 = 0.78;
				G9 = 0.76;
				}else{
					G7 = 0.75;
					G8 = 0.76;
					G9 = 0.76;
				}

		if (Edad<40){
			G6=G7;
		}else if(Edad>39 && Edad < 50){
			G6=G8;
		}else if(Edad>49 && Edad < 60){
			G6=G9;
		}else{
			G6=G10;
		}
		
		var F4 = F6*G6;
		var J2 = 0;
		var J1 = ((F4/(1-(0.012*F4)))/3)+0.001;
		
		if (L1>=J1){
			J2=L1;
		}else if ((L1/2)>=J1){
			J2=L1/2;
		}else if ((L1/3)>=J1){
			J2=L1/3;
		}else if ((L1/4)>=J1){
			J2=L1/4;
		}
		
		var K4 = 0;
		var K5 = 0;
		var K6 = 0;
		
		if (F5<=2){
			K4=F5;
			K5=F5*1.1;
			K6=F5*1.17;
		}else if(F5>2 && F5<=4){
			K4=F5*1.1;
			k5=F5*1.18;
			K6=F5*1.23;
		}else{
			K4=F5*1.2;
			K5=F5*1.25;
			K6=F5*1.28;
		}

		var K3 = 0;
		var L3 = 0;
		var L4 = 0;
		if (Edad<30){
			K3=K4;
			L3=F6*0.86;
			L4=F6*0.96;
		}else if (Edad>29 && Edad<40){
			K3=K5;
			L3=F6*0.9;
			L4=F6*0.98;
		}else if (Edad>39 && Edad<50){
			K3=K6;
			L3=F6*0.99;
			L4=F6*0.99;
		}else{
			K3=F5*1.3;
			L3=F6*1.04;
			L4=F6;
		}
		var B6 = 0;
		if (B5>46){
			B6=1;
		}else if (B5>38 && B5<=43){
			B6=-1;
		}
		$("#txtAnilloI").val(B6);

		var B7 = 0;
		var C7 = 0;
		if (F6<=0 && F6>-6 && Cilindro<=0){
			B7=F4;
			C7=Cilindro;
		}else if (F6<=-6){
			B7=J1;
			C7=J2;
		}else if (F6>0 && (Cilindro*-1)>=F6){
			B7=0;
			C7=F6;
		}else if ((F6>0) && ((Cilindro*-1)<F6) && (Hiper==1)){
			B7=K3;
			C7=Cilindro*-1;
		}else if ((F6>0) && ((Cilindro*-1)<F6) && (Hiper==2)){
			B7=L3;
			C7=Cilindro*-1;
		}else if ((F6>0) && ((Cilindro*-1)<F6) && (Hiper==3)){
			B7=L4;
			C7=Cilindro*-1;
		}
		$("#txtVal1I").val(B7.toFixed(2));
		$("#txtVal2I").val(C7.toFixed(2));

		var D7 = 0;
		if (B7<0 || B7==J1){
			D7=Eje;
		}else{
			D7=G2;
		}
		$("#txtVal3I").val(D7.toFixed(2));

		var B8 = 0;
		if (B7==J1){
			B8=J1;
		}
		$("#txtVal4I").val(B8.toFixed(2));
		$("#txtVal7I").val(B8.toFixed(2));

		var C8 = 0;
		if (C7==F6){
			C8=F6+Cilindro;
		}else if ((C7==(L1/2)) || (C7==(L1/3)) || (C7==(L1/4)) ){
			C8=J2;
		}
		$("#txtVal5I").val(C8.toFixed(2));

		var D8 = 0;
		if (C7==F6 || F6<=-6){
			D8=Eje;
		}
		$("#txtVal6I").val(D8.toFixed(2));

		var C9 = 0;
		if ((C7==(L1/3)) || (C7==(L1/4))){
			C9=J2;
		}
		$("#txtVal8I").val(C9.toFixed(2));

		var C10 = 0;
		if ((B7==(L1/4))){
			C10=J2;
		}
		$("#txtVal10I").val(C10.toFixed(2));
		
		var D10 = 0;
		var D9 = 0;
		if (C9==J2){
			D10=Eje;
			D9=Eje;
		} 
		$("#txtVal9I").val(D9.toFixed(2));
		$("#txtVal11I").val(D10.toFixed(2));
}
function buscarPaciente(){ //Busca los pacientes segun criterio de busqueda y los muestra en una tabla
	var contenido = $('.tblBusquedaPacientesModal tbody');
    $.ajax({
            data:  'buscarPaciente=' + $('#txtBuscarPaciente').val(),
            url:   'buscarPaciente',
            type:  'post',
            beforeSend: function () {
            	contenido.html('Buscando...');
            },
            success:  function (response) {
            	contenido.html('');
            	$.each(response.Pacientes, function(i,elemento){
            		$('<tr><td>'+elemento.IdPaciente+'</td><td>'+elemento.Nombre+'</td><td>'+elemento.Domicilio+'</td><td>'+elemento.Telefono+'</td></tr>').appendTo(contenido);
            	});
            }
    });
    return false;
}
function tablaBusquedaPacientesModal(){ //Funcion que permite interactuar con la tabla de busqueda de los pacientes
    $('#mdlBuscarPaciente').on('shown', function(){
        $("#txtBuscarPaciente").focus();
    });
	$('.tblBusquedaPacientesModal tbody').on('mouseover', 'tr', function(event) { //Toma el evento mouseover en funcion live para que el tr seleccionado cambie de color al igual que el cursor
		$(this).parent().parent().removeClass("table-striped");
	    $(this).css({"color":"white","background-color":"#2E9FFC","cursor":"pointer"});
    });

    $('.tblBusquedaPacientesModal tbody').on('mouseout', 'tr', function(event) { // evento mouseout que elimina los estilos (background de todo el tr) y agrega el estilo sebra a la tabla
		$(this).parent().parent().addClass("table-striped");
        $(this).removeAttr("style");
    });

    $('.tblBusquedaPacientesModal tbody').on('click', 'tr', function(event) { // permite agregar a la tabla de personas principal el registro que se seleccione.              
		idPaciente = $(this).children('td')[0].innerText;
        buscarPacienteConId(idPaciente);
        $(".close").click();
    });
}
function buscarPacienteConId(idPaciente){ //Funcion que toma el id del paciente seleccionado en la tabla de la busqueda y carga los datos en los controles del formulario
	limpiarBuscarPacienteModal();
    var contenido = $('.tblBusquedaPacientesModal tbody');
	$.ajax({
            data:  'idPaciente=' + idPaciente,
            url:   'buscarPacientePorId',
            type:  'post',
            success:  function (response) {               
            	$.each(response.Paciente, function(i,elemento){
            		// Datos Generales del Paciente
            		$("#nombre").val(elemento.Nombre);
            		$("#txtEdad").val(elemento.Edad);
            		$("#btnGuardarOperacionLaser").attr("disabled",false);
            		$("#btnImprimirOperacionLaser").attr("disabled",false);//mientras que guarda
            	});
            }
    });
}
function limpiarBuscarPacienteModal(){ //Funcion que limpia la ventana modal de buscar paciente
    $('.tblBusquedaPacientesModal tbody').html('');
    $("#txtBuscarPaciente").val('');
}
var fechaActual = function () { //Funcion que obtiene la fecha actual y la pasa a la caja de texto fecha
    var now = new Date();
    var mes = now.getMonth() + 1;
    if (mes<10){
        var mes = "0" + mes;
    }
    $("#fecha").val(now.getDate()+'/'+mes+'/'+now.getFullYear());
}
var limpiarFormularioOperacionLaser = function(){ // Funcion para limpiar el formulario 
	$('#nombre').val('');
    $("#varIdPaciente").val('');
    $("#frmOperacionLaser").each(function(){
        this.reset();
    });
    fechaActual();
    $("#Edad").focus();
    $("#btnImprimirOperacionLaser").attr("disabled",true);
    $("#btnGuardarOperacionLaser").attr("disabled",true);
}
var imprimirOperacionLaser = function(){ //Funcion que permite mandar a imprimir la informacion del formulario 
    location.href= "imprimirOperacionLaser/"+$("#varIdPaciente").val();
}
var activarMenu = function (){
	$(".menu_principal li:first-child").removeClass("active");
	$(".menu_principal li:eq(1)").addClass("active");
}