<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/jquery-2.2.0.min.js"><\/script>')</script>

<script src="/js/webflow.js"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

<script src="/js/TimeCircles.js"></script>
<!-- <script src="/js/slick.min.js"></script> -->

<!-- <script src="/js/particles.js"></script> -->

<script>
var Webflow = Webflow || [];
/*
Webflow.push(function() {
  $('.clock').TimeCircles({
    circle_bg_color: 'rgba(255,255,255,0.05)',
    fg_width: 0.05,
    bg_width: 1,
    time: {
      Days: { color: "#ff9a1e", text: "days" },
      Hours: { color: "#ff9a1e", text: "hours" },
      Minutes: { color: "#ff9a1e", text: "minutes" },
      Seconds: { color: "#ff9a1e", text: "sec" }
    }
  });
  Webflow.resize.on(function(){
    $('.clock').TimeCircles().rebuild();
  });
});
*/
$(function() {

  $(window).resize(function() {
    var h = $(window).height();
    var w = $(window).width();
    // $('#particles').width(w).height(h);
    $('.modal').width(w).height(h);
  }).resize();

	$('a[href="#signin"]').click(function(){
		$('#singin-modal').show();
		return false;
	});

	$('#singin-modal').click(function(){
		$('#singin-modal').hide();
	});

	$('.dialog').click(function(e) {
		e.stopPropagation();
	});
	
	$('.nl-lang').click(function(){
		var date = new Date(new Date().getTime() + 60*60*24 * 1000);
		document.cookie = "language=true; path=/; expires=" + date.toUTCString();
	});

  // VIDEO DIALOG

  $('#video').click(function() {

    var ratio = 0.5625,
        w = $(window).width()*0.75,
        h = w*ratio,
        isChina = $('html').attr('lang') === 'zh';

    var videoHtml = '<iframe width="' + w + '" height="' + h + '" src="https://www.youtube-nocookie.com/embed/dWIF3bsxbLI?autoplay=1&rel=0&controls=0&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';

    if (isChina) {
      videoHtml = '<iframe width="' + w + '" height="' + h + '" src="//rutube.ru/play/embed/10940174?autoStart=true" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe>';
    }

    $('#video-dialog').width(w).height(h).html(videoHtml);
    $('#video-modal').show();
    return false;
  });

  $('#video-modal').click(function() {
    $('#video-modal').hide();
    $('#video-dialog iframe').remove();
  });

  //particlesJS.load('particles', '/js/particlesjs-config.json', function() { });

	$.getJSON('/raised.json?t='  + new Date().getTime(), function( data ) {
		$('#contributors').text( data.contributors );
		
		var raised = data.raised;
		raised = parseInt( raised );
		$('.new-progress-grid').load('/images/chart/bar-grid.svg?v=4', function( data ){
			var shift = raised%500;
			var right = 125 * shift / 500 - 400;
			$('.new-progress-grid').css('right', right );
			var ti = Math.round(shift/500).toFixed() - 1;
			try {
				var tis = 3;
				$('.new-progress-grid #text text').eq( ti - 0 - tis ).text( ( Math.round(raised/500+1).toFixed() * 500  ) ).show();
				//$('.new-progress-grid #text text').eq( ti - 1 - tis ).text( ( Math.round(raised/500).toFixed() * 500  ) ).show();
				$('.new-progress-grid #text text').eq( ti - 2 - tis ).text( ( Math.round(raised/500-1).toFixed() * 500  ) ).show();
				$('.new-progress-grid #text text').eq( ti - 3 - tis ).text( ( Math.round(raised/500-2).toFixed() * 500  ) ).show();
				$('.new-progress-grid #text text').eq( ti - 4 - tis ).text( ( Math.round(raised/500-3).toFixed() * 500  ) ).show();
				$('.new-progress-grid #text text').eq( ti - 5 - tis ).text( ( Math.round(raised/500-4).toFixed() * 500  ) ).show();
			} catch ( e ) {  }
		});
		$('.new-progress-now').load('/images/chart/bar-cur.svg?v=4', function( data ){
			$('.new-progress-now text').text( raised + ' ETH' ).show( 500 );
		});
		$('.new-progress-bg').load('/images/chart/bar-bg.svg?v=1');
	});

	var glower = $('.chat-online');
	setInterval(function() {
		glower.animate({ opacity: 1 }, 1000,
			function(){
				glower.animate({ opacity: 0.3 }, 3000);
			});
	}, 4000);


  // MEDIA carousel
  // http://kenwheeler.github.io/slick/

  // $('#media-carousel').slick({
  //   dots: false,
  //   infinite: true,
  //   variableWidth: true,
  //   prevArrow: '<button type="button" class="slick-prev"><img src="/images/carousel/previous.svg?v=2" /></button>',
  //   nextArrow: '<button type="button" class="slick-next"><img src="/images/carousel/next.svg?v=2" /></button>'
  // }).show();

  Webflow.require('ix').init([
    {"slug":"bg-logo-init","name":"bg logo init","value":{"style":{"display":"none","opacity":0},"triggers":[]}},
    {"slug":"bg-logo-show","name":"bg logo show","value":{"style":{},"triggers":[{"type":"scroll","selector":".bg-logo-cont","stepsA":[{"opacity":0,"transition":"opacity 500ms ease 0"},{"display":"none"}],"stepsB":[{"display":"block"},{"opacity":1,"transition":"opacity 1000ms ease 0"}]}]}},
    {"slug":"tw-logo","name":"tw logo","value":{"style":{"x":"0px","y":"100%","z":"0px"},"triggers":[{"type":"load","loopA":true,"stepsA":[{"wait":"3000ms"},{"transition":"transform 500ms ease 0","x":"0px","y":"0px","z":"0px"},{"wait":"2500ms"},{"transition":"transform 500ms ease 0","x":"0px","y":"100%","z":"0px"},{"wait":"4000ms"}],"stepsB":[]}]}},
    {"slug":"fb-logo1","name":"fb logo1","value":{"style":{"x":"0px","y":"100%","z":"0px"},"triggers":[{"type":"load","loopA":true,"stepsA":[{"wait":"6500ms"},{"transition":"transform 500ms ease 0","x":"0px","y":"0px","z":"0px"},{"wait":"2500ms"},{"transition":"transform 500ms ease 0","x":"0px","y":"100%","z":"0px"},{"wait":"500ms"}],"stepsB":[]}]}},
    {"slug":"sb-logo","name":"sb logo","value":{"style":{"opacity":1},"triggers":[{"type":"load","loopA":true,"stepsA":[{"wait":"2500ms"},{"transition":"transform 500ms ease 0","x":"0px","y":"100%","z":"0px"},{"wait":"7000ms"},{"transition":"transform 500ms ease 0","x":"0px","y":"0px","z":"0px"}],"stepsB":[]}]}},
    {"slug":"sb-l-hover","name":"sb l hover","value":{"style":{},"triggers":[{"type":"hover","stepsA":[{"transition":"transform 500ms ease 0","scaleX":1.1,"scaleY":1.1,"scaleZ":1}],"stepsB":[{"transition":"transform 500ms ease 0","scaleX":1,"scaleY":1,"scaleZ":1}]}]}},
    {"slug":"l-init","name":"l init","value":{"style":{"opacity":0,"x":"-100px","y":"0px","z":"0px"},"triggers":[{"type":"scroll","offsetBot":"30%","stepsA":[{"opacity":1,"transition":"transform 500ms ease 0, opacity 500ms ease 0","x":"0px","y":"0px","z":"0px"}],"stepsB":[]}]}},
    {"slug":"bot-init","name":"bot init","value":{"style":{"opacity":0,"x":"0px","y":"40px","z":"0px"},"triggers":[{"type":"load","offsetBot":"30%","stepsA":[{"opacity":1,"transition":"transform 500ms ease 0, opacity 500ms ease 0","x":"0px","y":"0px","z":"0px"}],"stepsB":[]}]}},
    {"slug":"r-init","name":"r init","value":{"style":{"opacity":0,"x":"100px","y":"0px","z":"0px"},"triggers":[{"type":"scroll","offsetBot":"30%","stepsA":[{"wait":"300ms"},{"opacity":1,"transition":"transform 500ms ease 0, opacity 500ms ease 0","x":"0px","y":"0px","z":"0px"}],"stepsB":[]}]}}
  ]);

});

</script>
