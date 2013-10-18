(function () {
	var input = document.getElementById("images"),formdata = false;

	function showUploadedItem (source) {
  		var list = document.getElementById("image-list"),
	  		li   = document.createElement("li"),
	  		img  = document.createElement("img");
  		img.src = source;
  		li.appendChild(img);
		list.appendChild(li);
	}   

	if (window.FormData) {
  		formdata = new FormData();
  		document.getElementById("btn").style.display = "none";
	}
	
 	input.addEventListener("change", function (evt) {
 		document.getElementById("response").innerHTML = "Subiendo . . ."
 		var i = 0, len = this.files.length, img, reader, file;
		formdata = new FormData(); //Se inicializa la variable para que no repita las imagenes
		for ( ; i < len; i++ ) {
			file = this.files[i];
	
			if (!!file.type.match(/image.*/)) {
				if ( window.FileReader ) {
					reader = new FileReader();
					reader.onloadend = function (e) { 
						showUploadedItem(e.target.result, file.fileName);
					};
					reader.readAsDataURL(file);
				}
				if (formdata) {
					formdata.append("images[]", file);
					formdata.append("idPaciente", $("#varIdPaciente").val());
					formdata.append("imagenCatalogada",imagenCatalogada);
				}
			}	
		}
	
		if (formdata) {
			$.ajax({
				url: "subirImagenes",
				type: "POST",
				data: formdata,
				processData: false,
				contentType: false,
				success: function (res) {
					document.getElementById("response").innerHTML = res;
					verImagenes(imagenCatalogada); //Se corre la funcion para que cargue de nuevo las imagenes
				}
			});
		}
	}, false);
}());
