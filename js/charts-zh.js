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
    yAxis: { gridLineColor: '#666', labels: { enabled: false }, tickPositions: [0, 80, 180, 480, 980, 1500], min: 0, max: 1500, minorTicks: false, title: { text: 'Million tokens' }},
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
	tooltip: { formatter: function() {  return '<b>' + this.series.name + ': </b>' + this.y + ' million tokens'; }  },
    series: [
		{ name: '奖金 0%', data: [520] },
		{ name: '奖金 20%', data: [500] },
		{ name: '奖金 30%', data: [300] },
		{ name: '奖金 40%', data: [100] },
		{ name: '奖金 50%', data: [80] },
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
            { name: '37%', desc: '代币销售', y: 37 },
			{ name: '31%', desc: '为系统运行预留', y: 31 },
			{ name: '15%', desc: '团队奖金', y: 15 },
			{ name: '7%', desc: '早期投资者的奖金', y: 7 },
			{ name: '7%', desc: '顾问奖励', y: 7 },
			{ name: '3%', desc: '赏金计划', y: 3 }
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
			{ name: '33%', desc: '研发', y: 33 },
			{ name: '11%', desc: '工作人员', y: 11 },
			{ name: '39%', desc: '营销和销售', y: 39 },
			{ name: '4%', desc: '法律服务和专利费用', y: 4 },
			{ name: '9%', desc: '行政管理和技术费用', y: 9 },
			{ name: '4%', desc: '其他费用', y: 4 }
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
