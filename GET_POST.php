<!--Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi skirtingas formas- vieną GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST reikšmių, o tik tikrindami pačius masyvus, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- kai iš POST-->

<?php
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['get_button'])) {
    $color = 'green';
} elseif ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['post_button'])) {
    $color = 'yellow';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET_POST</title>
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