<!--Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu.-->

<?php
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['get_button'])) {
    $color = 'green';
} elseif ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['post_button'])) {
    $color = 'yellow';
    header("Location: " . $_SERVER['PHP_SELF'] . "?get_button=1");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzduotis_7</title>
</head>

<body style="background-color: <?= $color ?>;">
    <form action="" method="GET">
        <button type="submit" name="get_button">GET </button>
    </form>
    <form action="" method="POST">
        <button type="submit" name="post_button">POST</button>
    </form>

</body>

</html>