
$(document).ready(function() {
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