<?php

$l1 = $_POST["liczba1"];
$l2 = $_POST["liczba2"];
$l3 = $_POST["liczba3"];
echo 'Pierwsza liczba=' . $l1 . '<br/>';
echo 'Druga liczba=' . $l2 . '<br/>';
echo 'Trzecia liczba=' . $l3 . '<br/>';
echo 'Wynik działania=';
if ($_POST["zapytanie"] == "dodaj") {
	echo ($l1 + $l2 + $l3);
} else if ($_POST["zapytanie"] == "odejmij") {
	echo ($l1 - $l2 - $l3);
} else {
	echo ($l1 * $l2 * $l3);
}
