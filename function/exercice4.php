<!DOCTYPE html>
<html>

<head>
	<title>function4</title>
</head>

<body>

<?php 

function nombre($nombre1, $nombre2){
	if($nombre1<$nombre2){
		return "C'est le plus petit";
	}

	else if($nombre1>$nombre2){
		return "C'est le plus grand";
	}

	else{
		return "C'est égal";
	}
}


echo nombre(42, 18);
 ?>

</body>

</html>