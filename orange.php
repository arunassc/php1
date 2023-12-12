<?php
$color = "orange";
if (isset($_GET['color']) && $_GET['color'] == 1) {
    $color = "red";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: <?= $color ?>;">

</body>

</html>