<!DOCTYPE html>
<html>
<head>
<style> 
.operator{
	padding:10px;
}
.gumbi{
	
	display:flex;
	gap:10px;
}
</style>
</head>
<body>
<p>Kalk (kalkulator)</p>

<form action="vjezba6.php" method="post">
  <label for="broj1">Upišite prvi broj:</label><br>
  <input type="number" id="broj" name="broj1"><br><br>
  <label for="broj2">Upišite drugi broj:</label><br>
  <input type="number" id="broj" name="broj2"><br><br>
  <?php 
  if(isset($_POST['broj1']) && isset($_POST['broj2'])){
	  $broj1 = intval($_POST['broj1']);
  $broj2 = intval($_POST['broj2']);
	  $operator = $_POST["operator"];
	  switch($operator){
		  case "+":{
			  echo "Rezultat je: " . $broj1 + $broj2;
			  break;
		  }
		  case "-":{
			  echo "Rezultat je: " . $broj1 - $broj2;
			  break;
		  }
		  case "/":{
			  if($broj2 == 0) {
				  echo "Neće ići, dijeljenje s 0 nije dopušteno";
				  break;
			  }
			  else echo "Rezultat je: " . $broj1 / $broj2;
			  break;
		  }
		  case "*":{
			  echo "Rezultat je: " . $broj1 * $broj2;
			  break;
		  }
	  }
	  
	  
  }
  ?>
  
  <div class="gumbi">
  <input type="submit" value="+" id="+" class="operator" name="operator">
  <input type="submit" value="-" id="-" class="operator" name="operator">
  <input type="submit" value="/" id="/" class="operator" name="operator">
  <input type="submit" value="*" id="*" class="operator" name="operator">
  </div>

</form> 
</body>
</html>