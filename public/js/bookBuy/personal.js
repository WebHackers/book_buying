
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
			'/personal/delete',
			{
				kind: kind
			},
			function(data, stauts) {
				if(data=='removed') {
					$('#li_'+kind).animate({
						top:'-50px',
						opacity:'0'
					},
					500,
					function() {
						$(this).remove();
					});
				}
			}
		);
	});
});