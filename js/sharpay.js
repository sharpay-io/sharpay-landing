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

  particlesJS.load('particles', '/js/particlesjs-config.json', function() { });

});
