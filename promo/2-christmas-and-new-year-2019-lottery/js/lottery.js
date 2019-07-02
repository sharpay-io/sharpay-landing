if( window.self !== window.top ) {
	try{ window.top.location.href = window.self.location.href; } catch( e ) { }
	document.getElementsByTagName('body')[0].parentNode.removeChild(document.getElementsByTagName('body')[0]);
}


$(function(){
	
	window.addEventListener('message', function(event) {
		if( event.data == "reload" ) {
			window.location.reload();
		}
	}, false);
	
	$.ajaxSetup({ xhrFields: { withCredentials: true }, crossDomain: true });
	
	var authUrl = 'https://app.sharpay.io/promo/auth';
	var actionUrl = 'https://app.sharpay.io/promo/newYear2019';
	var authUrlFrame = 'https://app.sharpay.io/auth?back=%2Fpromo%2Fback';
	
	function auth() {
		$.get(authUrl, function( data ) {
			if( data.ok ) {
				var menu = $('nav>li');
				for( var i = 0 ; i < (menu.length - 2); i++ ) {
					menu.eq(i).remove();
				}
				menu = $('nav>li');
				$('a', menu.eq(0)).html( data.user + ( data.balance > 0 ? '<span class="ml-2 badge badge-light">'+ data.balance +'</span>' : '' ) ).attr('href', 'https://app.sharpay.io/profile');
				action();
			} else {
				$('.join,.done,.loader').hide();
				$('.auth').show();
			}
		}, 'json').fail(function(){
			$('.messages').addClass('error').text('Network error. Please try again later.').show();
		});
	}
	
	function action() {
		$.get(actionUrl, function( data ) {
			if( data.ok ) {
				if( data.address && data.address.length > 0 ) {
					$('.registered-address').text( data.address );
					$('.auth,.join,.loader').hide();
					$('.done').show();
				} else {
					$('.auth,.done,.loader').hide();
					$('.join').show();
				}
			} else {
				$('.join,.done,.loader').hide();
				$('.auth').show();
			}		
		}, 'json').fail(function(){
			$('.messages').addClass('error').text('Network error. Please try again later.').show();
		});
	}
	
	
	$(document).on('click', '.auth button', function(){
		window.open(authUrlFrame, 'sharpay', 'toolbar=no,scrollbars=no,width=800,height=500'); 
		return false;
	});
	$(document).on('submit', 'form', function(){
		var thisForm = $(this);
		$('button', thisForm).attr('disabled', true);
		var address = $('input', this).val();
		if ( /^(0x)?[0-9a-f]{40}$/i.test( address ) ) 
		{
			$.post(actionUrl, {address: address}, function( data ){				
				if( data.ok ) {
					$('.messages', thisForm).removeClass('error').addClass('ready').text('Your address has been successfully added.').show();
					$('input', thisForm).val('');
					setTimeout('document.location.reload();', 1000);
				} else {
					auth();
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
	
	
	var lang = 'en';
	try {
		lang = ( window.navigator.userLanguage || window.navigator.language ).substr(0,2).toLowerCase();
	} catch ( e ) {}

	if( document.location.hash == '#zh' || lang == 'zh' ) {
		$('body>.container').load('i18n/zh.html?r=' + (Math.floor(Math.random()*1000)), function(){ auth(); $('body>.container').fadeTo(500, 1); });
	} else if( document.location.hash == '#en' ) {
		$('body>.container').load('i18n/en.html?r=' + (Math.floor(Math.random()*1000)), function(){ auth(); $('body>.container').fadeTo(500, 1); });
	} else {
		auth();
		$('body>.container').fadeTo(500, 1);
	}
	
	$('#done-modal').modal('show');
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
	
	
	
	
});


