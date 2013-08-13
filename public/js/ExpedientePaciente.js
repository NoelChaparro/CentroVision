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
        $.ajax({
                data:  '',
                url:   'buscarExpediente',
                type:  'post',
                beforeSend: function () {
                        alert("Procesando, espere por favor...");
                },
                success:  function (response) {
                        alert(response.Nombre[0].Domicilio);
                }
        });
}