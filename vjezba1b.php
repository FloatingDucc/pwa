<?php
// --- PHP blok na početku ---
$naslov    = "Test PHP dokument";
$autor     = "Ivan Karlo Galić";
$link = "https://hr.wikipedia.org/wiki/PHP";
$link_tekst = "Saznaj više o PHP-u";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo htmlspecialchars($naslov); ?></title>
<style>
:root{
	--bg:#00246B;
	--card:#FFFFFF;
	--text:#000000;
	--muted:#FFFFFFF;
	--accent:#00246B;
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
</style>
</head>
<body>
<main class="wrap">
<h1><?php echo htmlspecialchars($naslov); ?></h1>
<p>Ovu stranicu izradio/la je <strong><?php echo htmlspecialchars($autor); ?></strong>.</p>
<p>PHP je serverski jezik koji generira HTML ili JSON odgovor prema klijentu.</p>
<p>
<a class="btn" href="<?php echo htmlspecialchars($link); ?>"
         target="_blank" rel="noopener"><?php echo htmlspecialchars($link_tekst); ?></a>
</p>
<footer>&copy; <?php echo date('Y'); ?> — Demo za PHP</footer>
</main>
</body>
 </html>