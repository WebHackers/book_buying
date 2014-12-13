
$(document).ready(function() {
	var li = [];
	var num = 0;
	$('.list-li').each(function(index) {
		li[index] = $(this);
	});
	$.extend({
		'add':function() {
			li[num].addClass("uk-animation-slide-bottom");
			num++;
			if(num==li.length) clearInterval(loop);
		}
	});
	var loop = setInterval('$.add()', 100);
		
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