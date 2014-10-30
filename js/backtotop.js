$(document).ready(function() {

	$("a.upbtn").click(function() {

		$('html, body').animate({
		   scrollTop: $("#top-scrollpoint").offset().top}, 800, 'easeOutQuint');

		return false; 

	});

});
