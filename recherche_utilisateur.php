<?php
//Récupération de données
$recherche = $_POST['eml'];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.rtl.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.rtl.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.rtl.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.rtl.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.rtl.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
    <title>LIST DES UTILISATEUR </title>
</head>
<body>
<?php
    include "cnexion.php";
?>
    <div class="block">
        <h1><B><i>LIST DES UTILISATEUR</i></B></h1>
        <table class="table table-hover btn-success btn-primary mb-6">
            <thead>
                <th scope="col">Numéro sur la list </th>
                <th scope="col">Nom</th>
                <th scope="col">E-mail</th>
				<th scope="col">Télephone</th>
				<th scope="col" colspan=2>Actions</th>
            </thead>
            <tbody>    
<?php // parcourir les rangs
  $sql= "select * from utilisateur ";
$resultat = mysqli_query($con,$sql);
//test si la nombre de lignes dans la variable $resultat > 0 
// la fonction mysqli_num_rows compte la nombre de lignes stockée dans la variable $resultat
//la variable $resultat contient des ligne retiré apartir d'une base de donnees par la fonction mysqli_query($con,$sql),la resultat du fonction mysqli_query
// la fonction mysqli_query($con,$sql)  prendre deux paramaitre 
//1-$con la variable qui contien la connection avec la base de donnees 
//2-$sql la variable qui contien la requete sql pour selection 
if(mysqli_num_rows($resultat)>0){
while($row=mysqli_fetch_assoc($resultat)){
  if($recherche==$row['id_emp']){
?>
                <tr>
                    <td scope="row"><?php echo $row['id_emp'];?></td>
                    <td scope="row"><?php echo $row['nom']; ?></td>
                    <td scope="row"><?php echo $row['email']; ?></td>
                    <td scope="row"><?php echo $row['tel']; ?></td>
					<td align="center">
                       <a href="modifier_utilisateur.php?edit_id=<?php print($row['id_emp']); ?>" class="btn btn-primary mb-2 btn-success" onclick="return confirm('Êtes-vous sûr de vouloir modifier ce utilisateur  ?');">
				       <font color ="white">Modifier <?php echo "<img src='edit.jpg' width=20% height=20%>"; ?></font></a>
                     </td>
                    <td align="center">
                       <a href="supprimer_utilisateur.php?delete_id=<?php print($row['id_emp']); ?>" class="btn btn-primary mb-2 btn-success" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce utilisateur ?');">
				       <font color ="white">Supprimer <?php echo "<img src='del.jpg' width=20% height=20%>"; ?></font></a>
				
                    </td>
				 </tr>	
                    
<?php
}else if($recherche==$row['nom']){
?>
                <tr>
                    <td scope="row"><?php echo $row['id_emp'];?></td>
                    <td scope="row"><?php echo $row['nom']; ?></td>
                    <td scope="row"><?php echo $row['email']; ?></td>
                    <td scope="row"><?php echo $row['tel']; ?></td>
					<td align="center">
                       <a href="modifier_utilisateur.php?edit_id=<?php print($row['id_emp']); ?>" class="btn btn-primary mb-2 btn-success" onclick="return confirm('Êtes-vous sûr de vouloir modifier ce utilisateur  ?');">
				       <font color ="white">Modifier <?php echo "<img src='edit.jpg' width=20% height=20%>"; ?></font></a>
                     </td>
                    <td align="center">
                       <a href="supprimer_utilisateur.php?delete_id=<?php print($row['id_emp']); ?>" class="btn btn-primary mb-2 btn-success" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce utilisateur ?');">
				       <font color ="white">Supprimer <?php echo "<img src='del.jpg' width=20% height=20%>"; ?></font></a>
				
                    </td>
				 </tr>	
                    
<?php
}else if($recherche==$row['email']){
?>
                <tr>
                    <td scope="row"><?php echo $row['id_emp'];?></td>
                    <td scope="row"><?php echo $row['nom']; ?></td>
                    <td scope="row"><?php echo $row['email']; ?></td>
                    <td scope="row"><?php echo $row['tel']; ?></td>
					<td align="center">
                       <a href="modifier_utilisateur.php?edit_id=<?php print($row['id_emp']); ?>" class="btn btn-primary mb-2 btn-success" onclick="return confirm('Êtes-vous sûr de vouloir modifier ce utilisateur  ?');">
				       <font color ="white">Modifier <?php echo "<img src='edit.jpg' width=20% height=20%>"; ?></font></a>
                     </td>
                    <td align="center">
                       <a href="supprimer_utilisateur.php?delete_id=<?php print($row['id_emp']); ?>" class="btn btn-primary mb-2 btn-success" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce utilisateur ?');">
				       <font color ="white">Supprimer <?php echo "<img src='del.jpg' width=20% height=20%>"; ?></font></a>
				
                    </td>
				 </tr>	
                    
<?php
}else if($recherche==$row['tel']){
?>
                <tr>
                    <td scope="row"><?php echo $row['id_emp'];?></td>
                    <td scope="row"><?php echo $row['nom']; ?></td>
                    <td scope="row"><?php echo $row['email']; ?></td>
                    <td scope="row"><?php echo $row['tel']; ?></td>
					<td align="center">
                       <a href="modifier_utilisateur.php?edit_id=<?php print($row['id_emp']); ?>" class="btn btn-primary mb-2 btn-success" onclick="return confirm('Êtes-vous sûr de vouloir modifier ce utilisateur  ?');">
				       <font color ="white">Modifier <?php echo "<img src='edit.jpg' width=20% height=20%>"; ?></font></a>
                     </td>
                    <td align="center">
                       <a href="supprimer_utilisateur.php?delete_id=<?php print($row['id_emp']); ?>" class="btn btn-primary mb-2 btn-success" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce utilisateur ?');">
				       <font color ="white">Supprimer <?php echo "<img src='del.jpg' width=20% height=20%>"; ?></font></a>
				
                    </td>
				 </tr>	
                    
<?php
}		
}
} else 
{
	echo "<tr>";
	echo "<td colspan='4'>";
echo  "Aucun enregistrement trouvé";
echo "</td>";
}

?>
            </tbody>
        </table>
    </div>
</body>
</html>

