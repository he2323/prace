<?php
$enter = "\n";
$file = fopen("dane2.txt", "a+");
for ($i = 0; $i < 10; $i++) {
    if ($i != 9)
        fwrite($file, rand(1, 50) . $enter);
    if($i==9) fwrite($file, rand(1, 50));
}
