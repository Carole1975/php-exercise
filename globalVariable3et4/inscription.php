<?php 

setcookie("login", $_POST["login"], time()+ 3600);
setcookie("mdp", $_POST["mdp"], time()+ 3600);  

 ?>

 <!DOCTYPE html>
 <html>
 
 <head>
    <meta charset="utf-8">
 	<title>fiche de connection</title>
 </head>
 
 <body>
 
 <h1> Hello</h1>

 <?php

 echo $_COOKIE["login"]. " ". $_COOKIE["mdp"];

   ?>
 
 </body>
 
 </html>