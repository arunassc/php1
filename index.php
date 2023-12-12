<?php
$name = "Arunas"
?>

<html>

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hello World</title>
</head>

<body>
    <?php include "./header.php"; ?>

    <h1>Hello world</h1>
    <?php
    echo "PHP kalba";
    echo "<h1> as esu" . " " . $name . "</h1>";
    ?>
</body>

</html>