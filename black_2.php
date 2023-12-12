<!--Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota.-->

<?php
$color = "black";
$checkedCount = 0;
$totalCheckboxes = 0;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $color = "white";
    foreach ($_POST as $key => $value)
        if ($value == "checkbox_value")
            $checkedCount++;
            $totalCheckboxes++;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>black</title>
</head>

<body style="background-color: <?= $color ?>;">
    <?php if ($_SERVER['REQUEST_METHOD'] != "POST") : ?>
        <form action="" method="POST">
            <input type="checkbox" id="1" name="A" value="checkbox_value">
            <label for="1">A</label><br>
            <input type="checkbox" id="2" name="B" value="checkbox_value">
            <label for="2">B</label><br>
            <input type="checkbox" id="3" name="C" value="checkbox_value">
            <label for="3">C</label><br>
            <input type="checkbox" id="4" name="D" value="checkbox_value">
            <label for="4">D</label><br>
            <input type="checkbox" id="5" name="E" value="checkbox_value">
            <label for="5">E</label><br>
            <button type="submit">mygtukas</button>
        </form>
    <?php else : ?>
        <p><?= $checkedCount ?></p>
        <p><?= $totalCheckboxes ?></p>
    <?php endif; ?>
</body>

</html>