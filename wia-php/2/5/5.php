<?php
$dane4 = fopen("../4/dane4.txt", "r");
$lines = [];

while (!feof($dane4)) {
    array_push($lines, fgets($dane4));
}

foreach ($lines as $line) {
    echo strlen($line)."\n";
}
