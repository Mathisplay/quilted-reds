<html>
<body>

Your password is: <?php $text = $_GET["pass"];
echo $text;?>

<script>
   function back(){alert("wow")};
	<?php 
	$correct="1234";
	if($text==$correct) ?>
	{
		back();
	}
</script>

</body>
</html> 
