$(function() {
	
	
	var sections = $("section");
	var navigation_links = $("a");
	
	sections.waypoint({
		handler: function(event, direction) {
		
			var active_section;
			active_section = $(this);

			if (direction === "up") active_section = active_section.prev();
			var active_link = $('nav a[href="#' + active_section.attr("id") + '"]');
			navigation_links.removeClass("active");
			active_link.addClass("active");
		},
		offset: '25%'
	});
	
	
	navigation_links.click( function(event) {

		$.scrollTo(
			$(this).attr("href"),
			{
				duration: 400,
				offset: { 'left':0, 'top':-0.05*$(window).height() }
			}
		);
	});

		$(".sidebar-nav li").hover( 
			function(){
				if ($(this).children().hasClass("") ){
					$(this).children().children("i").removeClass("icon-white")
				}
			},
			function(){$(this).children().children("i").addClass("icon-white")
		});

});

