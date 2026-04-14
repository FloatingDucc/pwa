<?php
$c = null;

if (isset($_GET["a"]) && isset($_GET["b"])) {
    $a = (float)$_GET["a"];
    $b = (float)$_GET["b"];

    $c = (3 * $a - $b) / 2;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Izračun c</title>
</head>
<body>

<form method="get">
    <div>
        Vrijednost a:
        <input type="number" name="a">
    </div>

    <div>
        Vrijednost b:
        <input type="number"name="b">
    </div>

    <div>
        <button type="submit">Izračunaj</button>
    </div>
</form>

<?php if ($c !== null): ?>
    <p>Rezultat c = <?php echo $c; ?></p>
<?php endif; ?>

</body>
</html>