/*
 * Application
 */

$(window).load(function(e){
	$('.isotope').isotope({
	  // options
	  layoutMode: 'masonry',
	  columnWidth: 'one-third'
	});

	// layout Isotope after each image loads
	// $grid.imagesLoaded().progress( function() {
	// 	$grid.isotope('layout');
	// });
});
