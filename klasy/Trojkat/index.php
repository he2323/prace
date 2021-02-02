<?php
require("Trojkat.class.php");

$trojkat1 = new Trojkat();
echo $trojkat1 -> poletrojkata();
echo "<br>";
echo $trojkat1 -> getInfo();
$trojkat2 = new Trojkat();
echo $trojkat2 -> poletrojkata();
echo "<br>";
echo $trojkat2 -> getInfo();
echo "<br>";
?>