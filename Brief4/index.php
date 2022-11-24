
<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Acceuil</title>
  <link rel="stylesheet" href="Css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <div class="logo"><img src="images/logo.png" alt="" /></div>
    <button type="submit"><a href="formLogin.php" class="a">Login</a></button>
  </header>
  <div class="container">
    <h2>WELCOME TO THE</h2>
    <a href="#"> <img src="images/logo5.png" alt="youcodeClubs" /></a>
    <h2>A FANTASTIC CLUBS FOR YOU</h2>
  </div>

  <!-- <div class="contenu-famous-clubs">
      <div class="img-club">
        <img src="pexels-bich-tran-669996.jpg" />
      </div>

      <div class="text-club">
        <h3>titre Club</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro
          obcaecati fugit nobis nihil fugiat tempore expedita eos incidunt sunt,
          ipsam amet numquam possimus iste, unde eius. Aspernatur voluptates
          tempore aliquid.
        </p>
        <div><img src="images/group.png" /><span>26</span></div>
      </div>
    </div> -->
  <div class="titre-cards">
    <h2>LES CLUBS D4ECOLE</h2>
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
                <!-- <button class='card-btn'><a href='Update.php?id_club=$id_Club'>Modifier</a></button>
                <button class='card-btn'><a href='Delete.php?deleteId=$id_Club'>Supprimer</a></button> -->
              </div>
            </div>
          </div>
        </div>";
        }
      }
      ?>
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