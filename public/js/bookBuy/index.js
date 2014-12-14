
$(document).ready(function() {
	var li = [], num = 0, sum = 0, height = $(window).height();
	$('.list-li').each(function(index) {
		li[index] = $(this);
	});
	$.extend({
		'check':function() {
			var style = li[num].css('opacity');
			var dom = document.getElementById(li[num].attr('id'));
			var pos = dom.getBoundingClientRect();
			var posY = pos.bottom;
			if(style=='0'&&posY<height+50&&posY>100) {
				if(posY>height*0.5) li[num].css('top', '50px');
				else li[num].css('top', '-50px');
				li[num].animate({
					top: '0',
					opacity: '1'
				},
				500);
				num++;sum++;
				if(sum==li.length) return;
				if(num==li.length) num = 0;
				setTimeout('$.check()', 50);
			}
			else {
				num++;
				if(num==li.length) num = 0;
				setTimeout('$.check()', 50);
			}
		}
	});
	$.check();

	$('.list-btn').click(function() {
		var id = $(this).attr('id').split('_', 2)[1];
		$.post(
			'./favour',
			{
				id: id
			},
			function(data, status) {
				if($('#like_'+id).hasClass('uk-button-primary')) {
					$('#like_'+id).html('<i class="uk-icon-thumbs-o-up"></i> 已赞 '+data);
					$('#like_'+id).toggleClass('uk-button-primary');
				}
				else {
					$('#like_'+id).html('<i class="uk-icon-thumbs-o-up"></i> 赞 '+data);
					$('#like_'+id).toggleClass('uk-button-primary');
				}
			}
		);
	});
});