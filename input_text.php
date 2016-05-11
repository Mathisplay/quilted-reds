<html>
<body>

Your password is: <?php echo $_GET["pass"]; ?>

<script>
    function back(){alert("wow")};
	<?php  $text = strval($_GET["pass"]); 
	print_r($text); ?>
	<?php if($text=="1234") ?>
	{
		back();
	}
</script>

</body>
</html> 
