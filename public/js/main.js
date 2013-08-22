/* ---------- Datapicker ---------- */
	$(".datepicker").datepicker({dateFormat: 'dd/mm/yy'});
	$('.datepicker').datepicker();

/*------------ Caja de botones flotante ---------*/
$(document).ready(function() {
        var posicion = $("#caja_flotante").offset();
        var margenSuperior = 15;
         $(window).scroll(function() {
             if ($(window).scrollTop() > posicion.top) {
                 $("#caja_flotante").stop().animate({
                     marginTop: $(window).scrollTop() - posicion.top + margenSuperior
                 });
             } else {
                 $("#caja_flotante").stop().animate({
                     marginTop: 0
                 });
             };
         });
});