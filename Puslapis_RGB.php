<!--
sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos.-->

<?php
$color = "green";
if (isset($_GET['color'])) {
    $color = "#" . $_GET['color'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puslapis_RGB</title>
</head>

<body style="background-color: <?= $color ?>;">
    <a href="./Puslapis_RGB.php">green</a>
</body>

</html>