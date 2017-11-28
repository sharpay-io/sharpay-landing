/*
<script src="https://code.highcharts.com/highcharts.js"></script>
*/

Highcharts.theme = {
   colors: ['#517ff3', '#da4a39', '#f2b50e', '#009c59', '#ad44ba', '#10a9c0'],
   chart: { backgroundColor: null, style: { fontFamily: 'Verdana, sans-serif' } },
   title: {  style: { fontSize: '16px',  fontWeight: 'bold',  textTransform: 'uppercase' } },
   tooltip: { borderWidth: 0,  backgroundColor: 'rgba(219,219,216,0.8)', shadow: false  },
   legend: { itemStyle: {  fontWeight: 'bold', fontSize: '13px' } },
   xAxis: { gridLineWidth: 0, labels: { style: { fontSize: '12px' } }  },
   yAxis: { minorTickInterval: 'auto', title: { style: { textTransform: 'uppercase' } }, labels: { style: { fontSize: '12px' }  } },
   plotOptions: {  pie: { states: {
     hover: {
       halo: { size: 20 }
   }}}},
   background2: '#F0F0EA',
   credits: {
     enabled: false
   }
};
Highcharts.setOptions(Highcharts.theme);

var tokenChart = Highcharts.chart('tokenChart', {
	chart: { type: 'bar', height: 200, plotBackgroundColor: null, plotBorderWidth: 0, plotShadow: false },
    title: { enabled: false, text: '' },
    xAxis: { visible: false },
    yAxis: { gridLineColor: '#666', labels: { enabled: false }, tickPositions: [0, 80, 180, 480, 980, 1500], min: 0, max: 1500, minorTicks: false, title: { text: 'Миллионов токенов' }},
    legend: { enabled: true, reversed: true,
      itemStyle: {fontWeight: 'normal', fontSize: '14px', color: '#E0E0E3' },
      itemHoverStyle: {  color: '#FFF' },
      itemHiddenStyle: { color: '#606063' }//,
      //floating: true,
      //margin: 30
    },
    plotOptions: { series: { stacking: 'normal' }, bar: {
		dataLabels: {
      enabled: true,
      style: { fontWeight: 'bold', color: 'white', fontSize: '13px', }
    } }
	},
	tooltip: { formatter: function() {  return '<b>' + this.series.name + ': </b>' + this.y + ' миллионов токенов'; }  },
    series: [
		{ name: 'Бонус 0%', data: [520] },
		{ name: 'Бонус 20%', data: [500] },
		{ name: 'Бонус 30%', data: [300] },
		{ name: 'Бонус 40%', data: [100] },
		{ name: 'Бонус 50%', data: [80] },
	]
});


var emissionChart = Highcharts.chart('emissionChart', {
    chart: { margin: [0, 0, 0, 0], plotBackgroundColor: null, plotBorderWidth: 0, plotShadow: false },
    title: { text: '' },
    tooltip: { enabled: true, formatter: function() {  return this.point.desc + ': <b>' + this.y + '%</b>'; }  },
    plotOptions: { pie: { dataLabels: { enabled: true, distance: -30,  style: { fontWeight: 'bold', color: 'white', fontSize: '14px', } }, borderWidth: 0, startAngle: 0, endAngle: 0, shadow: false,  center: ['50%', '50%'] } },
    series: [{
        type: 'pie',
        name: 'Emission',
        colorByPoint: true,
        innerSize: '60%',
        data: [
            { name: '37%', desc: 'Свободная продажа', y: 37 },
			{ name: '31%', desc: 'Резерв системы', y: 31 },
			{ name: '15%', desc: 'Бонус команде', y: 15 },
			{ name: '7%', desc: 'Бонус инвесторам', y: 7 },
			{ name: '7%', desc: 'Вознаграждение эдвайзерам', y: 7 },
			{ name: '3%', desc: 'Баунти-программа', y: 3 }
        ]
    }]
});

var rashodChart = Highcharts.chart('rashodChart', {
    chart: { margin: [0, 0, 0, 0], plotBackgroundColor: null, plotBorderWidth: 0, plotShadow: false },
    title: { text: '' },
    tooltip: { enabled: true, formatter: function() {  return this.point.desc + ': <b>' + this.y + '%</b>'; }  },
    plotOptions: { pie: { dataLabels: { enabled: true, distance: -25,  style: { fontWeight: 'bold', color: 'white', fontSize: '12px', } }, borderWidth: 0, startAngle: 0, endAngle: 0, shadow: false,  center: ['50%', '50%'] } },
    series: [{
        type: 'pie',
        name: 'Расходы',
        colorByPoint: true,
        innerSize: '40%',
        data: [
			{ name: '33%', desc: 'Разработка', y: 33 },
			{ name: '11%', desc: 'Персонал', y: 11 },
			{ name: '39%', desc: 'Маркетинг', y: 39 },
			{ name: '4%', desc: 'Юридические услуги', y: 4 },
			{ name: '9%', desc: 'Административные', y: 9 },
			{ name: '4%', desc: 'Прочие', y: 4 }
        ]
    }]
});

$(function(){
	$(window).resize(function(){
		var w = $('#rashodChart').parent().width() * 0.84;
		rashodChart.setSize(w, w);
		w = $('#emissionChart').parent().width() - 40;
		emissionChart.setSize(w, w);
		w = $('#tokenChart').parent().width() * 1;
		tokenChart.setSize(w, 200);
	}).resize();
});
