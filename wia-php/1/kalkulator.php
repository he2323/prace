<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="styl.css" type="text/css" media="all">

	<title>kalkulator</title>
</head>

<body>
	<form method="post" action="calc.php">
		<input type="number" name="liczba1" /><br />
		<input type="number" name="liczba2" /><br />
		<input type="radio" name="znak" value="+" /> +<br />
		<input type="radio" name="znak" value="-" /> -<br />
		<input type="radio" name="znak" value="*" /> *<br />
		<input type="radio" name="znak" value="/" /> /<br />
		<input type="radio" name="znak" value="^" /> ^<br />
		<input type="radio" name="znak" value="√" /> √<br />

		<input type="submit" value="Licz" />
	</form>

</body>

</html>