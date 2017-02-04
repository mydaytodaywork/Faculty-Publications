<!DOCTYPE HTML>
<html>

<head>  
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Desktop Search Engine Market Share, Dec-2012"
		},
        animationEnabled: true,
		legend:{
			verticalAlign: "center",
			horizontalAlign: "left",
			fontSize: 20,
			fontFamily: "Helvetica"        
		},
		theme: "theme1",
		data: [
		{        
			click: function(e){ 
  	 			
				alert(  e.dataSeries.type+ " x:" + e.dataPoint.x + ", y: "+ e.dataPoint.y);
  			},
			
			type: "pie",       
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabel: "{label} {y}%",
			startAngle:-20,      
			showInLegend: true,
			toolTipContent:"{legendText} {y}%",
			dataPoints: [
				{  y: 83.24, legendText:"Google", label: "Google" },
				{  y: 8.16,  legendText:"Yahoo!", label: "Yahoo!" },
				{  y: 4.67,  legendText:"Bing", label: "Bing" },
				{  y: 1.67,  legendText:"Baidu" , label: "Baidu"},       
				{  y: 0.98,  legendText:"Others" , label: "Others"}
			]
		}
		]
	});
	chart.render();
}
</script>
<script type="text/javascript" src="../../canvasjs.min.js"></script> 
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 80%;"></div>
</body>


</html>
