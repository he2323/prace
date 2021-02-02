<?php
$servername = "localhost";
$username = $_POST["login"];
$password = "";
if (isset($_POST["password"])) {
    $password = $_POST["password"];
}
echo "<div style='display:none'>";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//delete database
$sql = "DROP DATABASE `importowanie`";
if ($conn->query($sql) === TRUE) {
    echo "Database deleted successfully";
} else {
    echo "Error deleting database: " . $conn->error;
}
// Create database
$sql = "CREATE DATABASE importowanie  DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_polish_ci";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$dbname = "importowanie";
$conn = new mysqli($servername, $username, $password, $dbname);
//create table osoby
$sql = "CREATE TABLE dane (
    pesel BIGINT NOT NULL PRIMARY KEY,
    nazwisko VARCHAR(20) NOT NULL,
    imie VARCHAR(50) NOT NULL,
    miasto VARCHAR(50) NOT NULL,
    czas1 INT NOT NULL,
    czas2 INT NOT NULL,
    czas3 INT NOT NULL
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE pesele_n_osoby (
    pesel BIGINT NOT NULL PRIMARY KEY
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE pesele_p_osoby (
    pesel BIGINT NOT NULL PRIMARY KEY,
    data_urodzenia VARCHAR(50) NOT NULL
    )";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$open = fopen('osoby.txt', 'r');

while (!feof($open)) {
    $getTextLine = fgets($open);
    $explodeLine = explode(";", $getTextLine);

    list($pesel, $nazwisko, $imie, $miasto, $czas1, $czas2, $czas3) = $explodeLine;
    $pesel = preg_replace('/[^a-zA-Z0-9żźćńółęąśŻŹĆĄŚĘŁÓŃ]/', '', $pesel);
    $sql = "insert into dane (`pesel`,`nazwisko`,`imie`,`miasto`,`czas1`,`czas2`,`czas3`) values(" . $pesel . ",'" . $nazwisko . "','" . $imie . "','" . $miasto . "','" . intval(substr($czas1, 0, -1)) . "','" . intval(substr($czas2, 0, -1)) . "','" . intval(substr($czas3, 0, -1)) . "')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . "<br>" . $conn->error;
    }
}

fclose($open);

echo "</div>";


if (isset($_POST['sub'])) {
    $zapytanie = $_POST['sub'];
    $result = $conn->query($zapytanie);
    echo "<table border='1px'>";
    foreach ($result as $value) {
        echo "<tr>";
        foreach ($value as $v) {
            echo "<td>" . $v . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
if (isset($_POST['n'])) {
    $tmpArr = [];
    $zapytanie = $_POST['n'];
    $result = $conn->query($zapytanie);
    foreach ($result as $value) {
        foreach ($value as $v) {
            array_push($tmpArr, intval($v));
        }
    }
    foreach ($tmpArr as $value) {
        if (strlen((string)$value) == 9) {
            $rok = '00';
            $miesiac = strval($value)[0] . strval($value)[1];
            $dzien = strval($value)[2] . strval($value)[3];
        } else if (strlen((string)$value) == 10) {
            $rok = '0' . strval($value)[0];
            $miesiac = strval($value)[1] . strval($value)[2];
            $dzien = strval($value)[3] . strval($value)[4];
        } else {
            $rok = strval($value)[0] . strval($value)[1];
            $miesiac = strval($value)[2] . strval($value)[3];
            $dzien = strval($value)[4] . strval($value)[5];
        }
        if (intval($rok) > 0 && intval($miesiac) - 20 > 0) {
            $miesiac = strval(intval($miesiac)-20);
        }
        if (intval($rok) > 50 && intval($rok) < 100 && intval($miesiac) > 0 && intval($miesiac) <= 12 && intval($dzien) > 0 && intval($dzien) < 31) {
            $sql = "insert into pesele_p_osoby (`pesel`,`data_urodzenia`) values(" . $value . ",'" . $rok . "-" . $miesiac . "-" . $dzien . "');";
        } else $sql = "insert into pesele_n_osoby (`pesel`) values(" . $value . ");";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " .$sql. "<br>" . $conn->error;
        }
    }
}
