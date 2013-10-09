$(document).on("ready",inicio);

function inicio(){
	activarMenu();
	tablaBusquedaPacientesModal();
	$("#btnBuscarPaciente").on("click",buscarPaciente);
    $("#btnBuscarPacienteModal").on("click",limpiarBuscarPacienteModal);	
    $("#btnGuardarLenteContacto").on("click",guardarFormularioLenteContacto);
}

var guardarFormularioLenteContacto = function(){ //Funcion que permite guardar el historial de los lentes de contacto
    var formularioLentesContacto = $(".frmLentesContacto");
    $.ajax({
        type: formularioLentesContacto.attr('method'),
        url: formularioLentesContacto.attr('action'),
        data: formularioLentesContacto.serialize(),
        success: function(data){
            alertify.success('Datos guardados correctamente');
        },
        error: function(errors){
            alertify.error('Error al guardar los datos');
        }
    });
    return false;
}

var activarMenu = function (){ //Funcion que activa el menu de la navegacion
	$(".menu_principal li:first-child").removeClass("active");
	$(".menu_principal li:eq(2)").addClass("active");
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

function limpiarBuscarPacienteModal(){ //Funcion que limpia la ventana modal de buscar paciente
    $('.tblBusquedaPacientesModal tbody').html('');
    $("#txtBuscarPaciente").val('');
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
    limpiarFormularioLentesContacto();
	$.ajax({
            data:  'idPaciente=' + idPaciente,
            url:   'buscarPacientePorId',
            type:  'post',
            success:  function (response) {
            	$.each(response.Paciente, function(i,elemento){
            		// Datos Generales del Paciente
            		$("#nombre").val(elemento.Nombre);
                    $("#varIdPaciente").val(elemento.IdPaciente);
                    buscarHistorialLentesContacto($("#varIdPaciente").val());
            	});
            }
    });
}

var limpiarFormularioLentesContacto = function(){ // Funcion para limpiar el formulario Lentes de Contacto
	$('#nombre').val('');
}

var buscarHistorialLentesContacto = function(idPaciente){
    var contenido = $('#historialLentesContacto');
    var meses = ['','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
    $.ajax({
            data:  'idPaciente=' + idPaciente,
            url:   'buscarHistorialLentesContacto',
            type:  'post',
            success:  function (response) {
                contenido.html('');
                $.each(response.LentesContacto, function(i,elemento){
                    var fechaUltimaConsulta = new Date(elemento.created_at);
                    $('<span class="label label-success">Dia de Consulta: '+fechaUltimaConsulta.getDate()+' de '+meses[(fechaUltimaConsulta.getMonth() + 1 )]+' del '+fechaUltimaConsulta.getFullYear()+'</span>'+
                    '<table class="table">'+
                            '<thead>'+
                                '<tr>'+
                                    '<th colspan="5" style="text-align:center;">Queratometría</th>'+
                                    '<th colspan="3" style="text-align:center;">Refracción</th>'+
                                '</tr>'+
                                '<tr>'+
                                    '<th></th>'+
                                    '<th style="text-align:center;">Horizontal</th>'+
                                    '<th style="text-align:center;">Eje</th>'+
                                    '<th style="text-align:center;">Vertical</th>'+
                                    '<th style="text-align:center;">Eje</th>'+
                                    '<th style="text-align:center;">Sph</th>'+
                                    '<th style="text-align:center;">Cyl</th>'+
                                    '<th style="text-align:center;">Eje</th>'+
                                '</tr>'+
                            '</thead>'+
                            '<tbody>'+
                                '<tr>'+
                                    '<td>OD</td>'+
                                    '<td style="text-align:center;">'+elemento.QueratometriaHorizontalOD+'</td>'+
                                    '<td style="text-align:center;">'+elemento.QueratometriaHorizontalEjeOD+'</td>'+
                                    '<td style="text-align:center;">'+elemento.QueratometriaVerticalOD+'</td>'+
                                    '<td style="text-align:center;">'+elemento.QueratometriaVerticalEjeOD+'</td>'+
                                    '<td style="text-align:center;">'+elemento.RefraccionSphOD+'</td>'+
                                    '<td style="text-align:center;">'+elemento.RefraccionCylOD+'</td>'+
                                    '<td style="text-align:center;">'+elemento.RefraccionEjeOD+'</td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td>OS</td>'+
                                    '<td style="text-align:center;">'+elemento.QueratometriaHorizontalOI+'</td>'+
                                    '<td style="text-align:center;">'+elemento.QueratometriaHorizontalEjeOI+'</td>'+
                                    '<td style="text-align:center;">'+elemento.QueratometriaVerticalOI+'</td>'+
                                    '<td style="text-align:center;">'+elemento.QueratometriaVerticalEjeOI+'</td>'+
                                    '<td style="text-align:center;">'+elemento.RefraccionSphOI+'</td>'+
                                    '<td style="text-align:center;">'+elemento.RefraccionCylOI+'</td>'+
                                    '<td style="text-align:center;">'+elemento.RefraccionEjeOI+'</td>'+
                                '</tr>'+
                            '</tbody>'+
                        '</table>'+
                        '<table class="table">'+
                            '<thead>'+
                                '<tr>'+
                                    '<th style="text-align:center;">Material</th>'+
                                    '<th style="text-align:center;">Marca</th>'+
                                    '<th style="text-align:center;">Tipo</th>'+
                                    '<th style="text-align:center;">Color</th>'+
                                '</tr>'+
                            '</thead>'+
                            '<tbody>'+
                                '<tr>'+
                                    '<td style="text-align:center;">'+elemento.Material+'</td>'+
                                    '<td style="text-align:center;">'+elemento.Marca+'</td>'+
                                    '<td style="text-align:center;">'+elemento.Tipo+'</td>'+
                                    '<td style="text-align:center;">'+elemento.Color+'</td>'+
                                '</tr>'+
                            '</tbody>'+
                        '</table>'+
                        '<table class="table">'+
                            '<thead>'+
                                '<tr>'+
                                    '<th></th>'+
                                    '<th style="text-align:center;">CB</th>'+
                                    '<th style="text-align:center;">Diametro</th>'+
                                    '<th style="text-align:center;">CPP</th>'+
                                    '<th style="text-align:center;">Poder</th>'+
                                    '<th style="text-align:center;">SR</th>'+
                                    '<th style="text-align:center;">RX Final</th>'+
                                '</tr>'+
                            '</thead>'+
                            '<tbody>'+
                                '<tr>'+
                                    '<td>OD</td>'+
                                    '<td style="text-align:center;">'+elemento.CurvaBaseOD+'</td>'+
                                    '<td style="text-align:center;">'+elemento.DiametroOD+'</td>'+
                                    '<td style="text-align:center;">'+elemento.CPPOD+'</td>'+
                                    '<td style="text-align:center;">'+elemento.PoderOD+'</td>'+
                                    '<td style="text-align:center;">'+elemento.SROD+'</td>'+
                                    '<td style="text-align:center;">'+elemento.RxFinalOD+'</td>'+
                                '</tr>'+
                                '<tr>'+
                                    '<td>OS</td>'+
                                    '<td style="text-align:center;">'+elemento.CurvaBaseOI+'</td>'+
                                    '<td style="text-align:center;">'+elemento.DiametroOI+'</td>'+
                                    '<td style="text-align:center;">'+elemento.CPPOI+'</td>'+
                                    '<td style="text-align:center;">'+elemento.PoderOI+'</td>'+
                                    '<td style="text-align:center;">'+elemento.SROI+'</td>'+
                                    '<td style="text-align:center;">'+elemento.RxFinalOI+'</td>'+
                                '</tr>'+
                            '</tbody>'+
                        '</table>'+
                        '<div class="control-group">'+
                            '<label class="control-label">Observaciones:</label>'+
                            '<div class="controls">'+
                                '<textarea class="span10" cols="50" rows="10" disabled>'+elemento.Observaciones+'</textarea>'+
                            '</div>'+
                        '</div>').appendTo(contenido);
                });
            }
    });
}