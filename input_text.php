<html>
<body>

Your password is: <?php echo $_GET["pass"]; ?>
if(<?php $_GET["pass"]=="1234" ?>)
{
	back();
}

<script>
    function back(){location.href="#main"};
</script>

</body>
</html> 
