<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHECK</title>
    <link href="main2.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="black">

<script>
    function back(){alert("wow")};
</script>

<?php $text = $_GET["pass"];
$correct = "abc";
$isgood = strcmp($text, $correct);
if($isgood == 0): ?>
<script>
back();
</script>
<?php else: ?>
<p style="color:white;">WRONG PASSWORD</p>
<script>
    function back(){window.location.href = "input_test.html";};
    setTimeout("back()", 3000);
</script>
<?php endif; ?>
</body>
</html> 
