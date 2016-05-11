<html>
<body>

Your password is: <?php $text = $_GET["pass"];
echo $text;
$correct="abc";
echo $correct; 
echo strcmp($text, $correct);?>

<script>
function back(){alert("wow")};
back();
if(strcmp($text, $correct)==="0")
{
	back();
}
</script>

</body>
</html> 
