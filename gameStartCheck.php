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
		</ul>
	</div>

<script>
    function back(){window.location.href = "gameStart.html";};
    function back1(){alert("Tu będzie coś dalej.")};
</script>

<?php $text = $_GET["pass"];
$correct = "abc";
$isgood = strcmp($text, $correct);

if($isgood == 0): ?>
<script>
back1();
</script>

<?php else: ?>
<div id="absolute">
<p id="notCorrect">WRONG PASSWORD</p>
</div>
<script>
    setTimeout("back()", 2000);
</script>

<?php endif; ?>
</body>
</html> 
