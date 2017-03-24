<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>global variable1</title>
	<!-- <link rel="stylesheet" type="text/css" href="./css/style.css">  -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


	<?php
    echo $_SERVER["HTTP_USER_AGENT"]." ";
	echo $_SERVER["REMOTE_ADDR"]." ";
	echo $_SERVER["SERVER_NAME"];

	?>

</body>

</html>