<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>formulaire4</title>
</head>

<body>


	<form action = "/user.php" method = "POST"  >

		<label for = "Name">Nom</label>
		<input type = "text" name ="Name"/>

		<label for = "FirstName">Prénom</label>
		<input type = "text" name = "firstName"/>

		<input type="submit" value="envoyer">

	</form>

	<?php  
    echo $_POST["Name"]." ";
    echo $_POST["firstName"];
	?>


</body>

</html>