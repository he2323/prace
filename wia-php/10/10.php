<?php
function nwd($value1, $value2)
{
    return $value2 ? nwd($value2, $value1 % $value2) : $value1;
}




function is_prime_number($number)
{
    for ($h = 2; $h < $number; ++$h) {
        if ($number % $h == 0) {
            return false;
        }
    }

    return true;
}



$num = $_POST['value'];

echo 'Czy liczba pierwsza?<br>';

echo $num . ' - ' . (is_prime_number($num) ? 'tak' : 'nie');

