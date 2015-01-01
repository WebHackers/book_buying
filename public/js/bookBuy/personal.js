
$(document).ready(function() {
		
	$('.list-li').mouseover(function() {
		$(this).find('.list-close').css('visibility', 'visible');
	});
	$('.list-li').mouseout(function() {
		$(this).find('.list-close').css('visibility', 'hidden');
	});
	
});