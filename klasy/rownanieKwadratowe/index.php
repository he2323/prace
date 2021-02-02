<?php
require("RownanieKwadratowe.class.php");
$a = rand(-10,10);
$b = rand(-10,10);
$c = rand(-10,10);
$tmp = new RownanieKwadratowe();
echo "a: ".$a."<br>";
echo "b: ".$b."<br>";
echo "c: ".$c."<br>";
echo "delta: ".$tmp -> liczDelta($a,$b,$c)."<br>";
var_dump($tmp -> liczRownanie($a,$b,$c));

?>