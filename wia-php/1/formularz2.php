<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="styl.css" type="text/css" media="all">

	<title>formularz2</title>
</head>

<body>
	<form action="forma.php" method="POST">
		<fieldset style="padding:20px">
			<legend></legend>Podaj trzy liczby:
			<ol>
				<li><input type="text" maxlength="3" name="liczba1" size="3" /></li>
				<li><input type="text" maxlength="3" name="liczba2" size="3" /></li>
				<li><input type="text" maxlength="3" name="liczba3" size="3" /></li>
			</ol>
			<label>Jakie mam wykonać działanie?</label><br />
			<input type="radio" name="zapytanie" value="dodaj" />Dodaj<br />
			<label><input type="radio" name="zapytanie" value="odejmij" />Odejmij</label><br />
			<label><input type="radio" name="zapytanie" value="pomnoz" />Pomnóż</label><br />
			<input type="submit" value="Prześlij">
		</fieldset>
	</form>

</body>

</html>