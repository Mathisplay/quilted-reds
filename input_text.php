<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CHECK</title>
    <link href="main2.css" rel="stylesheet" type="text/css">
</head>
<body>

Your password is: <?php $text = $_GET["pass"];
echo $text;
$correct = "abc";
echo $correct;
$isgood = strcmp($text, $correct);
echo $isgood;
if($isgood == 0): ?>
back();
<?php endif; ?>

<script>
    function back(){alert("wow")};
</script>

</body>
</html> 
