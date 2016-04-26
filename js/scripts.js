var itunApp = itunApp || {};

$(function(){

	console.log("It's working");
	itunApp.hamburger();
});

itunApp.hamburger = function(){
	$('.hamburger').click(function(){
		if($(this).hasClass('active')) {
			$('.active').removeClass('active');
	    	} else {
	    		$(this).addClass('active');
	    		$('nav').addClass('active');
	    	}
	});
	$('nav ul li a').click(function(){
		$('.active').removeClass('active');
	});
    
}