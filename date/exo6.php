<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Date6</title>
</head>

<body>

	<p>

		<?php 

		$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
		echo "Il y avait {$number} jours en février 2016";

		?>

	</p>

</body>

</html>