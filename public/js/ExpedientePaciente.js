$(document).on("ready",inicio);

var txtConcentimientoCirugiaOcularExtraocular;
var txtConcentimientoMedicamentoIntravitreos;
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var f = new Date();
var imagenCatalogada = 0; //Variable para indicar de que tipo es la imagen si expediente digital = 2 o biomicroscopia = 1

function inicio() //Inicio del documento
{ 
    /* ------------- Menu Paciente ------------ */
    $("#menu_paciente").hover(
        function () {
            $("#tab").animate({right:"200px"},500);
            $("#tab2").animate({right:"0px"},500);
            
        },
        function () {
            $("#tab").animate({right:"0px"},500);
            $("#tab2").animate({right:"-200px"},500);
            
        }
    );
    /* ------------- Menu Paciente ------------ */
    $("#btnGuardarExpedientePaciente").on("click",guardarFormularioExpediente);
	$("#btnBuscarPaciente").on("click",buscarPaciente);
    $("#btnBuscarPacienteModal").on("click",limpiarBuscarPacienteModal);
    $("#btnCancelar").on("click",limpiarFormularioExpedientePaciente);
    $("#btnnuevo").on("click",limpiarFormularioExpedientePaciente);
    $("#btnImprimirResumenClinico").on("click",imprimirResumenClinico);
    $("#btnImprimirRecetaLentes").on("click",imprimirRecetaLentes);
    $("#btnImprimirConsentimientoCirugiaOcularExtraocular").on("click",imprimirConsentimientoCirugiaOcularExtraocular);
    $("#btnImprimirRecetaLentes").attr("disabled",true);
    $("#btnImprimirCertificado").attr("disabled",true);
    $("#BtnVerBiomicroscopia").on("click",function(){
        verImagenes(1);
    });
    $("#btnVerImagenesExpediente").on("click",function(){
        verImagenes(2);
    });
    $("#BtnImgBiomicroscopia").on("click",function(){
        mdlImagenes(1);
    });
    $("#btnImagenesExpediente").on("click",function(){
        mdlImagenes(2);
    });
	tablaBusquedaPacientesModal();

    $( "#btndg" ).click(function() {
      $("#nombre").focus();
    });
    $( "#btnpad" ).click(function() {
      $("#sintomatologia").focus();
    });
    $( "#btnav" ).click(function() {
      $("#AVSCOD").focus();
    });
    $( "#btnbio" ).click(function() {
      $("#CCIPCD").focus();
    });
    $( "#btnfyr" ).click(function() {
      $("#PMVRD").focus();
    });
    $( "#btngon" ).click(function() {
      $("#G1D").focus();
    });
    $( "#btnmov" ).click(function() {
      $("#M1D").focus();
    });
    $( "#btnref" ).click(function() {
      $("#ExoftalmometriaOD").focus();
    });
    $( "#btndia" ).click(function() {
      $("#AstigmatismoD").focus();
    });
    $( "#btntra" ).click(function() {
      CKEDITOR.instances['Tratamiento'].focus();
    });
    $( "#btnrec" ).click(function() {
      CKEDITOR.instances['Receta'].focus();
    });
    $( "#btnlen" ).click(function() {
      $("#SphOD").focus();
    });
    $( "#btncer" ).click(function() {
      $("#AnexosOculares").focus();
    });
    $( "#btnrc" ).click(function() {
        CKEDITOR.instances['ResumenClinico'].focus();
    });
    $( "#btnhos" ).click(function() {
        CKEDITOR.instances['Orden'].focus();
    });
    $( "#btncon" ).click(function() {
      CKEDITOR.instances['CirugiaOcularExtraocular'].focus();
    });
    $( "#btncami" ).click(function() {
      CKEDITOR.instances['ConsentimientoMedicamentosIntravitreos'].focus();
    });
    /* ---------- Fancybox ----------*/
    $('.fancybox').fancybox();
}

var mdlImagenes = function(imagenCatalogo){ //Funcion que permite definir el tipo de imagen a guardar en este caso Biomicroscopia
    $("#image-list").html(''); //Se limpian las imagenes donde se cargan en el modal
    $("#images").val('');
    imagenCatalogada = imagenCatalogo;
}

