

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Css/style.css?=<?php time() ?>" />
    <link rel="stylesheet" href="Css/style-ajouter.css?=<?php time() ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <header>
      <a href="./index.php"><div class="logo"><img src="images/logo.png" alt="" /></div></a>
      <ul>
        <li><a href="dashboardClubs.php">gestion de clubs</a></li>
        <li><a href="lesmembres.php">gestion des apprenanats</a></li>
      </ul>
    </header>
    <div class="titre-cards">
      <div class="membre">
      <h2>List of member</h2>
      <button class="button">
        <a class="btn btn-primary" href="ajouterUnApp.php" role="button" >+ Ajouter un membre</a>
      </button>
     <table class="tableau-style">
       <thead>
        <tr>
            <th>Id</th>
            <th>Nom ?Nom_complet</th>
            <th>Age</th>
            <th>class</th>
            <th>club</th>
            <th>role d'apprenant</th>
            <th>Created at</th>
        </tr>
       </thead>

      <?php
      // inclue la page coonexion
      include "connection.php";
      //requete pour affichier la liste de membre
      $req=mysqli_query  ($con ,"SELECT id_apprenant,Nom_complet,club.Nom_club,age,classe,Nom_Club,role FROM `apprenant`INNER JOIN club ON club.id_club = apprenant.id_Club;");
    //   $sql = "SELECT *,club.Nom_club FROM `apprenant`\n"

    // . "INNER JOIN club ON club.id_club = apprenant.id_Club;";
      if(mysqli_num_rows($req)==0){
        // s'il n'exist pas des membres dans la base de donnee affichier le message
        $pas="il n'y a pas de membre ajouter";

      }else{
        // sinon ,affichier la liste de membre
        while($row=mysqli_fetch_assoc($req)){
          ?>
             <tr>
                <td><?=$row['id_apprenant']?></td>
                <td><?=$row['Nom_complet']?></td>
                <td><?=$row['age']?></td>
                <td><?=$row['classe']?></td>
                <td style="width:2%"><?=$row['Nom_Club']?></td>
                <td style="width:2%"><?=$row['role']?></td>
                <!-- nous alons mettre l'id de chaque membre dans ce lien-->
                <td>
                  <a href="ModifierApp.php?id=<?=$row["id_apprenant"]?>"> <button id="botton-modifier" class="botton-modifier"> modifier </button></a>
                  <a href="suprimer-membre.php?id=<?=$row["id_apprenant"]?>"> <button id="botton-suprimer"  class="botton-suprimer">suprimer</button></a>
                </td>

             </tr>
          <?php
        }
      }
      ?>

</table>
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
