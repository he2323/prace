<?php

$dane2 = fopen("../2/dane2.txt", "r");
$dane3 = fopen("dane3.txt", "w");

$numbers = [];

while (!feof($dane2)) {
    array_push($numbers, intval(fgets($dane2)));
}

fwrite($dane3, "max=".max($numbers)."\n");
fwrite($dane3, "srednia= ".array_sum($numbers)/count($numbers)."\n");

