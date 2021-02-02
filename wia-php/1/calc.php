<?php

$liczba1 = $_POST['liczba1'];
$liczba2 = $_POST['liczba2'];

switch ($_POST['znak']) {
	case "+":
		echo 'Wynik ' . $liczba1 . ' ' . $_POST['znak'] . ' ' . $liczba2 . ' wynosi ' . $liczba1 + $liczba2;
		break;
	case "-":
		echo 'Wynik ' . $liczba1 . ' ' . $_POST['znak'] . ' ' . $liczba2 . ' wynosi ' . $liczba1 - $liczba2;
		break;
	case "*":
		echo 'Wynik ' . $liczba1 . ' ' . $_POST['znak'] . ' ' . $liczba2 . ' wynosi ' . $liczba1 * $liczba2;
		break;
	case "/":
		echo 'Wynik ' . $liczba1 . ' ' . $_POST['znak'] . ' ' . $liczba2 . ' wynosi ' . $liczba1 / $liczba2;
		break;
	case "^":
		echo "Wynik potegowania liczby" . $liczba1 . "=" . pow($liczba1, 2);
		break;
	case "√":
		echo "Wynik pierwiastkowania liczby " . $liczba1 . "=" . sqrt($liczba1);
		break;
}
