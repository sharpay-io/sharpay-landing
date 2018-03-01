<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/jquery-2.2.0.min.js"><\/script>')</script>

<script src="/js/webflow.js"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

<script src="/js/TimeCircles.js"></script>
<script src="/js/slick.min.js"></script>

<!-- <script src="/js/particles.js"></script> -->

<script>
var Webflow = Webflow || [];

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

  // VIDEO DIALOG

  $('#video').click(function() {

    var ratio = 0.5625,
        w = $(window).width()*0.75,
        h = w*ratio,
        isChina = $('html').attr('lang') === 'zh';

    var videoHtml = '<iframe width="' + w + '" height="' + h + '" src="https://www.youtube.com/embed/dWIF3bsxbLI?autoplay=1&controls=0&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';

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

  $.get('/raised.txt?_='  + new Date().getTime(), function(value) {

    var cap = 1000,
        capUSD = 80
        raised = parseFloat(value),
        width = $('.progress').eq(1).width()*(raised/cap),
        //width = $('.progress').width(),
        lang = $('html').attr('lang'),
        txt = '<span class="cap"><?=L::head_progress?></span>';

    //$('.progress-bar').animate({ width: width}, 1500);
    $('.progress-caption').eq(0).append(txt);//.animate({opacity: 1}, 3000);

	if( $(window).width() <= 767 ) {
		width = width < 46 ? 46 : width;
	}

	$('.progress-bar').eq(1).animate({ width: width}, 1500);
	txt = '<span class="green-cap">+'+( cap )+' ETH</span>';
    $('.progress-caption').eq(1).append(txt).animate({opacity: 1}, 500);
  });
  
  // http://kenwheeler.github.io/slick/
  $('#media-carousel').slick({
    dots: false,
    infinite: true,
    variableWidth: true
    // slidesToShow: 3,
  });

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
