<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
	<title>date1</title>
</head>

<body>

<?php 

$raw = "25. 03. 2017"; 
$start = DateTime::createFromFormat("d. m. Y", $raw);

echo "Date: " . $start->format("d/m/Y"). "\n";

?>

</body>

</html>