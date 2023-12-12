<!-- Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas. -->

<?php
$color = "black";
if (isset($_GET['color']) && $_GET['color'] == 1) {
    $color = "red";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puslapis</title>
</head>

<body style="background-color: <?= $color ?>;">
    <a href="./Puslapis.php">black</a>
    <a href="./Puslapis.php?color=1">red</a>
</body>

</html>