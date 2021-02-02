<?php
$nazwisko = "Kowalski";
$db = new PDO('sqlite:Rusol.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="DELETE FROM zawodnicy WHERE nazwisko =".$nazwisko."";
	$result = $db->query($sql);

?>