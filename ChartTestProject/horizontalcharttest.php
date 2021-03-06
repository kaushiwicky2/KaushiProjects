<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "ASSET INSPECTION REPORT - RMP"
	},
	axisX: {
		valueFormatString: "DDD"
	},
	axisY: {
		prefix: "$"
	},
	toolTip: {
		shared: true
	},
	legend:{
		cursor: "pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "stackedBar",
		name: "Late",
		showInLegend: "true",
		xValueFormatString: "DD, MMM",
		yValueFormatString: "$#,##0",
		dataPoints: [
			{ x: new Date(2017, 0, 30), y: 56 },
			{ x: new Date(2017, 0, 31), y: 45 },
			{ x: new Date(2017, 1, 1), y: 71 },
			{ x: new Date(2017, 1, 2), y: 41 },
			{ x: new Date(2017, 1, 3), y: 60 },
			{ x: new Date(2017, 1, 4), y: 75 },
			{ x: new Date(2017, 1, 5), y: 98 }
		]
	},
	{
		type: "stackedBar",
		name: "On Time",
		showInLegend: "true",
		xValueFormatString: "DD, MMM",
		yValueFormatString: "$#,##0",
		dataPoints: [
			{ x: new Date(2017, 0, 30), y: 86 },
			{ x: new Date(2017, 0, 31), y: 95 },
			{ x: new Date(2017, 1, 1), y: 71 },
			{ x: new Date(2017, 1, 2), y: 58 },
			{ x: new Date(2017, 1, 3), y: 60 },
			{ x: new Date(2017, 1, 4), y: 65 },
			{ x: new Date(2017, 1, 5), y: 89 }
		]
	},
	{
		type: "stackedBar",
		name: "Due",
		showInLegend: "true",
		xValueFormatString: "DD, MMM",
		yValueFormatString: "$#,##0",
		dataPoints: [
			{ x: new Date(2017, 0, 30), y: 48 },
			{ x: new Date(2017, 0, 31), y: 45 },
			{ x: new Date(2017, 1, 1), y: 41 },
			{ x: new Date(2017, 1, 2), y: 55 },
			{ x: new Date(2017, 1, 3), y: 80 },
			{ x: new Date(2017, 1, 4), y: 85 },
			{ x: new Date(2017, 1, 5), y: 83 }
		]
	},
	
	]
});
chart.render();

function toggleDataSeries(e) {
	if(typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>