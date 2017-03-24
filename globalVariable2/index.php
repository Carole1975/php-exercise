
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
	<title>global variable2</title>
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

</body>

</html>