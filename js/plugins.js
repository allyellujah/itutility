//load in jQuery plugin dependencies (eg. flexslider, smoothScroll etc.) in this file
$('.main-carousel').flickity({
	  // options
	  imagesLoaded: true,
	  wrapAround: true,
	  autoPlay: 6000,
	  pauseAutoPlayOnHover: false,
	  cellAlign: 'left',
	  contain: true,
	  draggable: false
	});