<html>
<body>

Your password is: <?php $text = $_GET["pass"];
echo $text;
$correct = "abc";
echo $correct;
$isgood = strcmp($text, $correct);
echo $isgood;
?>

<script>
function back(){alert("wow")};

<?php if if($isgood == 0): ?>
back();
<?php endif; ?>

</script>

</body>
</html> 
