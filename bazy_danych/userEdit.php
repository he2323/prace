<?php
$nazwisko = "Kowalski";
$id = 2;
$db = new PDO('sqlite:Rusol.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="UPDATE zawodnicy SET nazwisko=".$nazwisko."WHERE id=".$id."";
	$result = $db->query($sql);

?>