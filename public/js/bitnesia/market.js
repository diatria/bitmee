var hostname = document.location.hostname;
var socket = io.connect(hostname+':3000');
function pecahan(lenght){
	if (lenght == '1') {
		return 'rb';
	} else if (lenght == '2') {
		return 'jt';
	} else if (lenght == '3') {
		return 'M';
	} else if (lenght == '4') {
		return 'T';
	}
}
var coinmarket = $('coinmarket').html();
$(document).ready(function(){
	socket.on('Bitcoin Data', function(msg){
		// Variable for color change line from html value
		var vlbtcidr = $('#btcidr').html().replace(/,/g, '');
		var vlbchidr = $('#bchidr').html().replace(/,/g, '');
		var vlbtgidr = $('#btgidr').html().replace(/,/g, '');
		var vlethidr = $('#ethidr').html().replace(/,/g, '');
		var vletcidr = $('#etcidr').html().replace(/,/g, '');
		var vlignisidr = $('#ignisidr').html().replace(/,/g, '');
		var vlltcidr = $('#ltcidr').html().replace(/,/g, '');
		var vlnxtidr = $('#nxtidr').html().replace(/,/g, '');
		var vlwavesidr = $('#wavesidr').html().replace(/,/g, '');
		var vlstridr = $('#stridr').html().replace(/,/g, '');
		var vlxrpidr = $('#xrpidr').html().replace(/,/g, '');
		var vlxzcidr = $('#xzcidr').html().replace(/,/g, '');

		// Variable from socket
		try{
			var resbtcidr = numeral(JSON.parse(msg.toString()).prices.btcidr).format('0,0');
			var resbchidr = numeral(JSON.parse(msg.toString()).prices.bchidr).format('0,0');
			var resbtgidr = numeral(JSON.parse(msg.toString()).prices.btgidr).format('0,0');
			var resethidr = numeral(JSON.parse(msg.toString()).prices.ethidr).format('0,0');
			var resetcidr = numeral(JSON.parse(msg.toString()).prices.etcidr).format('0,0');
			var resignisidr = numeral(JSON.parse(msg.toString()).prices.ignisidr).format('0,0');
			var resltcidr = numeral(JSON.parse(msg.toString()).prices.ltcidr).format('0,0');
			var resnxtidr = numeral(JSON.parse(msg.toString()).prices.nxtidr).format('0,0');
			var reswavesidr = numeral(JSON.parse(msg.toString()).prices.wavesidr).format('0,0');
			var resstridr = numeral(JSON.parse(msg.toString()).prices.stridr).format('0,0');
			var resxrpidr = numeral(JSON.parse(msg.toString()).prices.xrpidr).format('0,0');
			var resxzcidr = numeral(JSON.parse(msg.toString()).prices.xzcidr).format('0,0');

			var volbtcidr = numeral(JSON.parse(msg.toString()).volumes.btcidr.idr).format('0,0');
			var volbchidr = numeral(JSON.parse(msg.toString()).volumes.bchidr.idr).format('0,0');
			var volbtgidr = numeral(JSON.parse(msg.toString()).volumes.btgidr.idr).format('0,0');
			var volethidr = numeral(JSON.parse(msg.toString()).volumes.ethidr.idr).format('0,0');
			var voletcidr = numeral(JSON.parse(msg.toString()).volumes.etcidr.idr).format('0,0');
			var volignisidr = numeral(JSON.parse(msg.toString()).volumes.ignisidr.idr).format('0,0');
			var volltcidr = numeral(JSON.parse(msg.toString()).volumes.ltcidr.idr).format('0,0');
			var volnxtidr = numeral(JSON.parse(msg.toString()).volumes.nxtidr.idr).format('0,0');
			var volwavesidr = numeral(JSON.parse(msg.toString()).volumes.wavesidr.idr).format('0,0');
			var volstridr = numeral(JSON.parse(msg.toString()).volumes.stridr.idr).format('0,0');
			var volxrpidr = numeral(JSON.parse(msg.toString()).volumes.xrpidr.idr).format('0,0');
			var volxzcidr = numeral(JSON.parse(msg.toString()).volumes.xzcidr.idr).format('0,0');

			// console.log(volbtcidr.match(/,/g).length);
			// console.log(volbtcidr.split(','));
			// console.log(volbtcidr.split(','));
			// console.log(volbtcidr.split(',')[0]);
		} catch(e) {
			console.log('error');
		}


		// Line color if change value
		if (parseInt(resbtcidr.replace(/,/g, '')) > parseInt(vlbtcidr)) {
			console.log('up');
			vlbtcidr = resbtcidr.replace(/,/g, '');
			$('#linebtcidr').animate({
				backgroundColor: 'rgba(54,210,60, 0.5)',
		    }, 100 );
		    $('#linebtcidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		} else if (parseInt(resbtcidr.replace(/,/g, '')) < parseInt(vlbtcidr)) {
			console.log('down');
			vlbtcidr = resbtcidr.replace(/,/g, '');
			$('#linebtcidr').animate({
				backgroundColor: 'rgba(252,36,63,0.5)',
		    }, 100 );
		    $('#linebtcidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		}

		if (parseInt(resbchidr.replace(/,/g, '')) > parseInt(vlbchidr)) {
			console.log('up');
			vlbchidr = resbchidr.replace(/,/g, '');
			$('#linebchidr').animate({
				backgroundColor: 'rgba(54,210,60, 0.5)'
		    }, 100 );
		    $('#linebchidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		} else if (parseInt(resbchidr.replace(/,/g, '')) < parseInt(vlbchidr)) {
			console.log('down');
			vlbchidr = resbchidr.replace(/,/g, '');
			$('#linebchidr').animate({
				backgroundColor: 'rgba(252,36,63,0.5)'
		    }, 100 );
		    $('#linebchidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		}

		if (parseInt(resbtgidr.replace(/,/g, '')) > parseInt(vlbtgidr)) {
			console.log('up');
			vlbtgidr = resbtgidr.replace(/,/g, '');
			$('#linebtgidr').animate({
				backgroundColor: 'rgba(54,210,60, 0.5)'
		    }, 100 );
		    $('#linebtgidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		} else if (parseInt(resbtgidr.replace(/,/g, '')) < parseInt(vlbtgidr)) {
			console.log('down');
			vlbtgidr = resbtgidr.replace(/,/g, '');
			$('#linebtgidr').animate({
				backgroundColor: 'rgba(252,36,63,0.5)'
		    }, 100 );
		    $('#linebtgidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		}

		if (parseInt(resethidr.replace(/,/g, '')) > parseInt(vlethidr)) {
			console.log('up');
			vlethidr = resethidr.replace(/,/g, '');
			$('#lineethidr').animate({
				backgroundColor: 'rgba(54,210,60, 0.5)'
		    }, 100 );
		    $('#lineethidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		} else if (parseInt(resethidr.replace(/,/g, '')) < parseInt(vlethidr)) {
			console.log('down');
			vlethidr = resethidr.replace(/,/g, '');
			$('#lineethidr').animate({
				backgroundColor: 'rgba(252,36,63,0.5)'
		    }, 100 );
		    $('#lineethidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		}

		if (parseInt(resetcidr.replace(/,/g, '')) > parseInt(vletcidr)) {
			console.log('up');
			vletcidr = resetcidr.replace(/,/g, '');
			$('#lineetcidr').animate({
				backgroundColor: 'rgba(54,210,60, 0.5)'
		    }, 100 );
		    $('#lineetcidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		} else if (parseInt(resetcidr.replace(/,/g, '')) < parseInt(vletcidr)) {
			console.log('down');
			vletcidr = resetcidr.replace(/,/g, '');
			$('#lineetcidr').animate({
				backgroundColor: 'rgba(252,36,63,0.5)'
		    }, 100 );
		    $('#lineetcidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		}		

		if (parseInt(resignisidr.replace(/,/g, '')) > parseInt(vlignisidr)) {
			console.log('up');
			vlignisidr = resignisidr.replace(/,/g, '');
			$('#lineignisidr').animate({
				backgroundColor: 'rgba(54,210,60, 0.5)'
		    }, 100 );
		    $('#lineignisidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		} else if (parseInt(resignisidr.replace(/,/g, '')) < parseInt(vlignisidr)) {
			console.log('down');
			vlignisidr = resignisidr.replace(/,/g, '');
			$('#lineignisidr').animate({
				backgroundColor: 'rgba(252,36,63,0.5)'
		    }, 100 );
		    $('#lineignisidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		}		

		if (parseInt(resltcidr.replace(/,/g, '')) > parseInt(vlltcidr)) {
			console.log('up');
			vlltcidr = resltcidr.replace(/,/g, '');
			$('#lineltcidr').animate({
				backgroundColor: 'rgba(54,210,60, 0.5)'
		    }, 100 );
		    $('#lineltcidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		} else if (parseInt(resltcidr.replace(/,/g, '')) < parseInt(vlltcidr)) {
			console.log('down');
			vlltcidr = resltcidr.replace(/,/g, '');
			$('#lineltcidr').animate({
				backgroundColor: 'rgba(252,36,63,0.5)'
		    }, 100 );
		    $('#lineltcidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		}

		if (parseInt(resnxtidr.replace(/,/g, '')) > parseInt(vlnxtidr)) {
			console.log('up');
			vlnxtidr = resnxtidr.replace(/,/g, '');
			$('#linenxtidr').animate({
				backgroundColor: 'rgba(54,210,60, 0.5)'
		    }, 100 );
		    $('#linenxtidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		} else if (parseInt(resnxtidr.replace(/,/g, '')) < parseInt(vlnxtidr)) {
			console.log('down');
			vlnxtidr = resnxtidr.replace(/,/g, '');
			$('#linenxtidr').animate({
				backgroundColor: 'rgba(252,36,63,0.5)'
		    }, 100 );
		    $('#linenxtidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		}		

		if (parseInt(reswavesidr.replace(/,/g, '')) > parseInt(vlwavesidr)) {
			console.log('up');
			vlwavesidr = reswavesidr.replace(/,/g, '');
			$('#linewavesidr').animate({
				backgroundColor: 'rgba(54,210,60, 0.5)'
		    }, 100 );
		    $('#linewavesidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		} else if (parseInt(reswavesidr.replace(/,/g, '')) < parseInt(vlwavesidr)) {
			console.log('down');
			vlwavesidr = reswavesidr.replace(/,/g, '');
			$('#linewavesidr').animate({
				backgroundColor: 'rgba(252,36,63,0.5)'
		    }, 100 );
		    $('#linewavesidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		}		

		if (parseInt(resstridr.replace(/,/g, '')) > parseInt(vlstridr)) {
			console.log('up');
			vlstridr = resstridr.replace(/,/g, '');
			$('#linestridr').animate({
				backgroundColor: 'rgba(54,210,60, 0.5)'
		    }, 100 );
		    $('#linestridr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		} else if (parseInt(resstridr.replace(/,/g, '')) < parseInt(vlstridr)) {
			console.log('down');
			vlstridr = resstridr.replace(/,/g, '');
			$('#linestridr').animate({
				backgroundColor: 'rgba(252,36,63,0.5)'
		    }, 100 );
		    $('#linestridr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		}

		if (parseInt(resxrpidr.replace(/,/g, '')) > parseInt(vlxrpidr)) {
			console.log('up');
			vlxrpidr = resxrpidr.replace(/,/g, '');
			$('#linexrpidr').animate({
				backgroundColor: 'rgba(54,210,60, 0.5)'
		    }, 100 );
		    $('#linexrpidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		} else if (parseInt(resxrpidr.replace(/,/g, '')) < parseInt(vlxrpidr)) {
			console.log('down');
			vlxrpidr = resxrpidr.replace(/,/g, '');
			$('#linexrpidr').animate({
				backgroundColor: 'rgba(252,36,63,0.5)'
		    }, 100 );
		    $('#linexrpidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		}

		if (parseInt(resxzcidr.replace(/,/g, '')) > parseInt(vlxzcidr)) {
			console.log('up');
			vlxzcidr = resxzcidr.replace(/,/g, '');
			$('#linexzcidr').animate({
				backgroundColor: 'rgba(54,210,60, 0.5)'
		    }, 100 );
		    $('#linexzcidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		} else if (parseInt(resxzcidr.replace(/,/g, '')) < parseInt(vlxzcidr)) {
			console.log('down');
			vlxzcidr = resxzcidr.replace(/,/g, '');
			$('#linexzcidr').animate({
				backgroundColor: 'rgba(252,36,63,0.5)'
		    }, 100 );
		    $('#linexzcidr').animate({
				backgroundColor: '#transparent'
		    }, 100 );
		}

		

		// COIN PRICE
		$('#btcidr,#ttbtcidr').html(resbtcidr);
		$('#bchidr').html(resbchidr);
		$('#btgidr').html(resbtgidr);
		$('#ethidr').html(resethidr);
		$('#etcidr').html(resetcidr);
		$('#ignisidr').html(resignisidr);
		$('#ltcidr').html(resltcidr);
		$('#nxtidr').html(resnxtidr);
		$('#wavesidr').html(reswavesidr);
		$('#stridr').html(resstridr);
		$('#xrpidr').html(resxrpidr);
		$('#xzcidr').html(resxzcidr);

		// COIN VOLUME
		$('#volbtcidr').html(parseFloat(volbtcidr.split(',')[0]+'.'+volbtcidr.split(',')[1]).toFixed(1)+pecahan(volbtcidr.match(/,/g).length)+" IDR");
		$('#volbchidr').html(parseFloat(volbchidr.split(',')[0]+','+volbchidr.split(',')[1]).toFixed(1)+pecahan(volbchidr.match(/,/g).length)+" IDR");
		$('#volbtgidr').html(parseFloat(volbtgidr.split(',')[0]+','+volbtgidr.split(',')[1]).toFixed(1)+pecahan(volbtgidr.match(/,/g).length)+" IDR");
		$('#volethidr').html(parseFloat(volethidr.split(',')[0]+','+volethidr.split(',')[1]).toFixed(1)+pecahan(volethidr.match(/,/g).length)+" IDR");
		$('#voletcidr').html(parseFloat(voletcidr.split(',')[0]+','+voletcidr.split(',')[1]).toFixed(1)+pecahan(voletcidr.match(/,/g).length)+" IDR");
		$('#volignisidr').html(parseFloat(volignisidr.split(',')[0]+','+volignisidr.split(',')[1]).toFixed(1)+pecahan(volignisidr.match(/,/g).length)+" IDR");
		$('#volltcidr').html(parseFloat(volltcidr.split(',')[0]+','+volltcidr.split(',')[1]).toFixed(1)+pecahan(volltcidr.match(/,/g).length)+" IDR");
		$('#volnxtidr').html(parseFloat(volnxtidr.split(',')[0]+','+volnxtidr.split(',')[1]).toFixed(1)+pecahan(volnxtidr.match(/,/g).length)+" IDR");
		$('#volwavesidr').html(parseFloat(volwavesidr.split(',')[0]+','+volwavesidr.split(',')[1]).toFixed(1)+pecahan(volwavesidr.match(/,/g).length)+" IDR");
		$('#volstridr').html(parseFloat(volstridr.split(',')[0]+','+volstridr.split(',')[1]).toFixed(1)+pecahan(volstridr.match(/,/g).length)+" IDR");
		$('#volxrpidr').html(parseFloat(volxrpidr.split(',')[0]+','+volxrpidr.split(',')[1]).toFixed(1)+pecahan(volxrpidr.match(/,/g).length)+" IDR");
		$('#volxzcidr').html(parseFloat(volxzcidr.split(',')[0]+','+volxzcidr.split(',')[1]).toFixed(1)+pecahan(volxzcidr.match(/,/g).length)+" IDR");

		// COIN PERCENT
		// var data_percent_btcidr = parseInt({{$market_prices[strtolower($coin_info['type'])]}})/parseInt({{$coin_price_24h[strtolower($coin_info['type'])]}})*100-100;

		var graph_data_percent = parseInt(JSON.parse(msg.toString())['prices'][coinmarket])/parseInt(JSON.parse(msg.toString())['prices_24h'][coinmarket])*100-100;
		if (graph_data_percent.toFixed(1) < 0) {
			var graph_indicator_icon = 'ion-chevron-down';
			var graph_indicator_color = 'down';
		} else if (graph_data_percent.toFixed(1) > 0) {
			var graph_indicator_icon = 'ion-chevron-up';
			var graph_indicator_color = 'up';
		} else {
			var graph_indicator_icon = '';
			var graph_indicator_color = '';	
		}

		$('#graph-percent'+coinmarket).html(String(graph_data_percent.toFixed(1)).replace("-", "")+'%');
		$('#graph-percent'+coinmarket+'-color').attr('class', 'block-change '+graph_indicator_color);
		$('#graph-percent'+coinmarket+'-icon').attr('class', graph_indicator_icon);

		var percent_coin = ['btcidr', 'bchidr', 'btgidr', 'ethidr', 'etcidr', 'ignisidr', 'ltcidr', 'nxtidr', 'wavesidr', 'stridr', 'xrpidr', 'xzcidr'];
		$.each(percent_coin, function(index, value){
			var data_percent = parseInt(JSON.parse(msg.toString())['prices'][value])/parseInt(JSON.parse(msg.toString())['prices_24h'][value])*100-100;
			if (data_percent.toFixed(1) < 0) {
				var indicator_icon = 'ion-chevron-down';
				var indicator_color = 'down';
			} else if (data_percent.toFixed(1) > 0) {
				var indicator_icon = 'ion-chevron-up';
				var indicator_color = 'up';
			} else {
				var indicator_icon = '';
				var indicator_color = '';	
			}

			$('.percent'+value).html(String(data_percent.toFixed(1)).replace("-", "")+'%');
			$('#percent'+value+'-color').attr('class', 'block-change '+indicator_color);
			$('#percent'+value+'-icon').attr('class', indicator_icon);
		});
			
		

		

    });
});

$('.table-click').click(function(){
	window.location.href = $(this).attr('href');
});
/* start chart */
Highcharts.setOptions({
	global: {
		useUTC: false,
		timezoneOffset: 7*60
	},
	plotOptions: {
		series: {
			animation: false
		}
	},
	chart: {
		animation: false,
		plotBorderWidth: 0,
		backgroundColor: 'transparent',
	}
});
	
updateChart = function(){
	var chart = $('#chartbtc').highcharts();
	chart.xAxis[0].setExtremes(Date.now()-86400*1000, Date.now());
	
}
	
function afterSetExtremes(e) {
}
	
update_chartdata = function(data){
	var chart = $('#chartbtc').highcharts();
	if(!data.chart.length){
		return;
	}
		
	var ohlc = [], volume = [], dataLength = data.chart.length;
	var chartData = data.chart;
	i = 0;
	for (i; i < dataLength; i += 1) {
		ohlc.push([chartData[i][0],chartData[i][1],chartData[i][2],chartData[i][3],chartData[i][4]]);
		volume.push([chartData[i][0],chartData[i][5]]);
	}
	chart.series[1].setData(volume,false);
	chart.series[0].setData(ohlc,false);
	chart.hideLoading();
	
	chart.redraw();
	chart.xAxis[0].setExtremes(Date.now()-86400*1000, Date.now());
}
	
$(function () {
	console.log(coinmarket);
	$.post('https://api2.bitcoin.co.id/api/chartdata/'+coinmarket, {start: Date.now()-86400*1000, end: Date.now()}, function (data) {
		var ohlc = [], volume = [], dataLength = data.chart.length;
		var chartData = data.chart;
		var groupingUnits = [['minute',[30]]];
		var maxDate = data.maxDate;
		var minDate = data.minDate;
		
		i = 0;
		for (i; i < dataLength; i += 1) {
			ohlc.push([chartData[i][0],chartData[i][1],chartData[i][2],chartData[i][3],chartData[i][4]]);
			volume.push([chartData[i][0],chartData[i][5]]);
		}
		
		
		// create the chart
		$('#chartbtc').highcharts('StockChart', {
			plotOptions: {
				candlestick: {
					color: '#FC243F',
					upColor: '#36D23C',
					lineColor: '#424242',
					lineWidth: 1,
					shadow: false,
					states: {
						hover: {
							lineWidth: 1
						}
					}
				}
			},
			chart : {
				type: 'candlestick',
				zoomType: null,
				height: 300,
			},
			navigator : {
				enabled: false,
				adaptToUpdatedData: false,
				series : {
					data : chartData
				}
			},
			scrollbar: {
				enabled: false,
				liveRedraw: false
			},
			title: {
			},
			rangeSelector : {
				buttonTheme: {
					visibility: 'hidden'
				},
				labelStyle: {
					visibility: 'hidden'
				},
				buttons: [
					{type: 'day',count: 1,text: '1d'},
				],
				inputEnabled: false,
				selected : 0
			},
			xAxis : {
				events : {
					afterSetExtremes : afterSetExtremes
				},
				minRange: 3600 * 1000,
				'max': maxDate,
				'min': minDate
			},
			yAxis: [{
				labels: {
					align: 'right',
					x: -3
				},
				title: {
					text: 'Price'
				},
				height: '75%',
				lineWidth: 0
			}, {
				labels: {
					align: 'right',
					x: -3
				},
				title: {
					text: 'Vol'
				},
				top: '80%',
				height: '20%',
				offset: 0,
				lineWidth: 0
			}],
			series: [{
				cropThreshold: 0,
				id: 'BTCIDR',
				type: 'candlestick',
				name: 'BTC/IDR',
				data: ohlc,
				dataGrouping: {
					units: groupingUnits
				},
				tooltip: {
					valueDecimals: 0
				}
			}, {
				type: 'column',
				name: 'Volume',
				data: volume,
				yAxis: 1,
				dataGrouping: {
					units: groupingUnits
				},
				tooltip: {
					valueDecimals: 2
				}
			}],
			credits: {
				enabled: false
			},
			tooltip:{
				enabledIndicators: false
			},
			indicators: [{
				id: 'BTCIDR',
				type: 'bb',
				params: {
					period: 20
				},
				showInLegend: false
			}],
			exporting: {
					buttons: {
						'contextButton': {
							enabled:false
						},
						'advancedButton': {
							_id: 'advancedButton',
							text: '<button class="btn-nesia btn-block">Advanced Chart</button>',
							x: -25,
							y: -5,
							onclick: function() {
								window.open('https://vip.bitcoin.co.id/chart/btcidr', 'advancedChart').focus();
							},
							_titleKey: "advancedButtonTitle",
							
						}
					}
				},
			lang: {
				advancedButtonTitle: "Advanced Chart"
			}
		});
	});
});

// NodeJS
var app = require('http').createServer(handler)
var io = require('socket.io')(app);
var fs = require('fs');

app.listen(80);

function handler (req, res) {
  fs.readFile(__dirname + '/index.html',
  function (err, data) {
    if (err) {
      res.writeHead(500);
      return res.end('Error loading index.html');
    }

    res.writeHead(200);
    res.end(data);
  });
}

io.on('connection', function (socket) {
  socket.emit('news', { hello: 'world' });
  socket.on('my other event', function (data) {
    console.log(data);
  });
});