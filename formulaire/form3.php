<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>formulaire3</title>
</head>

<body>


	<form action = "/user.php" method = "GET"  >

		<label for = "Name">Nom</label>
		<input type = "text" name = "Name">

		<label for = "Firstname">Prénom</label>
		<input type = "text" name = "FirstName">

		<input type="submit" value="envoyer">

	</form>

	<?php  

echo $_GET ["Name"];
echo $_GET ["FirstName"];
	
	?>


</body>

</html>