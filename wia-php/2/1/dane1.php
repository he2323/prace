<?php

$value1 = $_POST["value1"];
$value2 = $_POST["value2"];

$enter = "\n";

$file = fopen("dane1.txt", "a+");

fwrite($file, $value1.$enter.$value2.$enter);
fwrite($file, $value1." ".$value2.$enter);
fwrite($file, $value1+$value2.$enter);
fwrite($file, $value1*$value2.$enter);