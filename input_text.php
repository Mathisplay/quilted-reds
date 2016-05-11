<html>
<body>

Your password is: <?php echo $_GET["pass"]; ?>

<script>
    function back(){alert("wow")};
	<?php if($_GET["pass"]=="1234" )?>
	{
		back();
	}
</script>

</body>
</html> 
