$(document).ready(function(){
	$(window).scroll(function(){
		var top = $(window).scrollTop();
		if(top > 50){
			$('.homepage-header').animate({backgroundColor:'#ffffff'}, 'slow');
		}
	});
});