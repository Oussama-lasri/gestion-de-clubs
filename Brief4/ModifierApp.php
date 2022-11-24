<?php
session_start();
include 'connection.php';
if(!isset($_SESSION['id'])){
  header('location: formLogin.php');
}

?>
<?php
include 'connection.php';
$id = $_GET['id'];
$sql = "select * from `apprenant` where id_apprenant='$id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$NomApp1 = $row['Nom_complet'];
$ClasseApp1 = $row['classe'];
$ageApp1 = $row['age'];
$role1 = $row['role'];
if (isset($_POST['submit'])) {
  $NomApp = $_POST['NomApp'];
  $ClasseApp = $_POST['ClasseApp'];
  $ageApp = $_POST['ageApp'];
  $role = $_POST['roleApp'];
  $sql = "update `apprenant` set id_apprenant='$id',Nom_complet='$NomApp',classe='$ClasseApp',age='$ageApp',role='$role' where id_club='$id'";
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
    <h2>formulaire d'ajoute un apprenant</h2>
    <form method="post" action="">
      <div class="input-box">
        <input type="text" placeholder="Le nom d'apprenant" name="NomApp" value=<?php echo $NomApp1 ?> required />
      </div>
      <div class="input-box">
        <input type="text" placeholder="La Classe d'apprenant" name="ClasseApp" value=<?php echo $ClasseApp1 ?> required />
      </div>
      <div class="input-box">
        <input type="number" placeholder="L'age d'apprenant" name="ageApp" value=<?php echo $ageApp1 ?> required />
      </div>
      <div class="input-box">
        <input type="text" placeholder="Le role d'apprenant" name="roleApp" value=<?php echo $role1 ?> required />
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