<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHECK</title>
    <link href="main.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="black">

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
<p id="notCorrect">WRONG PASSWORD</p>
<script>
    setTimeout("back()", 2000);
</script>

<?php endif; ?>
</body>
</html> 
