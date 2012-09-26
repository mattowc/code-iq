jQuery(document).ready(function($) {
	$shipaddress = $('.shipping_address');
	$ship_status = $('#shiptobilling-checkbox');

	if($('#shiptobilling-checkbox').is(':checked'))
	{
		$('.shipping_address').hide();
	}

	$('#shiptobilling-checkbox').click( function() {
		if($('#shiptobilling-checkbox').is(':checked'))
		{
			return $('.shipping_address').hide();
		}
		else
		{
			return $('.shipping_address').show();
		}
	});
});