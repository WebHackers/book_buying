$(document).ready(function() {

	if($('#pic_link').val()!='')
	{
		$('#photo').attr('src', $('#pic_link').val());
		$('#pic_board')	.css('visibility', 'visible');
	}
	$('#query').click(function() {
		var target = $('#target').val();
		if(target == '')
		{
			alert('Please input a target link');
		}
		else
		{
			$(this).html('爬虫爬呀爬～');
			$.post(
			'/recommend/query',
			{
				target: target
			},
			function(data, status) {//alert(data);
				if(data=='false'||data['book_name']==undefined)
				{
					alert('Target URL is wrong');
				}
				else
				{
					$('#photo')		.attr('src', data['book_pic']);
					$('#pic_board')	.css('visibility', 'visible');
					$('#name')		.val(data['book_name']);
					$('#author')	.val(data['book_author']);
					$('#time')		.val(data['book_publish']);
					$('#press')		.val(data['book_press']);
					$('#price')		.val(data['book_price']);
					$('#isbn')		.val(data['ISBN']);
					$('#buy_link')	.val(data['buy_link']);
					$('#pic_link')	.val(data['book_pic']);
					$('#info')		.val(data['book_info']);
					
				}
				$('#query').html('戳我自动填充~');
			});
		}
	});

});
