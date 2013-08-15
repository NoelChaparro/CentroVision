$(document).on("ready",inicio);

function inicio() 
{
	guardarFormularioExpediente();
	$("#btnBuscarPaciente").on("click",buscarPaciente);
}

function guardarFormularioExpediente(){
	var form = $('.frmExpedientePaciente');
	form.bind("submit",function(){
		$.ajax({
			type: form.attr('method'),
			url: form.attr('action'),
			data: form.serialize(),
			success: function(data){
				alertify.alert('Datos Guardados Correctamente');
			},
			error: function(errors){
				alertify.alert('Error al guardar');
			}
		});
		return false;
	});
}

function buscarPaciente(){
	var contenido = $('.tblBusquedaPacientesModal tbody');
    $.ajax({
            data:  'buscar=' + $('#txtBuscarPaciente').val(),
            url:   'buscarExpediente',
            type:  'post',
            beforeSend: function () {
            	contenido.html('Buscando...');
            },
            success:  function (response) {
            	contenido.html('');
            	$.each(response.Paciente, function(i,elemento){
            		$('<tr><td>'+elemento.IdPaciente+'</td><td>'+elemento.Nombre+'</td><td>'+elemento.Domicilio+'</td><td>'+elemento.Telefono+'</td></tr>').appendTo(contenido);
            	});
            }
    });
    return false;
}