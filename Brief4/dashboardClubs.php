<?php
session_start();
include 'connection.php';
if(!isset($_SESSION['id'])){
  header('location: formLogin.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>gestion des clubs</title>
  <link rel="stylesheet" href="Css/style.css" <?php time() ?>/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <div class="logo"><img src="images/logo.png" alt="" /></div>
    <ul>
      <li><a href="#">gestion de clubs</a></li>
      <li><a href="lesmembres.php">gestion des apprenanats</a></li>
      <button type="submit"><a href="logout.php" class="a">logout</a></button>
      <li></li>

    </ul>
  </header>
  <div class="titre-cards dashboard">
    <h2>LES CLUBS</h2>
    <div class="grid">
      <?php
      $sql = "select * from `club`";
      $result = mysqli_query($con, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id_Club = $row['id_club'];
          $img = $row['logo'];
          $Nom_Club = $row['Nom_club'];
          $Date_Creation = $row['dateCreation'];
          $descreption = $row['Descreption'];
          echo  " 
              <div class='card-item'>
              <div class='card'>
              <img class='card-img' src='images/$img' alt='image-club' />
              <div class='card-content'>
                <h1 class='card-header'>$Nom_Club</h1>
                <p class='card-text'>$descreption</p>
                <p class='card-text'>la date de creation : $Date_Creation</p>  
                <div class='btns-dashboard'>
                <button class='card-btn'><a href='Update.php?id_club=$id_Club'>Modifier</a></button>
                <button class='card-btn'><a href='Delete.php?deleteId=$id_Club'>Supprimer</a></button>
              </div>
            </div>
          </div>
        </div>";
        }
      }
      ?>
      <!-- <div class="card-item">
        <div class="card">
          <img class="card-img" src="images/pexels-bich-tran-669996.jpg" alt="" />
          <div class="card-content">
            <h1 class="card-header">card</h1>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
              quam impedit deleniti doloremque ut quibusdam magnam, soluta cum
              eaque fugit, minus, voluptates non facilis! Suscipit ab corporis
              voluptates architecto eligendi.
            </p>
            <div class="btns-dashboard">
              <button class="card-btn">Modifier</button>
              <button class="card-btn">Supprimer</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card-item">
        <div class="card">
          <img class="card-img" src="images/pexels-bich-tran-669996.jpg" alt="" />
          <div class="card-content">
            <h1 class="card-header">card</h1>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
              quam impedit deleniti doloremque ut quibusdam magnam, soluta cum
              eaque fugit, minus, voluptates non facilis! Suscipit ab corporis
              voluptates architecto eligendi.
            </p>
            <div class="btns-dashboard">
              <button class="card-btn">Modifier</button>
              <button class="card-btn">Supprimer</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card-item">
        <div class="card">
          <img class="card-img" src="images/pexels-bich-tran-669996.jpg" alt="" />
          <div class="card-content">
            <h1 class="card-header">card</h1>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
              quam impedit deleniti doloremque ut quibusdam magnam, soluta cum
              eaque fugit, minus, voluptates non facilis! Suscipit ab corporis
              voluptates architecto eligendi.
            </p>
            <div class="btns-dashboard">
              <button class="card-btn">Modifier</button>
              <button class="card-btn">Supprimer</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card-item">
        <div class="card">
          <img class="card-img" src="images/pexels-bich-tran-669996.jpg" alt="" />
          <div class="card-content">
            <h1 class="card-header">card</h1>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
              quam impedit deleniti doloremque ut quibusdam magnam, soluta cum
              eaque fugit, minus, voluptates non facilis! Suscipit ab corporis
              voluptates architecto eligendi.
            </p>
            <div class="btns-dashboard">
              <button class="card-btn">Modifier</button>
              <button class="card-btn">Supprimer</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card-item">
        <div class="card">
          <img class="card-img" src="images/pexels-bich-tran-669996.jpg" alt="" />
          <div class="card-content">
            <h1 class="card-header">card</h1>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
              quam impedit deleniti doloremque ut quibusdam magnam, soluta cum
              eaque fugit, minus, voluptates non facilis! Suscipit ab corporis
              voluptates architecto eligendi.
            </p>
            <div class="btns-dashboard">
            <button class="card-btn">Modifier</button>
            <button class="card-btn">Supprimer</button>
          </div>
          </div>
        </div>
      </div> -->

      <a href="formAjouteClub.php"><img src="images/plus.png" class="plus" /></a>

    </div>
  </div>
  
  <footer>
    <div class="footer-content">
      <h3>Youcode clubs</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste
        doloremque commodi repudiandae itaque porro mollitia voluptate quae
        numquam aperiam laborum? Iure obcaecati expedita assumenda velit,
        reiciendis itaque tenetur nisi suscipit?
      </p>
      <ul class="socials-media">
        <li>
          <a href="#"><i class="fa fa-facebook"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-google-plus"></i></a>
        </li>
        <li>
          <a href="#"><i class="fa fa-linkedin-square"></i></a>
        </li>
      </ul>
    </div>
    <div class="footer-bottom">
      <p>copyright &copy;2022 Youcode. designed by <span>Team</span></p>
    </div>
  </footer>
</body>

</html>
