$(function(){
	
	$('#done-modal').modal('show');
	
	var code;
	var airdrop = 'https://app.sharpay.io/airdrop';
	
	var lang = 'en';
	try {
		lang = ( window.navigator.userLanguage || window.navigator.language ).substr(0,2).toLowerCase();
	} catch ( e ) {}

	if( document.location.hash == '#zh' || lang == 'zh' ) {
		$('body>.container').load('i18n/zh.html', function(){ $('body>.container').fadeTo(500, 1); });
	} else if( document.location.hash == '#en' ) {
		$('body>.container').load('i18n/en.html', function(){ $('body>.container').fadeTo(500, 1); });
	} else {
		$('body>.container').fadeTo(500, 1);
	}
	
	
	$(window).resize(function() {
		var h = $(window).height();
		var w = $(window).width();
		$('.modal').width(w).height(h);
	}).resize();
	
	$(document).on('click', 'a[href="#signin"]', function(){
		$('#singin-modal').show();
		return false;
	});
	$(document).on('click', '#singin-modal', function(){
		$('#singin-modal').hide();
	});
	$(document).on('click', '.dropdown-menu a', function(){
		document.location.reload();
	});
	
	$(document).on('submit', 'form', function(){
		return false;
		
		
		var thisForm = $(this);
		$('button', thisForm).attr('disabled', true);
		var address = $('input', this).val();
		if ( /^(0x)?[0-9a-f]{40}$/i.test( address ) ) 
		{
			$.ajaxSetup({ xhrFields: { withCredentials: true }, crossDomain: true });
			$.post(airdrop, {code: code, address: address}, function( data ){				
				if( data.code ) {
					code = data.code;
				}
				if( data.message == 'OK' ) {
					$('.messages', thisForm).removeClass('error').addClass('ready').text('Your address has been successfully added.').show();
					$('input', thisForm).val('');
				} else {
					$('.messages', thisForm).removeClass('ready').removeClass('error').addClass( ( /already/i.test(data.message) ? 'orange' : 'error' ) ).text( data.message ).show();
				}
				$('button', thisForm).attr('disabled', false);
			}, 'json').fail(function(){
				$('.messages', thisForm).removeClass('ready').addClass('error').text('Network error. Please try again later.').show();
				$('button', thisForm).attr('disabled', false);
			});
		}
		else
		{
			$('.messages', thisForm).removeClass('ready').addClass('error').text('Enter the correct ethereum address.').show();
			$('button', thisForm).attr('disabled', false);
		}
		
		return false;
	});
	
	$(document).on('change', '.inputAddress', function () {
		return false;
		
		var thisInput = $(this);
		var thisForm = $(this).parents('form').eq(0);
		var address = thisInput.val().trim();
		thisInput.removeClass('is-valid').removeClass('is-invalid');
		if( address != '' ) 
		{
			if ( /^(0x)?[0-9a-f]{40}$/i.test( address ) ) 
			{
				$.ajaxSetup({ xhrFields: { withCredentials: false }, crossDomain: true });
				$.getJSON('https://api.etherscan.io/api?module=account&action=tokenbalance&contractaddress=0x96b0bf939d9460095c15251f71fda11e41dcbddb&address=' + address + '&tag=latest', function(data){ 
					if( data.message == 'OK' )
					{
						if( data.result > 0 ) {
							thisInput.addClass('is-valid');
						} else {
							$('.messages', thisForm).removeClass('ready').addClass('error').text('Your address does not have Sharpay tokens.').show();
							$('button', thisForm).attr('disabled', true);
						}
					}
				});
				$('.messages', thisForm).hide();
				$('button', thisForm).attr('disabled', false);
			}
			else if( /(0x)?[0-9a-f]{40}/i.test( address ) )
			{
				var tmp = /(0x?[0-9a-f]{40})/i.exec( address );
				thisInput.val( tmp[0] ).change();
			}
			else 
			{
				$('button', thisForm).attr('disabled', true);
				thisInput.addClass('is-invalid');
				$('.messages', thisForm).removeClass('ready').addClass('error').text('Enter the correct ethereum address.').show();
			}
		}
	});
	
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
	
});