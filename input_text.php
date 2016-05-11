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

<?php if($isgood == 0): ?>
good;
<?php endif; ?>

</script>

</body>
</html> 
