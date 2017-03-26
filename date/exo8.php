<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Date8</title>
</head>

<body>

	<p>
		<?php 

		echo date ("d-m-Y");

		?>
	</p>


	<p>
		<?php  
		echo date ("d-m-Y",strtotime("-22 days"));

		?>
	</p>

</body>

</html>