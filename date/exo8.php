<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Date7</title>
</head>

<body>

	<p>
		<?php 

		echo date ("d-m-Y");

		?>
	</p>


	<p>
		<?php  
		echo date ("d-m-Y",strtotime("+20 days"));

		?>
	</p>

</body>

</html>