<?php
session_start();
if(!isset($_SESSION['id'])){
  header('location: formLogin.php');
}
?>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
  $NomClub = $_POST['NomClub'];
  $DescreptionClub = $_POST['DescreptionClub'];
  $LogoClub = $_POST['LogoClub'];
  $slectClub = $_POST['selectClub'];
  $sql = "insert into `club` (Nom_club,logo,Descreption) values ('$NomClub','$LogoClub','$DescreptionClub')";
  $result = mysqli_query($con,$sql);
  if($result){
    header ('location:dashboardClubs.php');
  }else{
    die(mysqli_error($con));
  }
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Css/styleFAC.css">
    <title>formulaire d'ajoute un club</title>
  </head>
  <body>
    <div class="wrapper">
      <h2>Formulaire d'ajouter un Club</h2>
      <form method="post">
        <div class="input-box">
          <input type="text" placeholder="La nom de club" name="NomClub" required />
        </div>
        <div class="input-box">
          <input type="file" id="logo" accept="image" name="LogoClub" required />
        </div>
        <div class="descreption">
          <textarea
            placeholder="description de club"
            name="DescreptionClub" 
            required
          ></textarea
          >
        </div>
        <div class="input-box Btn">
          <input type="submit" name="submit" value="Valider" />
        </div>
      </form>
    </div>
  </body>
</html>