var verImagenes = function(imagenCatalogo){ //Funcion que permite cargar las imagenes de biomicroscopia del paciente
    if (imagenCatalogo==1){
        var contenedorImagenes = $('#imagenesBiomicroscopia');
    }
    if (imagenCatalogo==2){
        var contenedorImagenes = $('#imagenesExpediente');
    }
    $.ajax({
            data:  'idPaciente=' + $('#varIdPaciente').val()+'&imagenCatalogada='+imagenCatalogo,
            url:   'buscarImagenes',
            type:  'post',
            beforeSend: function () {
                contenedorImagenes.html('Buscando...');
            },
            success:  function (response) {
                contenedorImagenes.html('');
                $.each(response.ImagenesBiomicroscopia, function(i,elemento){
                    $('<a class="fancybox" href="imagenes/'+elemento.NombreImagen+'"><img src="imagenes/thumbs/'+elemento.NombreImagen+'" /></a><a class="btn-eliminar" onclick="eliminarImagen('+elemento.IdImagen+','+elemento.Tipo+');"><i class="icon-remove"></i></a>').appendTo(contenedorImagenes);
                });
            }
    });    
    return false;
}  
var eliminarImagen = function(idImagen,tipo){ // Funcion que recibe el id de la imagen para borrarla
    $.ajax({
            data:  'idImagen=' + idImagen,
            url:   'eliminarImagenes',
            type:  'post',
            beforeSend: function () {
            },
            success:  function (response) {
                verImagenes(tipo); //Se cargan nuevamente el contenedor
            }
    });    
    return false;
}

function imprimirConsentimientoCirugiaOcularExtraocular() { //Funcion para imrimir el consentimiento informado de cirugia ocular y extraocular
    if ($("#CirugiaOcularExtraocular").val() != '' && $("#varIdPaciente").val() != ''){
        location.href= "ConsentimientoCirugiaOcularExtraocular/"+$("#CirugiaOcularExtraocular").val();
    }else{
        alertify.log("No existe información para imprimir");
    }
    return false;
}

function imprimirRecetaLentes(){ //Funcion para mandar a imprimir la Receta de Lentes
    if ($("#varIdPaciente").val() != ''){
        location.href= "RecetaLentes/"+$("#varIdPaciente").val();
    }else{
        alertify.log("No existe información para imprimir");
    }
    return false;
}

function imprimirResumenClinico(){ //Funcion para mandar a imprimir el Resumen Clinico
    if ($("#varIdPaciente").val() != ''){
        location.href= "ResumenClinico/"+$("#varIdPaciente").val();
    }else{
        alertify.log("No existe información para imprimir");
    }
    return false;
}

function limpiarBuscarPacienteModal(){ //Funcion que limpia la ventana modal de buscar paciente
    $('.tblBusquedaPacientesModal tbody').html('');
    $("#txtBuscarPaciente").val('');
}

function limpiarFormularioExpedientePaciente(){ //Funcion que limpia el formulario del expediente paciente
    $(".frmExpedientePaciente").each(function(){
        this.reset();
    });
    $("#nombre").focus();
    $("#varIdPaciente").val("");
    CKEDITOR.instances['CirugiaOcularExtraocular'].setData('');
    CKEDITOR.instances['ConsentimientoMedicamentosIntravitreos'].setData('');
    CKEDITOR.instances['ResumenClinico'].setData('');
    CKEDITOR.instances['Orden'].setData('');
    CKEDITOR.instances['Receta'].setData('');
    CKEDITOR.instances['Tratamiento'].setData('');
    $("#btnImprimirRecetaLentes").attr("disabled",true);
    $("#btnImprimirCertificado").attr("disabled",true);
    // Se deshabilitan los botones de las imagenes
    $("#BtnImgBiomicroscopia").attr("disabled",true);
    $("#BtnVerBiomicroscopia").attr("disabled",true);
    $("#btnImagenesExpediente").attr("disabled",true);
    $("#btnVerImagenesExpediente").attr("disabled",true);
    // Limpiar los contenedores de las imagenes
    $('#imagenesExpediente').html('');
    $('#imagenesBiomicroscopia').html('');
    //Datos de la ultima consulta
    $('#datosUltimaConsulta').html('');
}

