<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>global variable5</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<a href=index2.php>Retour</a>

	<?php
	session_start();
	$_SESSION["prenom"]="Carole";
	$_SESSION["nom"]="VELARDE";
	$_SESSION["age"]=41;
	?>

	<form action= "inscription.php" id="form1" method="POST">

		<label for="">login</label>
		<input type="text" name="login" value="Cassole">

		<label for="">Password</label>
		<input type="password" name="mdp" value="123456">

		<input type="submit" value="connection">

	</form>

	
</body>

</html>