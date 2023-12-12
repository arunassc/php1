<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!----------------1 uzduotis----------------->
    <!--Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
    "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".-->

    <?php
    $name = "Arunas";
    $surname = "Petraitis";
    $birthyear = 1980;
    $thisyear = 2023;

    $age = $thisyear - $birthyear;

    echo "<h2>As esu $name $surname. Man yra $age metai</h2>";
    ?>

    <!----------------2 uzduotis----------------->
    <!--Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.-->

    <?php
    $number1 = rand(0, 25);
    $number2 = rand(0, 25);
    $number3 = rand(0, 25);

    $middleValue = ($number1 + $number2 + $number3) / 3;

    echo "<h2>Vidurine reiksme: $middleValue</h2>";
    ?>

    <!----------------3 uzduotis----------------->
    <!--Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. -->

    <?php
    $a = rand(1, 10);
    $b = rand(1, 10);
    $c = rand(1, 10);
    
    echo $a . " " . $b . " " . $c;
    
    if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "<h2>Galima sudaryti trikampi.</h2>";
    } else {
        echo "<h2>Negalima sudaryti trikampio.</h2>";
    }
    ?>

</body>

</html>