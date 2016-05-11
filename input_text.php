<html>
<body>

Your password is: <?php echo $_GET["pass"]; ?>

<script>
    function back(){location.href="#main"};
	var text = <?php $_GET["pass"]; ?>
	<?php if(text=="1234" )?>
	{
		back();
	}
</script>

</body>
</html> 
