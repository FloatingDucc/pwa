<?php
$naslov = "Vježba 1d";
$autor = "Ivan Karlo Galić";
$opis = "Nadogradnja stranice iz vježbe 1c";
$linkNatrag ="vjezba1c.php";


$dozvoljeneTeme  = array("dark", "light");
$dozvoljeneSlike = array(
  "cd"    => "img/cd.jpg",
  "lp" => "img/lp.jpg",
  "cassette"   => "img/cassette.jpg"
);


$temaKey  = isset($_GET["tema"]) && in_array($_GET["tema"], $dozvoljeneTeme) ? $_GET["tema"] : "dark";
$slikaKey = isset($_GET["slika"]) && isset($dozvoljeneSlike[$_GET["slika"]]) ? $_GET["slika"] : "cd";
$prikaziOpis = isset($_GET["opis"]); 


$slikaPath = $dozvoljeneSlike[$slikaKey];


if ($temaKey === "light") {
  $bg = "#f1f5f9"; 
  $card = "#ffffff";
  $text = "#0f172a";
  $muted = "#64748b";
  $accent = "#1d4ed8";
} else {
  $bg = "#00246B";
  $card = "#ffffff";
  $text = "#000000";
  $muted = "#00246B";
  $accent = "#00246B";
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlspecialchars($naslov); ?></title>
<style>
:root{
	--bg: <?php echo $bg; ?>;
      --card: <?php echo $card; ?>;
      --text: <?php echo $text; ?>;
      --muted: <?php echo $muted; ?>;
      --accent: <?php echo $accent; ?>;
}
body{
font-family:system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
font-size:16px;
margin: 0;
background: var(--bg);
color: var(--text);
}
.wrap{
max-width: 720px;
margin: 48px auto;
background: var(--card);
padding: 32px;
border-radius: 16px;
box-shadow: 0 10px 30px rgba(0,0,0,.08);
}
* { box-sizing: border-box; }
h1{
margin:0 0 14px;
font-size: 2rem;
}
p{
margin:0 0 14px;
line-height:1.6;
}
footer{
color:var(--muted);
font-size:0.9rem;
}
.btn{
display: inline-block;
padding: 10px 16px;
border: 1px solid var(--accent);
border-radius: 10px;
text-decoration: none;
}
.btn:hover{
background: var(--accent); color: #FFFFFF;
}
.btn:focus-visible{
outline: 3px solid var(--accent);
}
.btn:active{
opacity:0.50;
}
img{
max-width: 50%;
  height: auto;
	
}
.divGumbi{ display:flex; gap:12px; margin-top:10px }
 form{ margin-top: 8px; }
</style>
</head>
<body>
<main class="wrap">
<h1><?php echo htmlspecialchars($naslov); ?></h1>
<p>Ovu stranicu izradio/la je <strong><?php echo htmlspecialchars($autor); ?></strong>.</p>
<div>
      <img src="<?php echo htmlspecialchars($slikaPath); ?>">
    </div>
	
<?php if ($prikaziOpis): ?>
      <p><?php echo htmlspecialchars($opis); ?></p>
    <?php endif; ?>

<form method="get" action="vjezba1d.php">
      <fieldset>
        <legend>Odaberi temu</legend>
        <label><input type="radio" name="tema" value="dark"  <?php echo $temaKey==="dark" ? "checked" : ""; ?>> Dark</label>
        <label><input type="radio" name="tema" value="light" <?php echo $temaKey==="light" ? "checked" : ""; ?>> Light</label>
      </fieldset>

      <fieldset>
        <legend>Odaberi sliku</legend>
        <label for="slika">Slika:</label>
        <select id="slika" name="slika">
          <option value="cd"    <?php echo $slikaKey==="cd"    ? "selected" : ""; ?>>CD</option>
          <option value="lp" <?php echo $slikaKey==="lp" ? "selected" : ""; ?>>LP</option>
          <option value="cassette"   <?php echo $slikaKey==="cassette"   ? "selected" : ""; ?>>Cassette</option>
        </select>
      </fieldset>

      <label><input type="checkbox" name="opis" <?php echo $prikaziOpis ? "checked" : ""; ?>> Prikaži opis</label>
	  <button class="btn" type="submit">Primijeni odabir</button>
	  </form>


<div class="divGumbi">
<p>
<a class="btn" href="<?php echo htmlspecialchars($linkNatrag); ?>"
         target="_self" rel="noopener">Povratak na vjezbu 1c</a>
</p>
</div>

<footer>&copy; <?php echo date('Y'); ?> — Demo za PHP</footer>
</main>
</body>
 </html>