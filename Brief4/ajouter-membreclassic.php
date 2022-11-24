<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="Css/styleFAC.css?=<?php time() ?>">
  <link rel="stylesheet" href="Css/style.css?=<?php time() ?>">
  <title>formulaire d'ajoute d'apprenant</title>
</head>

<body>
  <header>
    <a href="./index.php">
      <div class="logo"><img src="images/logo.png" alt="" /></div>
    </a>
    <ul>
      <li><a href="dashboardClubs.php">gestion de clubs</a></li>
      <li><a href="lesmembres.php">gestion des apprenanats</a></li>
    </ul>
  </header>

  <?php
  //vérifier que le button ajouter a bien été cliqué
  if (isset($_POST['button-valide'])) {
    // extraction des informations envoyé dans des variables par la méthode POST
    extract($_POST);
    // vérifier que tous les champs ont été remplis
    if ($Nom && $Prenom && $Age && $Class && $club && $Role) {
      // requéte d'ajout
      $req = mysqli_query($con, "INSERT INTO table_apprenant VALUE(NULL ,'$Nom','$Prenom','$Age','$Class','$club','$Role')");
     
      if ($req) {
        //si la requéte a été effectuée avec succés ,on fait une rediction
        header("Location: lesmembres.php");
      } else {
        //si non
        $message = "apprenant non ajouté";
      }
    }
  } else {
    // sinon
    $message = "Veuillez remplir tous les champs";
  }

  ?>

  <div class="wrapper">
    <h2>Entrer les données d'apprenat</h2>

    
    
    <form action="" method="POST">
      <div class="input-box">
        <input name="Nom" id="username" type="text" placeholder="Nom" required />
      </div>
      <div id="namerror">
      </div>
      <div class="input-box">
        <input name="Prenom" type="text" id="lastname" placeholder="Prenom" />
      </div>
      <div class="input-box">
        <input name="Age" type="text" id="Age" placeholder="Age" />
      </div>

      <div>
        <select name="Class" id="Class">
          <option value="Ada lovelace">Ada lovelace</option>
          <option value="Ada lovelace">alan thurine</option>
          <option value="Ada lovelace">java</option>

        </select>
      </div>

      <div class="input-box">
        <input name="Role" id="Role" type="text" placeholder="Role d'pprenant"></input>
      </div>

      <div>
        <select name="club" id="Class " placeholder="club">
          <?php
          $sql = "select Nom_du_club from table_clubs";
          $result = mysqli_query($con, $sql);
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<option value="' . $row['Nom_du_club'] . '">' . $row['Nom_du_club'] . '</option>';
            }
          }
          ?>
        </select>
        <span id="roleerror"></span>
      </div>


      <div id="discerror"></div>


      <div class="input-box Btn">
        <input name="button-valide" type="submit" value="Valider" />
      </div>

    </form>
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

  <script type="text/javascript">
    function clubajouter() {

      var nam = document.getElementById('nam').value;
      var descri = document.getElementById('description').value;


      var checknam = /^[A-Za-z. ]{3,30}$/;
      var checkdesc = /^[A-Za-z. ]{3,30}$/;

      if (checknam.test(nam)) {
        document.getElementById('namerror').innerHTML = " ";

      } else {
        document.getElementById('namerror').innerHTML = "**nam is invalid ";

      }
      if (checkdesc.test(descri)) {
        document.getElementById('discerror').innerHTML = " ";

      } else {
        document.getElementById('discerror').innerHTML = "**nam is invalid ";

      }
    };
  </script>


</body>

</html>