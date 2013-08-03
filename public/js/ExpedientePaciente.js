$(document).on("ready",inicio);

function inicio() 
{
	guardarFormularioExpediente();
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