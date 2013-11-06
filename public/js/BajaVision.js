$(document).on("ready",inicio);

function inicio(){ //Inicio del documento
	activarMenu();
	tablaBusquedaPacientesModal();
	$("#btnBuscarPaciente").on("click",buscarPaciente);
    $("#btnBuscarPacienteModal").on("click",limpiarBuscarPacienteModal);
    setInterval(function(){horaActual()},1000);
    fechaActual();
    $("#btnCancelarBajaVision").on("click",limpiarFormularioBajaVision);
    $("#btnGuardarBajaVision").on("click",guardarFormularioBajaVision);
    $("#btnImprimirBajaVision").on("click",imprimirBajaVision);
}

var imprimirBajaVision = function(){ //Funcion que permite mandar a imprimir la informacion del formulario baja vision
    location.href= "imprimirBajaVision/"+$("#varIdPaciente").val();
}

var guardarFormularioBajaVision = function(){ //Funcion que permite guardar el historial de los lentes de contacto
    if (pasarComprobaciones()){
        var formularioBajaVision = $(".frmBajaVision");
        $.ajax({
            type: formularioBajaVision.attr('method'),
            url: formularioBajaVision.attr('action'),
            data: formularioBajaVision.serialize(),
            success: function(data){
                alertify.success('Datos guardados correctamente');
                //limpiarFormularioBajaVision();
                $("#btnImprimirBajaVision").attr("disabled",false);
                $("#btnGuardarBajaVision").attr("disabled",true);
            },
            error: function(errors){
                alertify.error('Error al guardar los datos');
            }
        });
    }else{
        alertify.alert("No se ha especificado el paciente");
    }
    return false;
}

var pasarComprobaciones = function(){ //Funcion que permite verifica que se encuentre el idPaciente para poder guardar
    if ($("#varIdPaciente").val()!=''){
        return true;
    }
    return false;
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

                    // Padecimiento Paciente
                    if(response.Padecimiento[0]){
                        $("#antecedentes").val(response.Padecimiento[0].Antecedentes);
                    }

                    // Agudeza Visual
                    if (response.AgudezaVisual[0]){
                        $("#AVSCOD").val(response.AgudezaVisual[0].AVSCOD);
                        $("#CCD").val(response.AgudezaVisual[0].CCD);
                        $("#PuntoD").val(response.AgudezaVisual[0].PuntoD);
                        $("#AVSCOI").val(response.AgudezaVisual[0].AVSCOI);
                        $("#CCI").val(response.AgudezaVisual[0].CCI);
                        $("#PuntoI").val(response.AgudezaVisual[0].PuntoI);
                        $("#PIOD").val(response.AgudezaVisual[0].MmhgD);
                        $("#PIOI").val(response.AgudezaVisual[0].MmhgI);
                    }

                    // Refraccion
                    if(response.Refraccion[0]){
                        $("#RefraccionSphOD").val(response.Refraccion[0].RefraccionSphOD);
                        $("#RefraccionCylOD").val(response.Refraccion[0].RefraccionCylOD);
                        $("#RefraccionEjeOD").val(response.Refraccion[0].RefraccionEjeOD);
                        $("#RefraccionAddOD").val(response.Refraccion[0].RefraccionAddOD);
                        $("#RefraccionBifocalOD").val(response.Refraccion[0].RefraccionBifocalOD);
                        $("#RefraccionAVOD").val(response.Refraccion[0].RefraccionAVOD);
                        $("#RefraccionSphOI").val(response.Refraccion[0].RefraccionSphOI);
                        $("#RefraccionCylOI").val(response.Refraccion[0].RefraccionCylOI);
                        $("#RefraccionEjeOI").val(response.Refraccion[0].RefraccionEjeOI);
                        $("#RefraccionAddOI").val(response.Refraccion[0].RefraccionAddOI);
                        $("#RefraccionBifocalOI").val(response.Refraccion[0].RefraccionBifocalOI);
                        $("#RefraccionAVOI").val(response.Refraccion[0].RefraccionAVOI);
                    }

                    // Biomicroscopia e Iris
                    if(response.Biomicroscopia[0]){
                        $("#lamparaHendiduraOD").val(response.Biomicroscopia[0].CCIPCD);
                        $("#lamparaHendiduraOI").val(response.Biomicroscopia[0].CCIPCI);
                    }

                    // Fondo y Retina
                    if(response.FondoRetina[0]){
                        $("#fondoOjoOD").val(response.FondoRetina[0].PMVRD);
                        $("#fondoOjoOI").val(response.FondoRetina[0].PMVRI);
                    }

                    // Baja Vision
                    if(response.BajaVision[0]){
                        $("#estudio").val(response.BajaVision[0].RequiereAlgunEstudio);
                        $("#medicamentos").val(response.BajaVision[0].RequiereTomarMedicamento);
                        $("#impresionDiagnostica").val(response.BajaVision[0].ImpresionDiagnostica);
                    }
                    $("#btnGuardarBajaVision").attr("disabled",false);
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
    $("#estudio").focus();
    $("#btnImprimirBajaVision").attr("disabled",true);
    $("#btnGuardarBajaVision").attr("disabled",true);
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
        $("#estudio").focus();
    });
}

var activarMenu = function (){
	$(".menu_principal li:first-child").removeClass("active");
	$(".menu_principal li:eq(3)").addClass("active");
}