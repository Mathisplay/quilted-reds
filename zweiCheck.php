<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHECK</title>
    <link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="menu">
		<ul>
			<img src="quiltedRedsGif3.gif" id="logo">
			<li><button class="menuButton" onclick="window.location.href='home.html'">Home</button></li>
			<div id="content">
			Riddle Quest
			</div>
		</ul>
	</div>

<script>
    function back(){window.location.href = "zwei.html";};
    function back1(){window.location.href = "next.html";};
</script>

<?php $text = $_GET["pass"];
$correct = "mitochondria";
$isgood = strcmp($text, $correct);
if($isgood == 0): ?>
<script>
back1();
</script>

<?php else: ?>
<div id="content3">
<p id="notCorrect">WRONG PASSWORD</p>
</div>
<script>
    setTimeout("back()", 2000);
</script>

<?php endif; ?>

<div id="Canvas2Pos">
		<img src="face.gif" id="face">
		<canvas id="Canvas2" width="140" height="200"></canvas>
	</div>
	
	<script>
		var c = document.getElementById("Canvas2");
		var ctx = c.getContext("2d");
		var x1, y1, col;
		function randomPixels(){
			for(var i = 0; i < 1000; i++){
				col = Math.floor(Math.random() * 6);
				if(col == 0)
					ctx.fillStyle = "rgba(0, 255, 60, 0.5)";
				if(col == 1)
					ctx.fillStyle = "rgba(10, 240, 70, 0.5)";
				if(col == 2)
					ctx.fillStyle = "rgba(20, 225, 80, 0.5)";
				if(col == 3)
					ctx.fillStyle = "rgba(30, 210, 90, 0.5)";
				if(col == 4)
					ctx.fillStyle = "rgba(40, 195, 100, 0.5)";
				if(col == 5)
					ctx.fillStyle = "rgba(50, 170, 110, 0.5)";
				if(col == 6)
					ctx.fillStyle = "rgba(60, 155, 120, 0.5)";	
				x1 = Math.floor(Math.random() * c.width-1);
				y1 = Math.floor(Math.random() * c.height-1);
				ctx.fillRect(x1, y1, 2, 2);
				if(i == 0)
					ctx.clearRect(0, 0, c.width, c.height);
			}
		}
		
		function rysuj2()
		{
			setTimeout(rysuj2, 100);
			randomPixels();
		}
		rysuj2();
		
	</script>
	<div id="footer">
		Site made by Mateusz Kamiński.
	</div>
</body>
</html> 
