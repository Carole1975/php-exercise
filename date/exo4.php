<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Date4</title>
</head>

<body>

	<p>
		<?php

		$raw = "25. 03. 2017";
		$start = DateTime::createFromFormat("l j F Y, H:i");

		echo Date ("l j F Y, H:i");
		?>
	</P>

	<p>
		<?php 
		echo "Mardi 2 août 2016, 15h00" . date(gmmktime("l j F Y, H:i"));
		?>
	</p>

</body>

</html>