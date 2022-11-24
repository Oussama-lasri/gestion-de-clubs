<?php
include 'connection.php';

?>

<?php

if (isset($_POST['user']) && isset($_POST['password'])) {
  $user = $_POST['user'];
  $password = $_POST['password'];
  if (empty($user)) {
    header("location:formLogin.php?error=l'utilisateur est obligatoire");
    exit();
  } else if (empty($password)) {
    header("location:formLogin.php?error=password est obligatoire");
    exit();
  } else {
    $sql = "SELECT * FROM admin WHERE email='$user' AND password='$password'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result)=== 1) {
      $row = mysqli_fetch_assoc($result);
        if($row['email']=== $user && $row['password']===$password){
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['user'] = $row['user'];
            $_SESSION['password'] = $row['password'];
            header("location:dashboardClubs.php");
            exit();
      }  
    }else{
      header("location:formLogin.php?error=l'utilisateur ou mot de passe  non existe");
    exit();
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Connexion</title>
  <link rel="stylesheet" href="Css/styleConnexion.css">
</head>

<body>
  <div class="wrapper">
    <h2>Connexion</h2>

    <form method="post" action="">
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <div class="input-box nom">
        <input type="text" placeholder="L'utilisateur" name="user" />
      </div>
      <div class="input-box">
        <input type="text" placeholder="Mot de passe" name="password" />
      </div>
      <div class="input-box">
        <input type="submit" name="login" value="Connexion" />
      </div>
    </form>
  </div>
</body>

</html>