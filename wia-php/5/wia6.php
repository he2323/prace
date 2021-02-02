<?php
$value = $_POST['value'];

if (isset($_POST['2'])) {
    przez2($value);
} else if (isset($_POST['3'])) {
    przez3($value);
} else if (isset($_POST['4'])) {
    przez4($value);
} else if (isset($_POST['5'])) {
    przez5($value);
} else if (isset($_POST['6'])) {
    przez6($value);
} else if (isset($_POST['7'])) {
    przez7($value);
} else if (isset($_POST['8'])) {
    przez8($value);
} else if (isset($_POST['9'])) {
    przez9($value);
} else if (isset($_POST['10'])) {
    przez10($value);
}

function przez2($v)
{
    $v = strval($v);
    $lastChar = substr($v, -1);
    $lastNumber = intval($lastChar);

    if ($lastNumber % 2 === 0) echo 'wartość jest podzielna przez 2';
    else echo 'wartość jest niepodzielna przez 2';
}
function przez3($v)
{
    $v = strval($v);
    $array = str_split($v);
    $sum = 0;
    foreach ($array as $value) {
        $value = intval($value);
        $sum += $value;
    }
    if ($sum % 3 === 0) echo 'wartość jest podzielna przez 3';
    else echo 'wartość nie jest podzielna przez 3';
}
function przez4($v)
{
    $v = strval($v);
    $lastChar = substr($v, -2);
    $lastNumber = intval($lastChar);

    if ($lastNumber % 4 === 0) echo 'wartość jest podzielna przez 4';
    else echo 'wartość jest nie podzielna przez 4';
}
function przez5($v)
{
    $v = strval($v);
    $lastChar = substr($v, -1);
    $lastNumber = intval($lastChar);
    if ($lastNumber === 0 || $lastNumber === 5) echo 'wartość jest podzielna przez 5';
    else echo 'wartość jest nie podzielna przez 5';
}

function przez6($v)
{
    $v = strval($v);
    $lastChar = substr($v, -1);
    $lastNumber = intval($lastChar);

    $array = str_split($v);
    $sum = 0;
    foreach ($array as $value) {
        $value = intval($value);
        $sum += $value;
    }

    if ($lastNumber % 2 === 0 && $sum % 3 === 0) echo 'wartość jest podzielna przez 6';
    else echo 'wartość jest nie podzielna przez 6';
}

function przez7($v)
{
    $v = strval($v);
    $lastThree = substr($v, -3);
    $lastThree = intval($lastThree);
    $beforeThree = substr($v, 0, -3);
    $beforeThree = intval($beforeThree);
    if (($lastThree - $beforeThree) % 7 === 0)
        echo 'wartość jest podzielna przez 7';
    else echo 'wartość jest nie podzielna przez 7';
}
function przez8($v)
{
    $v = strval($v);
    $lastThree = substr($v, -3);
    $lastThree = intval($lastThree);
    if ($lastThree % 8 === 0) echo 'wartość jest podzielna przez 8';
    else echo 'wartość jest nie podzielna przez 8';
}
function przez9($v)
{
    $v = strval($v);
    $array = str_split($v);
    $sum = 0;
    foreach ($array as $value) {
        $value = intval($value);
        $sum += $value;
    }
    if ($sum % 9 === 0) echo 'wartość jest podzielna przez 9';
    else echo 'wartość nie jest podzielna przez 9';
}
function przez10($v)
{
    $v = strval($v);
    $lastChar = substr($v, -1);
    $lastNumber = intval($lastChar);

    if ($lastNumber === 0) echo 'wartość jest podzielna przez 10';
    else echo 'wartość nie jest podzielna przez 10';
}
