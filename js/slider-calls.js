	
	$(document).ready(function() {
	
	
		$('#slideshow').cycle({
			
		fx: 'fade',
			
		slideResize: true,
		containerResize: true,
		width: '100%',
		height: '100%',
		fit: 1,
		

		prev: '#prev-btn',
		next: '#next-btn'
	
			
		});
	
	});

	
	$(document).ready(function() {
	
	
		$('#gallery').cycle({
		
		timeout: 3000,
		speed: 1000,
			
		fx: 'scrollHorz',
		
		prev: '#gallery-prev',
		next: '#gallery-next',
		
		easing: 'easeInOutCubic'
	
			
		});
	
	});
