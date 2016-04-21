var itunApp = {};

$(function(){

	console.log("It's working");
	itunApp.nav();

});

itunApp.nav = function() {
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();

		if (scroll >= 50) {
			$('header .filter').addClass('scrolling');
		} else if (scroll <= 50) {
			$('header .filter').removeClass('scrolling');
		}
	});
}