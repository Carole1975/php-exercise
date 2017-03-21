<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
	<title>array10</title>
</head>

<body>

<?php  

$hautDeFrance = array("59" => "Nord", "62" => "Pas de Calais", "80" => "Somme", "60" => "Oise", "02" => "Aisne");
foreach ($hautDeFrance as $nbr => $departement){
	echo "Le département ".$departement." a le numéro ".$nbr.".<br>";
}

?>

</body>

</html>






