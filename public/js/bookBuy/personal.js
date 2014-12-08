
$(document).ready(function() {
	$('.list-li').mouseover(function() {
		$(this).find('.list-close').css('visibility', 'visible');
	});
	$('.list-li').mouseout(function() {
		$(this).find('.list-close').css('visibility', 'hidden');
	});
	$('button[id^="del"]').click(function() {
		var kind = $(this).attr('id').split('_')[1];
		$.post(
			'/personal/update',
			{
				kind: kind
			},
			function(data, stauts) {
				if(data=='removed') {
					$('#li_'+kind).animate({
						opacity:'0',
					},
					'slow',
					function() {
						$(this).remove();
					});
				}
			}
		);
	});
});