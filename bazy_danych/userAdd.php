<?php
$db = new PDO('sqlite:Rusol.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="INSERT INTO zawodnicy VALUES (12, "."John,"."Doe".15.")";
	$result = $db->query($sql);


?>