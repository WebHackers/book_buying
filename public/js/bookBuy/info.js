
$(document).ready(function() {
	var id = window.location.href.split('?')[1].split('=')[1];
	$('#like').click(function() {
		$.post(
			'./favour',
			{
				id: id
			},
			function(data, status) {
				if($('#like').hasClass('uk-button-primary')) {
					$('#like').html('<i class="uk-icon-thumbs-o-up"></i> 已赞 '+data);
					$('#like').toggleClass('uk-button-primary');
				}
				else {
					$('#like').html('<i class="uk-icon-thumbs-o-up"></i> 赞 '+data);
					$('#like').toggleClass('uk-button-primary');
				}
			}
		);
	});

	$('#link').click(function() {
		if($('#linkBoard').css('display')=='none') {
			$('#linkBoard').css('display', 'inline');
		}
		else {
			$('#linkBoard').css('display', 'none');
		}
	});

});