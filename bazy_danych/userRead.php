<?php
try{
	$db = new PDO('sqlite:Rusol.sqlite');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql="SELECT * FROM zawodnicy;";
	$result = $db->query($sql);

	echo '<table cellpadding="2" border="1">';
	foreach($result as $r) {
		echo '<tr>';
		echo "<td>".$r[0]."</td>";
		echo "<td>".$r[1]."</td>";
		echo "<td>".$r[2]."</td>";
		echo "<td>
				<a href=\"index.php?a=del&id={$r[0]}\">DEL
				<a href=\"index.php?a=edit&id={$r[0]}\">EDIT
			</td>";
		echo '</tr>';
	}
		echo "</table>";
}
catch(PDOException $e){
	echo 'Błąd: ' . $e->getMessage();
}

?>