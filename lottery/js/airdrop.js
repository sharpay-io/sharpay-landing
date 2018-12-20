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