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
$result = mysqli_query($conn, "SELECT nazwa_towaru FROM `towary` ORDER BY nazwa_towaru ASC");
echo "<div>";
foreach ($result as $value) {
    foreach ($value as $s) {
        echo $s . "<br>";
    }
}
echo "</div>";
