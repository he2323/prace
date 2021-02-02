<?php
$username = 'root';
$pass = '';
$serv = 'localhost';
$db = 'egzamin_ee09';


$conn = mysqli_connect($serv, $username, $pass, $db);
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
$result = mysqli_query($conn, "SELECT o.imie, o.nazwisko, z.data, t.nazwa_towaru, z.ilosc FROM zamowienia as z INNER JOIN osoby as o ON z.id_osoba = o.id_osoba LEFT JOIN towary as t ON z.id_towar = t.id_towar");
echo "<div>";
foreach ($result as $value) {
    foreach ($value as $s) {
        echo $s." ";
    }
    echo "<br>";
}
echo "</div>";
