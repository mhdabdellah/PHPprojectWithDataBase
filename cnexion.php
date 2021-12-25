<?php
//la connexion avec la base de données
$con=mysqli_connect("localhost","root","","projet");
if(!$con){die("Erreur de type" .mysqli_connect_error()); }
else "OK";
?>