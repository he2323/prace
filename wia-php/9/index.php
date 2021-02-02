<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filip Rusoł 4B</title>

</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['counter']))
        $_SESSION['counter'] = $_SESSION['counter'] + 10;
    else
        $_SESSION['counter'] = 10;

    $url = $_SERVER['REQUEST_URI'];
    header("Refresh: 10; URL=$url");
    $files = scandir("./grafika");
    echo "<img src='./grafika/" . $files[rand(2, sizeof($files)-1)] . "' width='200'>";

    // ilość sekund
    $interval=30;

    if ($_SESSION['counter'] % $interval == 0)
        if (isset($_SESSION['views']))
            $_SESSION['views'] = $_SESSION['views'] + 1;
        else
            $_SESSION['views'] = 1;
    echo $_SESSION['views'];
    ?>
</body>

</html>