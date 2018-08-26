$(function(){
	var code;
	var airdrop = 'https://app.sharpay.io/airdrop';
	
	$.ajaxSetup({ xhrFields: { withCredentials: true }, crossDomain: true });
	$.get(airdrop, function( data ) {
		if( data.message == 'OK' ) {
			code = data.code;
			$('form button').attr('disabled', false);
		} else {
			$('.messages').addClass('error').text('Network error. Please try again later.').show();
		}
	}, 'json').fail(function(){
		$('.messages').addClass('error').text('Network error. Please try again later.').show();
	});
	
	$(document).on('submit', 'form', function(){
		$('form button').attr('disabled', true);
		var address = $('input', this).val();
		if ( /^(0x)?[0-9a-f]{40}$/i.test( address ) ) 
		{
			$.ajaxSetup({ xhrFields: { withCredentials: true }, crossDomain: true });
			$.post(airdrop, {code: code, address: address}, function( data ){				
				if( data.code ) {
					code = data.code;
				}
				if( data.message == 'OK' ) {
					$('.messages').removeClass('error').addClass('ready').text('Your address has been successfully added.').show();
					$('input', 'form').val('');
				} else {
					$('.messages').removeClass('ready').addClass( ( /already/i.test(data.message) ? 'orange' : 'error' ) ).text( data.message ).show();
				}
				$('form button').attr('disabled', false);
			}, 'json').fail(function(){
				$('.messages').removeClass('ready').addClass('error').text('Network error. Please try again later.').show();
				$('form button').attr('disabled', false);
			});
		}
		else
		{
			$('.messages').removeClass('ready').addClass('error').text('Enter the correct ethereum address.').show();
			$('form button').attr('disabled', false);
		}
		
		return false;
	});
	
	$('#inputAddress').change(function () {
		var address = $(this).val().trim();
		$(this).removeClass('is-valid').removeClass('is-invalid');
		if( address != '' ) 
		{
			if ( /^(0x)?[0-9a-f]{40}$/i.test( address ) ) 
			{
				$.ajaxSetup({ xhrFields: { withCredentials: false }, crossDomain: true });
				$.getJSON('https://api.etherscan.io/api?module=account&action=tokenbalance&contractaddress=0x96b0bf939d9460095c15251f71fda11e41dcbddb&address=' + address + '&tag=latest', function(data){ 
					if( data.message == 'OK' )
					{
						if( data.result > 0 ) {
							$('#inputAddress').addClass('is-valid');
						} else {
							$('.messages').removeClass('ready').addClass('error').text('Your address does not have Sharpay tokens.').show();
							$('form button').attr('disabled', true);
						}
					}
				});
				$('.messages').hide();
				$('form button').attr('disabled', false);
			}
			else if( /(0x)?[0-9a-f]{40}/i.test( address ) )
			{
				var tmp = /(0x?[0-9a-f]{40})/i.exec( address )
				$(this).val( tmp[0] ).change();
			}
			else 
			{
				$('form button').attr('disabled', true);
				$(this).addClass('is-invalid');
				$('.messages').removeClass('ready').addClass('error').text('Enter the correct ethereum address.').show();
			}
		}
	});
});