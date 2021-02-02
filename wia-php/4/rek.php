<?php
$value1 = $_POST["1"];
$value2 = $_POST["2"];

$value1 = intval($value1);
$value2 = intval($value2);

function getSilnia($value)
{ {
        if ($value < 2)
            return 1;
        else
            return $value * getSilnia($value - 1);
    }
}

function getPower($value)
{
    return pow(2, $value);
}
function nwd($value1, $value2)
{
    return $value2 ? nwd($value2, $value1 % $value2) : $value1;
}
function nww($value1, $value2)
{
    return gettype($value2) === "integer" && gettype($value1) === "integer" ? gmp_lcm($value1, $value2) : "nie wysłałeś int";
}



echo "silnia1: " . getSilnia($value1) . "<br>";
echo "silnia2: " . getSilnia($value2) . "<br>";
echo "pow " . $value1 . ": " . getPower($value1) . "<br>";
echo "pow " . $value2 . ": " . getPower($value2) . "<br>";
echo "nwd: " .array_reduce(array($value1, $value2), 'nwd') . "<br>";
echo "nww: " . nww($value1, $value2) . "<br>";