function guardarFormularioExpediente(){ //Funcion que toma los datos del formulario frmExpedientePaciente para posteriormente guardarlos
    if (validarFormularioExpedientePaciente()){
        //Se iguala la informacion de los ckeditor al val del text area
        $("#ResumenClinico").val(CKEDITOR.instances['ResumenClinico'].getData());
        $("#Orden").val(CKEDITOR.instances['Orden'].getData());
        $("#Receta").val(CKEDITOR.instances['Receta'].getData());
        $("#Tratamiento").val(CKEDITOR.instances['Tratamiento'].getData());
    	var form = $('.frmExpedientePaciente');
    	//form.bind("submit",function(){
    		$.ajax({
    			type: form.attr('method'),
    			url: form.attr('action'),
    			data: form.serialize(),
                beforeSend: function () {
                    $("#btnGuardarExpedientePaciente").attr("disabled",true); //se deshabilita el boton guardar porque el formulario contiene mucha informacion y evita que lo presionen varias veces
                },
    			success: function(data){
                    $("#btnGuardarExpedientePaciente").attr("disabled",false);
    				alertify.success('Datos Guardados Correctamente');
                    limpiarFormularioExpedientePaciente();
    			},
    			error: function(errors){
    				alertify.error('Error al guardar');
    			}
    		});
            
    	//});
    }
    return false;
}

