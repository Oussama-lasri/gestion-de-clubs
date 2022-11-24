<?php
include 'connection.php';
$id = $_GET['id_club'];
$sql = "select * from `club` where id_club='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$img = $row['logo'];
$Nom_Club = $row['Nom_club'];
$descreption = $row['Descreption'];
if (isset($_POST['submit'])) {
  $NomClub = $_POST['NomClub'];
  $DescreptionClub = $_POST['DescreptionClub'];
  $LogoClub = $_POST['LogoClub'];
  $sql = "update `club` set id_club='$id',Nom_club='$NomClub',logo='$LogoClub',Descreption='$DescreptionClub' where id_club='$id'";
  $result = mysqli_query($con, $sql);
  if ($result) {
    // echo 'update seccess';
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
  <title>Modifier d'ajoute un club</title>
</head>

<body>

  <div class="wrapper">
    <h2>Formulaire de Modifier un Club</h2>
    <form method="post">
      <div class="input-box">
        <input type="text" placeholder="La nom de club" name="NomClub" value=<?php echo $Nom_Club ?> required />
      </div>
      <div class="input-box">
        <input type="file" id="logo" accept="image" name="LogoClub" required value="image" />
      </div>
      <div class="descreption">
        <textarea placeholder="description  hh de club" name="DescreptionClub" required><?php echo $descreption ?></textarea>
      </div>
      <div class="input-box Btn">
        <input type="submit" name="submit" value="Modifier" />
      </div>
    </form>
  </div>
</body>

</html>