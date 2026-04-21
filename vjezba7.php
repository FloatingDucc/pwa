<?php

if (isset($_POST['ocjene'])) {

    $ocjene = $_POST['ocjene'];
	$prosjek = 0;
	$konacna = 0;
	$poruka = "";
	$stanje = true; //pad/ne pad predmeta
	
	if($ocjene[0] == 1 || $ocjene[1] == 1){
		$poruka = "Pad predmeta!";
	}
	else{
		$stanje = false;
		$prosjek = ($ocjene[0] + $ocjene[1]) / 2;
		$konacna = round($prosjek);
}
}
?>
<!DOCTYPE html>
<html>
<head>
<style> 

</style>
</head>
<body>
<h2>Ocjene za kolokvij</h2>

<form action="vjezba7.php" method="post">
  <label for="ocjene[]">Upišite ocjenu prvog kolokvija:</label><br>
  <input type="number" id="broj1" name="ocjene[]"><br><br>
  <label for="ocjene[]">Upišite ocjenu drugog kolokvija:</label><br>
  <input type="number" id="broj2" name="ocjene[]"><br><br>
  <button type="submit">Pošalji</button>
  <?php 
  if (isset($_POST['ocjene'])) {
	  echo '<p>Ocjena 1. kolokvija: ' . $ocjene[0] . '</p>';
	  echo '<p>Ocjena 2. kolokvija: ' . $ocjene[1] . '</p>';
	  echo '<hr>';
	  
  if($stanje){
	  echo $poruka;
  }else{
	  echo '<p>Prosjek predmeta: ' . $prosjek . '</p>';
	  echo '<p>Ocjena iz predmeta: ' . $konacna . '</p>';
  }

  }
  ?>


</form> 
</body>
</html>