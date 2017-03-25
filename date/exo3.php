<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Date3</title>
</head>

<body>

	<?php

	$raw = "25. 03. 2017";
	$start = DateTime::createFromFormat("l. j.  F. Y", $raw);

	echo Date("l j F Y")."\n";

	
	setlocale(LC_TIME,"fr_FR.UTF8");

	echo strftime("%A %d %B %Y");

	?>

</body>

</html>