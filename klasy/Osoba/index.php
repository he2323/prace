<?php
require("Osoba.class.php");

$jane = new Osoba('Jane', 'Doe', 'f', '2000-02-12', 555888777);
echo $jane -> getPhoneNumber();
echo $jane -> getInfo();

echo "<br>";

$john = new Osoba('John', 'Doe','m', '1999-12-11', 13456789);
echo $john -> getInfo();
echo "<br>";
$john -> setSurname("DoeNobody");
echo $john -> getInfo();
echo $john -> getDays();
echo "<br>";

?>