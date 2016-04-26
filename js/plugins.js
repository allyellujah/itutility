//load in jQuery plugin dependencies (eg. flexslider, smoothScroll etc.) in this file
$('.slider.main-carousel').flickity({
	  // options
	  imagesLoaded: true,
	  wrapAround: true,
	  autoPlay: 6000,
	  pauseAutoPlayOnHover: false,
	  cellAlign: 'left',
	  contain: true,
	  draggable: false,
	  setGallerySize: false
	});

$('.testimonials .main-carousel').flickity({
	  // options
	  imagesLoaded: true,
	  wrapAround: true,
	  autoPlay: 10000,
	  pauseAutoPlayOnHover: false,
	  cellAlign: 'left',
	  contain: true,
	  draggable: false
	});