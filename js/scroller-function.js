
$(document).ready(function() {

	$("a.gototop").click(function() {

		$('html, body').animate({
		   scrollTop: $("#top-scrollpoint").offset().top}, 2200, 'easeOutQuint');

		return false; 

	});

});