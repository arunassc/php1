<!--Sukurkite du puslapius pink.php ir rose.php. Nuspalvinkite juos atitinkamo spalvom. Į pink.php puslapį įdėkite formą su POST metodu ir mygtuku “GO TO ROSE”. Formą nukreipkite, kad ji atsidarinėtų rose.php puslapyje. Padarykite taip, kad surinkus naršyklėje tiesiogiai adresą į rose.php puslapį, naršyklė būtų peradresuojama į pink.php puslapį. -->

<?php
$color = "pink";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    header("Location: rose.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pink</title>
</head>

<body style="background-color: <?= $color ?>;">
    <form action="rose.php" method="POST">
        <button type="submit">GO TO ROSE</button>
    </form>
</body>

</html>