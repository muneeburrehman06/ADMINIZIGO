'use strict';

$(document).ready(function() {

	// Revenue Chart

	if($('#apexcharts-revenue').length > 0) {
		var options = {
			chart: {
				height: 350,
				type: "area",
				toolbar: {
					show: false
				},
			},
			dataLabels: {
				enabled: false
			},
			stroke: {
				curve: "smooth"
			},
			series: [{
				name: "Income",
				color: '#FFB058',
				data: [45, 60, 75, 51, 42, 42, 30, 10, 8, 22]
			}],
			xaxis: {
				categories: ['18 Nov', '19 Nov', '20 Nov', '21 Nov', '22 Nov', '23 Nov', '24 Nov', '25 Nov', '26 Nov', '27 Nov'],
			}
		}
		var chart = new ApexCharts(
			document.querySelector("#apexcharts-revenue"),
			options
		);
		chart.render();
	}

});
