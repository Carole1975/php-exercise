<?php 

session_start();

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
	<title>modification Cookies</title>
</head>

<body>

    <h1>Modification des cookies</h1>


    <?php  

    echo"<form action='inscription.php' method='POST'>
<label for=''>Login</label>
<input type='text' name='login' value=".$_COOKIE['login'].">
<label for=''>Password</label>
<input type='motdepasse' name='mdp' value=".$_COOKIE['motdepasse'].">
<input type='submit' value='modifier'></form>";
    
    ?>

</body>

</html>