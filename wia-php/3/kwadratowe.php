<?php


if (isset($_POST['a']) && intval($_POST['a']) != 0) {
    $a = intval($_POST['a']);
    $b = is_numeric($_POST['b']) ? intval($_POST['b']) : 0;;
    $c = is_numeric($_POST['c']) ? intval($_POST['c']) : 0;;
    $delta = pow($b, 2) - (4 * $a * $c);
    if ($delta > 0) {
        echo "x1 = " . (-$b - sqrt($delta)) / 2 * $a . " x2= " . (-$b + sqrt($delta)) / 2 * $a;
    } elseif ($delta == 0) {
        echo "delta 0 x= " . (-$b + sqrt($delta)) / 2 * $a;
    } else {
        echo "delta ujemna";
    }
}
