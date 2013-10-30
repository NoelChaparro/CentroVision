$(document).on("ready",inicio);

function inicio(){ //Inicio del documento
	activarMenu();
	tablaBusquedaPacientesModal();
	$("#btnBuscarPaciente").on("click",buscarPaciente);
    $("#btnBuscarPacienteModal").on("click",limpiarBuscarPacienteModal);
    setInterval(function(){horaActual()},1000);
    fechaActual();
}

var fechaActual = function () { //Funcion que obtiene la fecha actual y la pasa a la caja de texto fecha
    var now = new Date();
    var mes = now.getMonth() + 1;
    if (mes<10){
        var mes = "0" + mes;
    }
    $("#fecha").val(now.getDate()+'/'+mes+'/'+now.getFullYear());
}

var horaActual = function () { //Funcion que obtiene la hora actual del sistema
    var now = new Date();
    var time=now.toLocaleTimeString();
    $("#horaconsulta").val(time);
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

function buscarPacienteConId(idPaciente){ //Funcion que toma el id del paciente seleccionado en la tabla de la busqueda y carga los datos en los controles del formulario
    limpiarFormularioBajaVision();
	$.ajax({
            data:  'idPaciente=' + idPaciente,
            url:   'buscarPacientePorId',
            type:  'post',
            success:  function (response) {
            	$.each(response.Paciente, function(i,elemento){
            		// Datos Generales del Paciente
            		$("#nombre").val(elemento.Nombre);
                    $("#varIdPaciente").val(elemento.IdPaciente);
                    $("#edad").val(elemento.Edad);
            	});
            }
    });
}

var limpiarFormularioBajaVision = function(){ // Funcion para limpiar el formulario Lentes de Contacto
	$('#nombre').val('');
    $("#varIdPaciente").val('');
    $(".frmBajaVision").each(function(){
        this.reset();
    });
    fechaActual();
}

function limpiarBuscarPacienteModal(){ //Funcion que limpia la ventana modal de buscar paciente
    $('.tblBusquedaPacientesModal tbody').html('');
    $("#txtBuscarPaciente").val('');
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

var activarMenu = function (){
	$(".menu_principal li:first-child").removeClass("active");
	$(".menu_principal li:eq(3)").addClass("active");
}