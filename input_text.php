<html>
<body>

Your password is: <?php $text = $_GET["pass"];
echo $text;
$correct="abc";
echo $correct; 
echo strcmp($text, $correct);?>

<script>
function back(){alert("wow")};
<?php if($text === $correct) ?>
{
	back();
}
</script>

</body>
</html> 