function validarFormularioExpedientePaciente(){ //Funcion que valida campos vacios del expediente del paciente
    if($("#nombre").val() == '' || $("#domicilio").val() == '' || $("#date01").val() == ''){
        alertify.log("Es necesario especificar el Nombre, Domicilio y Fecha de Nacimiento del Paciente");
        return false;
    }
    return true;
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
    limpiarFormularioExpedientePaciente();
    var contenido = $('.tblBusquedaPacientesModal tbody');
    var contenidoUltimaConsulta = $('#datosUltimaConsulta').html('');
    var meses = ['','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
	$.ajax({
            data:  'idPaciente=' + idPaciente,
            url:   'buscarPacientePorId',
            type:  'post',
            beforeSend: function () {
            	contenido.html('Buscando...');
            },
            success:  function (response) {
                //Se habilitan los botones de las imagenes
                $("#BtnImgBiomicroscopia").attr("disabled",false);
                $("#BtnVerBiomicroscopia").attr("disabled",false);
                $("#btnImagenesExpediente").attr("disabled",false);
                $("#btnVerImagenesExpediente").attr("disabled",false);                
            	$.each(response.Paciente, function(i,elemento){
            		// Datos Generales del Paciente
                    $("#varIdPaciente").val(idPaciente);
            		$("#nombre").val(elemento.Nombre);
            		$("#domicilio").val(elemento.Domicilio);
            		$("#colonia").val(elemento.Colonia);
            		$("#campo").val(elemento.Campo);
            		$("#ciudad").val(elemento.Ciudad);
            		/*$("#date01").val((elemento.FechaNacimiento).substr(8,2)+"/"+(elemento.FechaNacimiento).substr(5,2)+"/"+(elemento.FechaNacimiento).substr(0,4));*/
                    $("#edad").val(elemento.Edad);
            		if (elemento.Sexo == 'M'){
            			$('input:radio[name=Sexo]:nth(0)').prop('checked',true);
            		}else{
            			$('input:radio[name=Sexo]:nth(1)').prop('checked',true);
            		}
            		$("#ocupacion").val(elemento.Ocupacion);
            		$("#telefono").val(elemento.Telefono);
            		$("#referencia").val(elemento.Referencia);

                    // Datos Ultima Consulata
                    var fechaUltimaConsulta = new Date(elemento.updated_at);
                    $('<li><b>Nombre:<b></li><li>'+elemento.Nombre+'</li><li><b>Edad:<b></li><li>'+
                        elemento.Edad+'</li><li><b>Fecha de Ultima Visita:<b></li><li>'+fechaUltimaConsulta.getDate()+'/'+meses[(fechaUltimaConsulta.getMonth() + 1 )]+'/'+fechaUltimaConsulta.getFullYear()+'</li>').appendTo(contenidoUltimaConsulta);

            		// Padecimiento Paciente
                    if(response.Padecimiento[0]){
                		$("#sintomatologia").val(response.Padecimiento[0].Sintomatologia);
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
                        $("#MmhgD").val(response.AgudezaVisual[0].MmhgD);
                		$("#ParpadoD").val(response.AgudezaVisual[0].ParpadoD);
                		$("#MmhgI").val(response.AgudezaVisual[0].MmhgI);
                		$("#ParpadoI").val(response.AgudezaVisual[0].ParpadoD);
                    }

            		// Biomicroscopia e Iris
                    if(response.Biomicroscopia[0]){
                		$("#CCIPCD").val(response.Biomicroscopia[0].CCIPCD);
                		$("#BUTD").val(response.Biomicroscopia[0].BUTD);
                		$("#CCIPCI").val(response.Biomicroscopia[0].CCIPCI);
                		$("#BUTI").val(response.Biomicroscopia[0].BUTI);
                    }

            		// Fondo y Retina
                    if(response.FondoRetina[0]){
                		$("#PMVRD").val(response.FondoRetina[0].PMVRD);
                		$("#PMVRI").val(response.FondoRetina[0].PMVRI);
                    }

            		// Gonioscopia
                    if(response.Gonioscopia[0]){
                        $("#G1D").val(response.Gonioscopia[0].G1D);
                        $("#G2D").val(response.Gonioscopia[0].G2D);
                        $("#G3D").val(response.Gonioscopia[0].G3D);
                        $("#G4D").val(response.Gonioscopia[0].G4D);
                        $("#G1I").val(response.Gonioscopia[0].G1I);
                        $("#G2I").val(response.Gonioscopia[0].G2I);
                        $("#G3I").val(response.Gonioscopia[0].G3I);
                        $("#G4I").val(response.Gonioscopia[0].G4I);
                    }
            		
            		// Movilidad
                    if(response.Movilidad[0]){
                		$("#M1D").val(response.Movilidad[0].M1D);
                        $("#M2D").val(response.Movilidad[0].M2D);
                        $("#M3D").val(response.Movilidad[0].M3D);
                        $("#M4D").val(response.Movilidad[0].M4D);
                        $("#M5D").val(response.Movilidad[0].M5D);
                        $("#M6D").val(response.Movilidad[0].M6D);
                        $("#M1C").val(response.Movilidad[0].M1C);
                        $("#M2C").val(response.Movilidad[0].M2C);
                        $("#M3C").val(response.Movilidad[0].M3C);
                        $("#M1I").val(response.Movilidad[0].M1I);
                        $("#M2I").val(response.Movilidad[0].M2I);
                        $("#M3I").val(response.Movilidad[0].M3I);
                        $("#M4I").val(response.Movilidad[0].M4I);
                        $("#M5I").val(response.Movilidad[0].M5I);
                        $("#M6I").val(response.Movilidad[0].M6I);
                		$("#PPM").val(response.Movilidad[0].PPM);
                		$("#PMonocular").val(response.Movilidad[0].PMonocular);
                		$("#PAlterno").val(response.Movilidad[0].PAlterno);
                		$("#Ducciones").val(response.Movilidad[0].Ducciones);
                		$("#Versiones").val(response.Movilidad[0].Versiones);
                		$("#OjoFijador").val(response.Movilidad[0].OjoFijador);
                    }

            		// Refraccion
                    if(response.Refraccion[0]){
                		$("#ExoftalmometriaOD").val(response.Refraccion[0].ExoftalmometriaOD);
                		$("#ExoftalmometriaOI").val(response.Refraccion[0].ExoftalmometriaOI);
                		$("#ExoftalmometriaBase").val(response.Refraccion[0].ExoftalmometriaBase);
                		$("#PaquimetriaOD").val(response.Refraccion[0].PaquimetriaOD);
                		$("#PaquimetriaOI").val(response.Refraccion[0].PaquimetriaOI);
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
                		$("#EsquiascopiaSphOD").val(response.Refraccion[0].EsquiascopiaSphOD);
                		$("#EsquiascopiaCylOD").val(response.Refraccion[0].EsquiascopiaCylOD);
                		$("#EsquiascopiaEjeOD").val(response.Refraccion[0].EsquiascopiaEjeOD);
                        $("#EsquiascopiaAddOD").val(response.Refraccion[0].EsquiascopiaAddOD);
                		$("#EsquiascopiaBifocalOD").val(response.Refraccion[0].EsquiascopiaBifocalOD);
                		$("#EsquiascopiaAVOD").val(response.Refraccion[0].EsquiascopiaAVOD);
                		$("#EsquiascopiaSphOI").val(response.Refraccion[0].EsquiascopiaSphOI);
                		$("#EsquiascopiaCylOI").val(response.Refraccion[0].EsquiascopiaCylOI);
                		$("#EsquiascopiaEjeOI").val(response.Refraccion[0].EsquiascopiaEjeOI);
                        $("#EsquiascopiaAddOI").val(response.Refraccion[0].EsquiascopiaAddOI);
                		$("#EsquiascopiaBifocalOI").val(response.Refraccion[0].EsquiascopiaBifocalOI);
                		$("#EsquiascopiaAVOI").val(response.Refraccion[0].EsquiascopiaAVOI);
                		$("#QueratometriaOD").val(response.Refraccion[0].QueratometriaOD);
                		$("#QueratometriaOI").val(response.Refraccion[0].QueratometriaOI);
                    }

                    //Diagnostico
                    if (response.Diagnostico[0]){
                        if (response.Diagnostico[0].AstigmatismoD == 1){ $('input:checkbox[name="AstigmatismoD"]').prop('checked',true); }
                        if (response.Diagnostico[0].GlaucomaD == 1){ $('input:checkbox[name="GlaucomaD"]').prop('checked',true); }
                        if (response.Diagnostico[0].CataratasD == 1){ $('input:checkbox[name="CataratasD"]').prop('checked',true); }
                        if (response.Diagnostico[0].ConjuntivitisD == 1){ $('input:checkbox[name="ConjuntivitisD"]').prop('checked',true); }
                        if (response.Diagnostico[0].QueratitisD == 1){ $('input:checkbox[name="QueratitisD"]').prop('checked',true); }
                        if (response.Diagnostico[0].EstrabismoD == 1){ $('input:checkbox[name="EstrabismoD"]').prop('checked',true); }
                        if (response.Diagnostico[0].AstigmatismoI == 1){ $('input:checkbox[name="AstigmatismoI"]').prop('checked',true); }
                        if (response.Diagnostico[0].GlaucomaI == 1){ $('input:checkbox[name="GlaucomaI"]').prop('checked',true); }
                        if (response.Diagnostico[0].CataratasI == 1){ $('input:checkbox[name="CataratasI"]').prop('checked',true); }
                        if (response.Diagnostico[0].ConjuntivitisI == 1){ $('input:checkbox[name="ConjuntivitisI"]').prop('checked',true); }
                        if (response.Diagnostico[0].QueratitisI == 1){ $('input:checkbox[name="QueratitisI"]').prop('checked',true); }
                        if (response.Diagnostico[0].EstrabismoI == 1){ $('input:checkbox[name="EstrabismoI"]').prop('checked',true); }
                        $("#Diagnostico").val(response.Diagnostico[0].Diagnostico);
                    }

                    //Tratamiento
                    if(response.Tratamiento[0]){
                        CKEDITOR.instances['Tratamiento'].setData(response.Tratamiento[0].Tratamiento);
                    }

                    //Receta
                    if(response.Receta[0]){
                        CKEDITOR.instances['Receta'].setData(response.Receta[0].Receta);
                        $("#btnImprimirCertificado").attr("disabled",false);
                    }

                    //Lentes
                    if(response.Lentes[0]){
                        $("#SphOD").val(response.Lentes[0].SphOD);
                        $("#CylOD").val(response.Lentes[0].CylOD);
                        $("#EjeOD").val(response.Lentes[0].EjeOD);
                        $("#DIOD").val(response.Lentes[0].DIOD);
                        $("#PrismaOD").val(response.Lentes[0].PrismaOD);
                        $("#BaseOD").val(response.Lentes[0].BaseOD);
                        $("#SphOI").val(response.Lentes[0].SphOI);
                        $("#CylOI").val(response.Lentes[0].CylOI);
                        $("#EjeOI").val(response.Lentes[0].EjeOI);
                        $("#DIOI").val(response.Lentes[0].DIOI);
                        $("#PrismaOI").val(response.Lentes[0].PrismaOI);
                        $("#BaseOI").val(response.Lentes[0].BaseOI);                    
                        $("#Add").val(response.Lentes[0].Add);
                        $("#AO").val(response.Lentes[0].AO);
                        $("#Color").val(response.Lentes[0].Color);
                        $("#Bifocal").val(response.Lentes[0].Bifocal);
                        if (response.Lentes[0].Cristal == 1){ $('input:checkbox[name="Cristal"]').prop('checked',true); }
                        if (response.Lentes[0].CR39 == 1){ $('input:checkbox[name="CR39"]').prop('checked',true); }
                        $("#ObservacionesLentes").val(response.Lentes[0].Observaciones);
                        $("#btnImprimirRecetaLentes").attr("disabled",false);
                    }

                    //Certificado
                    if(response.Certificado[0]){
                        $("#AnexosOculares").val(response.Certificado[0].AnexosOculares);
                        $("#SegmentoAnterior").val(response.Certificado[0].SegmentoAnterior);
                        $("#FondoOjo").val(response.Certificado[0].FondoOjo);
                        $("#PercepcionCromatica").val(response.Certificado[0].PercepcionCromatica);
                        $("#DiagnosticoCertificado").val(response.Certificado[0].Diagnostico);
                        $("#TratamientoCertificado").val(response.Certificado[0].Tratamiento);
                    }

                    //Resumen Clinico
                    if(response.ResumenClinico[0]){
                        CKEDITOR.instances['ResumenClinico'].setData(response.ResumenClinico[0].ResumenClinico+"<p style='text-align: center;'>_____________________________________________</p><p style='text-align: center;'>"+elemento.Nombre+"</p>");
                    }

                    //Hospitalización
                    if(response.Hospitalizacion[0]){
                        CKEDITOR.instances['Orden'].setData(response.Hospitalizacion[0].Orden);
                    }

                    //Consentimiento Cirugia Ocular/Extraocular
                    CKEDITOR.instances['CirugiaOcularExtraocular'].setData("<p style='text-align: center;'><span style='font-size:12px;'><b>CONSENTIMIENTO INFORMADO DE CIRUGIA OCULAR Y EXTRAOCULAR</b></span></p><p style='text-align:justify;'><span style='font-size:12px;'><b>Paciente:</b> " + elemento.Nombre + " Autorizo al Cirujano Oftalmólogo Dr. Jesus Gerardo Contreras Herrera para que efectué las intervenciones quirúrjicas que sean necesarias para aliviar o curar mi padecimiento de: " + txtConcentimientoCirugiaOcularExtraocular+"</span></p>");

                    //Consentimiento Medicamentos Intravitreos
                    CKEDITOR.instances['ConsentimientoMedicamentosIntravitreos'].setData("<p style='text-align: center;'><b>CARTA DE CONSENTIMIENTO INFORMADO PARA APLICACIÓN DE MEDICAMENTOS INTRAVITREOS</b></p><p>Fecha: "+ f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear() +"</p><p>Responsable Legal del Paciente:</p><p>Nombre del Paciente: "+ elemento.Nombre  + txtConcentimientoMedicamentoIntravitreos);
            	});
            }
    });
}

txtConcentimientoCirugiaOcularExtraocular = "<p style='text-align:justify;'><span style='font-size:12px;'>1.- RIESGOS Y COMPLICACIONES: Se da la autorización bajo la comprensión de que cualquier operación o procedimiento implica riesgos y peligros que incluyen: infección ocular externa o interna (endoftalmitis) hemorragia expulsiva, perdida de vítreo, desprendimiento de retina o coroides, maculopatía, glaucoma y queratopatía, etc. Otras Incluyen:</span></p>";
txtConcentimientoCirugiaOcularExtraocular = txtConcentimientoCirugiaOcularExtraocular + "<p style='text-align:justify;'><span style='font-size:12px;'>2.- ANESTESIA: Existe la anestesia general y regional (local), la administración de anestésicos, también implica riesgos, el más importante aunque poco frecuente, es el riesgo de sufrir alguna reacción a los medicamentos usados en la anestesia general, que pueden causar la muerte, autorizo el uso de estos anestésicos por la persona responsable de este servicio en caso de que lo considere necesario. Anestesia Regional (local) retrobulbar tiene ventajas y desventajas, que incluyen complicaciones asociadas, estas pueden ser divididas en dos grupos: A) Relacionadas con el compromiso de la visión como son: daño al nervio óptico, oclusión de la arteria central de la retina, hemorragia retrobulbar, perforación ocular, émbolos a la circulación retiniana o coroidea. B) Relacionadas con el compromiso de la vida como son: Paro Cardiaco, Depresión Respiratoria, y Depresión del Sistema Nervioso.</span></p>";
txtConcentimientoCirugiaOcularExtraocular = txtConcentimientoCirugiaOcularExtraocular + "<p style='text-align:justify;'><span style='font-size:12px;'>3.- ESTOY enterado (a) de que no existe garantía o seguridad sobre los resultados del procedimiento quirúrgico de cirugía de catarata y que no pueda curar mi enfermedad.</span></p><p style='text-align:justify;'><span style='font-size:12px;'>4.- NADIE puede predecir cuales serán las complicaciones que ocurran en mi caso.</span></p>";
txtConcentimientoCirugiaOcularExtraocular = txtConcentimientoCirugiaOcularExtraocular + "<p style='text-align:justify;'><span style='font-size:12px;'>5.- EN OCASIONES es necesario realizar un segundo o tercer procedimiento quirúrgico dependiendo del diagnóstico prequirúrgico y complicaciones transquirúrgicas o postoperatorias, se da la autorización del procedimiento que mi Médico considere necesario en el momento de la operación.</span></p>";
txtConcentimientoCirugiaOcularExtraocular = txtConcentimientoCirugiaOcularExtraocular + "<p style='text-align:justify;'><span style='font-size:12px;'>CONSENTIMIENTO DE PACIENTE: Tengo que leer o que me lean y entender esta forma de consentimiento y NO DEBO FIRMARLA si todos los párrafos o todas mis dudas no han sido explicadas o contestadas a mi entera satisfacción o si no entiendo cualquier termino medico o palabra contenida en este documento. Si tiene cualquier duda de los riesgos o peligros de la cirugía o tratamiento propuesto, pregunte a su Cirujano (antes de firmar este documento). NO FIRME A MENOS QUE LE LEAN O EXPLIQUEN Y ENTIENDA ESTE CONSENTIMIENTO.</span></p>";
txtConcentimientoCirugiaOcularExtraocular = txtConcentimientoCirugiaOcularExtraocular + "<p style='text-align:center;'>__________________________________________ &nbsp;&nbsp;&nbsp; __________________________________________</p><p style='margin-left:105px;'><span style='font-size:9px;'>Paciente o Responsable Legal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Testigo</span></p>";
txtConcentimientoCirugiaOcularExtraocular = txtConcentimientoCirugiaOcularExtraocular + "<p style='text-align:justify;'><span style='font-size:12px;'>DECLARACION MEDICA: He explicado el contenido de éste documento al paciente, he respondido a todas sus preguntas al grado máximo de mi conocimiento, creo que el paciente ha sido informado adecuadamente y he aceptado operarlo.</span></p>";
txtConcentimientoCirugiaOcularExtraocular = txtConcentimientoCirugiaOcularExtraocular + "<p>__________________________________________</p><p style='margin-left:105px;'><span style='font-size:9px;'>Firma del Médico &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cd. Cuauhtémoc, Chih. a "+f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear()+"</span></p>";

txtConcentimientoMedicamentoIntravitreos = "<p style='text-align:justify;'>Autorizo al cirujano oftalmólogo Dr. J. Gerardo Contreras Herrera, para realizar la aplicación de medicamentos intraocular () en cavidad vítrea en el quirófano con las medidas de asepsia y antisepsia correspondientes con el fin de lograr el efecto terapéutico para mi patología de retina (macula) y/o vítreo.</p>";
txtConcentimientoMedicamentoIntravitreos = txtConcentimientoMedicamentoIntravitreos + "<p style='text-align:justify;'>1.- Riesgos Quirúrgicos. autorizo la aplicación, sabiendo previamente que cualquier procedimiento en los ojos lleva consigo la posibilidad de: infección intraocular secundaria (endoftalmitis), hemorragia, catarata, oclusiones vasculares, glaucoma secundario, desprendimiento de retina o coroides, maculopatia, toxicidad del medicamento, cualquiera de estas complicaciones puede causar disminución severa de la agudeza visual y/o puede causar ceguera; los procedimientos adicionales pueden ser necesarios para tratar estas complicaciones.</p>";
txtConcentimientoMedicamentoIntravitreos = txtConcentimientoMedicamentoIntravitreos + "<p style='text-align:justify;'>2.- Estoy consciente que no se puede predecir si existiría o no complicación alguna en el procedimiento que se me va a realizar.</p>";
txtConcentimientoMedicamentoIntravitreos = txtConcentimientoMedicamentoIntravitreos + "<p style='text-align:justify;'>3.- Esta hoja será firmada por el paciente solamente hasta que le sea explicada en forma satisfactoria su enfermedad ocular, el procedimiento que se le realizara y las posibles complicaciones potenciales, liberando de toda responsabilidad al cirujano oftalmólogo de cualquier evento que pudiera presentarse durante la aplicación o posterior a la misma.</p>";
txtConcentimientoMedicamentoIntravitreos = txtConcentimientoMedicamentoIntravitreos + "<p></p><p style='text-align:center;'>__________________________________________</p><p style='text-align:center;'>Nombre y Firma del Paciente</p>";