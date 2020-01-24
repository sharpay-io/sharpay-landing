if( window.self !== window.top ) {
	try{ window.top.location.href = window.self.location.href; } catch( e ) { }
	document.getElementsByTagName('body')[0].parentNode.removeChild(document.getElementsByTagName('body')[0]);
}


var authUrl = 'https://app.sharpay.io/promo/auth';
var actionUrl = 'https://app.sharpay.io/promo/newYear2020';
var authUrlFrame = 'https://app.sharpay.io/auth?back=%2Fpromo%2Fback';

function auth() {
	$.ajaxSetup({ xhrFields: { withCredentials: true }, crossDomain: true });
	$.get(authUrl, function( data ) {
		if( data.ok ) {
			var menu = $('nav>li');
			for( var i = 0 ; i < (menu.length - 2); i++ ) {
				menu.eq(i).remove();
			}
			menu = $('nav>li');
			$('a', menu.eq(0)).html( ( $('<div/>').text(data.user).html() ) + ( data.balance > 0 ? '<span class="ml-2 badge badge-light">'+ data.balance +'</span>' : '' ) ).attr('href', 'https://app.sharpay.io/profile');
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
	$.ajaxSetup({ xhrFields: { withCredentials: true }, crossDomain: true });
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

$(function(){
	
	var lang = 'en';
	try {
		lang = ( window.navigator.userLanguage || window.navigator.language ).substr(0,2).toLowerCase();
	} catch ( e ) {}

	if( document.location.hash == '#zh' || lang == 'zh' ) {
		$('body>.container').load('i18n/zh.html?r=' + (Math.floor(Math.random()*1000)), function(){ 
			auth(); 
			$('body>.container').fadeTo(500, 1); 
			$('body').append('<script async src="https://app.sharpay.io/api/script.js"></script>');
		});
	} else if( document.location.hash == '#en' ) {
		$('body>.container').load('i18n/en.html?r=' + (Math.floor(Math.random()*1000)), function(){ 
			auth(); 
			$('body>.container').fadeTo(500, 1); 
			$('body').append('<script async src="https://app.sharpay.io/api/script.js"></script>');
		});
	} else {
		auth();
		$('body>.container').fadeTo(500, 1);
		$('body').append('<script async src="https://app.sharpay.io/api/script.js"></script>');
	}
	
	window.addEventListener('message', function(event) {
		if( event.data == "reload" ) {
			window.location.reload();
		}
	}, false);
	
	
	$(document).on('click', '.auth button', function(){
		window.open(authUrlFrame, 'sharpay', 'toolbar=no,scrollbars=no,width=800,height=500'); 
		return false;
	});
	
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
		document.location.hash = $(this).attr('href');
		document.location.reload();
	});
	
	
	
	
});


