<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHECK</title>
    <link href="main2.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="black">

<script>
    function back(){window.location.href = "input_test.html";};
    function back1(){alert("wow")};
</script>

<?php $text = $_GET["pass"];
$correct = "abc";
$isgood = strcmp($text, $correct);
if($isgood == 0): ?>
<script>
back1();
</script>

<?php else: ?>
<p style="color:white;" align="center">WRONG PASSWORD</p>
<script>
    setTimeout("back()", 2000);
</script>

<?php endif; ?>
</body>
</html> 
