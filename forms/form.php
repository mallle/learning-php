<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
</head>
<body>

	<form method="GET" action="submit.php">
		<input type="text" name="firstname">
		<input type="submit">
	</form>

	<form method="POST" action="submit.php">
		<input type="text" name="firstname">
		<br>
		<strong>Elektronik</strong>
		<input type="checkbox" name="tags[Elektronik]" value="Elektronik">
		<strong>Obst</strong>
		<input type="checkbox" name="tags[Obst]" value="Obst">
		<strong>Prog</strong>
		<input type="checkbox" name="tags[]" value="Prog">
		<input type="submit">

	</form>

</body>
</html>