<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>formulaire6</title>
</head>

<body>


	<?php

	if (!$_POST["civilité"]||! $_POST["Name"]||! $_POST["firstName"]){

		echo '<form action = "index.php" method = "POST">

		<select name ="civilité">
			<option value = "Monsieur">Monsieur</option>
			<option value = "Madame">Madame</option>
			<option value = "Mademoiselle">Mademoiselle</option>
		</select>


		<label for = "Name">Nom</label>
		<input type = "text" name ="Name"/>

		<label for = "FirstName">Prénom</label>
		<input type = "text" name = "firstName"/>

		<input type="submit" value="envoyer">

	</form>';

}

else{

echo $_POST["civilité"]." ";  
echo $_POST["Name"]." ";
echo $_POST["firstName"];

}

?>

</body>

</html>