$(function(){
	$(document).on('submit', 'form', function(){
		var address = $('input', this).val();
		
		return false;
	});
	
	$('#inputAddress').change(function () {
		var address = $(this).val().trim();
		$(this).removeClass('is-valid').removeClass('is-invalid');
		if( address != '' ) 
		{
			if ( /^(0x)?[0-9a-f]{40}$/i.test( address ) ) 
			{
				$.getJSON('https://api.etherscan.io/api?module=account&action=tokenbalance&contractaddress=0x96b0bf939d9460095c15251f71fda11e41dcbddb&address=' + address + '&tag=latest', function(data){ 
					if( data.message == 'OK' )
					{
						if( data.result > 0 ) {
							$('#inputAddress').addClass('is-valid');
						}
					}
				});
			}
			else 
			{
				$(this).addClass('is-invalid');
			}
		}
	});
});