$(function() {
      $('ul.hover-block li').hover(function(){
        $(this).find('.hover-content').animate({top:'0px'},{queue:false,duration:500});
      }, function(){
        $(this).find('.hover-content').animate({top:'125px'},{queue:false,duration:500});
      });
});