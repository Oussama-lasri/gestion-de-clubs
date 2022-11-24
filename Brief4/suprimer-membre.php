<?php
//connexion a la base de donnee
include_once"connection.php";
//récupération de l'id dans le lien
$id=$_GET['id'];
//requéte de suppression
$req=mysqli_query($con ,"DELETE FROM table_apprenant  WHERE id=$id");
//rediction vers la page les membres .php
header("Location:lesmembres.php");
?>