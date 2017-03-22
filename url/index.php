<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
	<title>url1</title>
</head>

<body>

<?php  

echo $_GET["nom"]." ";
echo $_GET["prenom"]." "; 

if(isset($age)){
	echo " L'age est mentionné ";
}

if (!isset($_GET["age"])){
	echo "l'age n'est pas mentionné";
}

?>

</body>

</html>