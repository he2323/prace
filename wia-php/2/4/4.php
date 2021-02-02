<?php

$capitals = array("warsaw", "paris", "berlin", "wieden", "madryt");
$dane4 = fopen("dane4.txt", "a+");

foreach ($capitals as $capital) {
    fwrite($dane4, $capital." ");
}
foreach ($capitals as $capital) {
    fwrite($dane4, $capital."\n");
}