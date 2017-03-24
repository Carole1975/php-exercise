<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Retour</title>
</head>

<body>
<?php  

session_start();

echo $_SESSION["nom"]." ";
echo $_SESSION["prenom"]." ";
echo $_SESSION["age"]." ";
?>

</body>
</html>