<?php
	
	if (isset($_POST["jezyk"])) 
	{
		$jezyk=$_POST["jezyk"];
		echo ("<p>Znasz języki:</p>");
		echo('<ul>');
		for ($i=0;$i<count($jezyk);$i++)
		{
			echo("<li>".$jezyk[$i]."</li>");
		} 
		echo('</ul>');
		} 
			else { echo('<p>Nie znasz języków</p>');
	}
