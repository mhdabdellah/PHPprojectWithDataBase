<?php
//la connexion avec la base de données
include "cnexion.php";
//Récupération de données

$nom=$_POST['nom'];
$email=$_POST['eml'];
$tel=$_POST['tel'];



//Insertion de données dans la projet

$sql= "insert into utilisateur values('$nom', '$email','null','$tel')";
if(mysqli_query($con,$sql)){
header("refresh:2;url=ajouter utilisateur (2).html");
}
else {
echo "Erreur d'insertion ";	
}

	

?>  
