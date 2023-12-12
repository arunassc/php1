<?php
$color = "#white";
if (isset($_GET["color"])) {
    $color = "#" . $_GET["color"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puslapis_3</title>
</head>

<body style="background-color: <?= $color ?>;">
    <form action="" method="get">
        <input type="text" name="color">
            <button type="submit">Spausti</button>
    </form>
</body>

</html>