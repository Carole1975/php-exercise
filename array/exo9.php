<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
	<title>array9</title>
</head>

<body>

<?php  

$hautDeFrance = array("59" => "Nord,", "62" => "Pas-de-Calais,", "80" => "Somme,", "60" => "oise,", "02" => "Aisne.");

echo $hautDeFrance[51];
foreach ($hautDeFrance as $departement){
	echo $departement." ";
}

?>

</body>

</html>