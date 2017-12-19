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
    $('.clock').TimeCircles().rebuild()
  });
});

$(function() {

  $(window).resize(function() {
    var h = $(window).height();
    var w = $(window).width();
    $('#particles').width(w).height(h);
  }).resize();

  //particlesJS.load('particles', '/js/particlesjs-config.json', function() { });

  $.get('/raised.txt?_='  + new Date().getTime(), function(value) {

    var cap = 1600,
        capUSD = 800
        raised = parseFloat(value),
        width = $('.progress').width()*(raised/cap),
        lang = $('html').attr('lang'),
        txt = (lang === 'ru')
          ? 'Собрано: ' + raised + ' ETH | План: $' + capUSD +'k'
          : 'Raised: ' + raised + ' ETH | Cap: $' + capUSD +'k';

    $('.progress-bar').animate({ width: width}, 1500);
    $('#progress-caption').text(txt).animate({opacity: 1}, 3000);
  })

});
