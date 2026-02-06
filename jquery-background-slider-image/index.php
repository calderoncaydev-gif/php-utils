<html>
<head>
<title>jQuery Background Slider</title>
<style>
.demo-div{        
	margin: 100 auto;
    width: 768;
    height: 2000px;
    background: #EFA213;
    opacity: 0.8;
    color: #FFF;
    padding: 25px;
    font-weight: bold;
    font-size: 2em;
}
.demo-div p{ 
	padding:100px;
	background:#CCC;
	color:#000;
}
</style>
</head>
<body>
<div class="demo-div">
<h2>Slider automático en HTML y CSS</h2>
<p>jQuery background slider shows background slide show using jQuery plugin.</p>
<p>It  uses parameters to control the speed and interval between two slides.</p>

</div>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script type="text/javascript">
	$.backstretch(
	[
		"01.jpg",
		"02.jpg",
		"03.jpg"
	], 
	{
		duration: 2500, 
		fade: 750
	});
</script>
</body>
</html>