<?php

$random_broj = rand(0,10);
$pogoden_broj = isset($_POST["broj"]) ? $_POST["broj"] : null;
	
if(isset($_POST['broj'])){
if ($pogoden_broj == $random_broj) {
  $col = "#32CD32"; 
} else {
  $col = "#FF0000";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<style> 
:root{
	--col: <?php echo $col; ?>;
}
#gumb{
  background-color: var(--col);
}
</style>
</head>

<body>
<p>Forma za pogađanje brojeva</p>

<form action="vjezba5.php" method="post">
  <label for="broj">Upišite broj u intervalu [0,10] </label><br>
  <input type="number" id="broj" name="broj"><br><br>
  
<?php if(isset($_POST['broj'])){ ?>

    <?php if($pogoden_broj == $random_broj){ ?>
        <input type="submit" value="Točno" id="gumb"><br>
        <?php echo 'Random broj je: ' . $random_broj; ?>
    <?php } else { ?>
        <input type="submit" value="Netočno" id="gumb"><br>
        <?php echo 'Random broj je: ' . $random_broj; ?>
    <?php } ?>

<?php } ?>

</form> 
</body>
</html>