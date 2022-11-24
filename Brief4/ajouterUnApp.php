<?php
session_start();
if (!isset($_SESSION['id'])) {
  header('location: formLogin.php');
}
?>

<?php
include 'connection.php';
if (isset($_POST['submit'])) {
  $NomClub = $_POST['NomClub'];
  $DescreptionClub = $_POST['DescreptionClub'];
  $LogoClub = $_POST['LogoClub'];
  $slectClub = $_POST['selectClub'];
  $sql = "insert into `club` (Nom_club,logo,Descreption) values ('$NomClub','$LogoClub','$DescreptionClub')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location:dashboardClubs.php');
  } else {
    die(mysqli_error($con));
  }
}
?>
<!-- ajouter un apprenanats -->
<?php


include 'connection.php';
if (isset($_POST['submit'])) {
$Nom=$_POST['NomApp'];
$classe=$_POST['ClasseApp'];
$age=$_POST['ageApp'];
$role=$_POST['roleApp'];
$selectClub=$_POST['selectClub'];
$sql = "INSERT INTO `apprenant` (Nom_complet,classe,age,role,id_Club) values ('$Nom','$classe','$age','$role','$selectClub')";
$result = mysqli_query($con, $sql);
if ($result) {
  
  header('location:dashboardClubs.php');
} else {
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
  <title>formulaire d'ajoute un apprenant</title>
</head>

<body>
  <div class="wrapper">
    <h2>formulaire d'ajoute un apprenant</h2>
    <form method="post" action="">
      <div class="input-box">
        <input type="text" placeholder="Le nom d'apprenant" name="NomApp" required />
      </div>
      <div class="input-box">
        <input type="text" placeholder="La Classe d'apprenant" name="ClasseApp" required />
      </div>
      <div class="input-box">
        <input type="number" placeholder="L'age d'apprenant" name="ageApp" required />
      </div>
      <div class="input-box">
        <input type="text" placeholder="Le role d'apprenant" name="roleApp" required />
      </div>
      <div class="input-box">
        <select name="selectClub">
          <option value="-1">selectionner votre club</option>
          <?php
          $sql = "select * from `club`";
          $result = mysqli_query($con, $sql);
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $id_Club = $row['id_club'];
              $Nom_Club = $row['Nom_club'];
          ?>
              <option value="<?php echo $id_Club ?>"><?php echo $Nom_Club ?></option>
          <?php }
          } ?>
        </select>
      </div>
      <div class="input-box Btn">
        <input type="submit" name="submit" value="Valider" />
      </div>
    </form>
  </div>
</body>

</html>