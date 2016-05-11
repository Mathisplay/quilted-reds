<html>
<body>

Your password is: <?php echo $_GET["pass"]; ?>

<script>
    function back(){alert("wow")};
	var text = <?php $_GET["pass"]; ?>
	alert(text);
	<?php if(text=="1234" )?>
	{
		back();
	}
</script>

</body>
</html> 
