<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Retour</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<p>
		<?php  
		session_start();

		echo $_SESSION["nom"]." ";
		echo $_SESSION["prenom"]." ";
		echo $_SESSION["age"]." ";
		?>
	</p>

</body>
</html>