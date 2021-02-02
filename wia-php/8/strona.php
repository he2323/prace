<?php
include("tresc.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filip Rusoł</title>
    <link rel="stylesheet" href="formatowanie.css">
</head>

<body>
    <div class="all">
        <div class="header">
            <?php
            include_once("naglowek.php");
            ?>
        </div>
        <div id="menuitresc">
            <div class="menu"></div>
            <div class="tresc">
                <?php
                tresc();
                ?>
            </div>
        </div>

        <div class="stopka">
            <?php
            require_once("stopka.php");
            ?>
        </div>
    </div>


</body>

</html>