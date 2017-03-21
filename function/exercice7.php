<!DOCTYPE html>
<html>

<head>
	<title>function7</title>
</head>

<body>

<?php  

function ageGenre($age, $genre){
	if($age >= 18){
       
       $majorite = "majeur(e). ";	

	}

    else{
        $majorite = "mineur(e). ";
    
    };

    if($genre == "Homme"){
    	$civilite = "Vous etes un Homme ";
    } 

    elseif($genre == "Femme"){
        $civilite = "Vous etes une Femme ";
    };

    return $civilite.$majorite;
};

echo ageGenre(41, "Femme");

?>

</body>

</html>
	