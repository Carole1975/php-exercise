<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Date5</title>
</head>

<body>

	<p>

		<?php 

		$dateDebut = "2016/05/16";
		$dateFin = "today";

		$dureeSejour = (strtotime($dateFin) - strtotime($dateDebut));

		echo number_format($dureeSejour/86400 ,0);

		?>

	</p>

</body>

</html>