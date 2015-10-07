<?php
include 'fonction.php';
$users = array(
	"noorman" => array(
			"username" => "Noorman",
			"password" => "123"
		),
	"karim" => array(
			"username" => "Karim",
			"password" => "456"
		),
);


?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="login-exercise">
    <meta name="author" content="Noorman">
    <title>Login exercise</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

<?php 
	// echo $users[$pseudo]["username"];
	$pseudo = $_POST['pseudo'];
	$password = $_POST['password'];
	$identifiant = strtolower($pseudo);
	if($pseudo === $users[$identifiant]["username"] && $password === $users[$identifiant]["password"]) {
		Echo "Okay";
	}else{
		Echo "Pas Okay";
	}

	
	

	


/*
	$pseudo = $_POST['pseudo'];
	$password = $_POST['password'];
	if($pseudo === 'Noorman' && $password === 'password') {
    	echo 'Okay';
	} elseif ($password === '') {
		echo 'Veuillez entrer un mot de passe';
	} else {
	  	echo 'Mauvais mot de passe ou pseudo';
	}
*/
?>

	</body>
</html>