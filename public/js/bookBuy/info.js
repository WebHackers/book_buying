
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

	$('#showBoard , #close-icon').click(function() {
		if($('#board').css('display')=='none') {
			$('#board').css('display', 'inline');
			$('#board').animate({
		      opacity: '1',
		      top: '50px'
		    },250);
		}
		else {
			$('#board').animate({
		      opacity: '0',
		      top: '20px'
		    },
		    250,
		    function() {
				$('#board').css('display', 'none');
		    });
		}
	});

});