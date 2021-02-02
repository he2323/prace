<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/strona.css">
    <link rel="icon" href="./grafika/gwiazda.png" type="image/png">
</head>

<body>
    <div id="baner"></div>
    <div id="reszta">
        <div id="tresc">
            <?php

            if (isset($_GET['p']) && $_GET['p'] == "galeria") {
                include('./galeria.html');
            } else if (isset($_GET['p']) && $_GET['p'] == "magazyn") {
                include('./baza/magazyn.php');
            } else if (isset($_GET['p']) && $_GET['p'] == "rejestr") {
                include('./baza/rejestr.php');
            } else {
                include('./start.html');
            }
            ?>
        </div>
        <div id="menu">
            <a class="link" href="strona.php?p=main">Strona Główna</a>
            <a class="link" href="strona.php?p=galeria">Galeria</a>
            <a class="link" href="strona.php?p=magazyn">Magazyn</a>
            <a class="link" href="strona.php?p=rejestr">Rejestr</a>
        </div>
        <div id="stopka">EGZAMIN
            EE.09 25 - 11 - 2020</div>
    </div>
</body>

</html>