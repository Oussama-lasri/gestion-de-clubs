<?php
session_start();
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
    <link rel="stylesheet" href="Css/style.css" />
    <link rel="stylesheet" href="Css/style-ajouter.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <header>
      <div class="logo"><img src="images/logo.png" alt="" /></div>
      <ul>
        <li><a href="dashboardClubs.php">gestion de clubs</a></li>
        <li><a href="#">gestion des apprenanats</a></li>
      </ul>
    </header>
    <div class="titre-cards">
  <div class="membre">
    <h2>List of member</h2>
    <button class="button">
        <a class="btn btn-primary" href="./ajouter.php" role="button" >+ Ajouter un membre</a>
    </button>
    <table class="tableau-style">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Club</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>aziz</td>
                    <td>azouz</td>
                    <td>azoz@gmail.com</td>
                    <td>06565656</td>
                    <td>safi</td>
                    <td>
                        <button class="botton-modifier">modifier</button>
                        <button class="botton-suprimer">suprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>aziz</td>
                    <td>azouz</td>
                    <td>azoz@gmail.com</td>
                    <td>06565656</td>
                    <td>safi</td>
                    <td>
                        <button class="botton-modifier">modifier</button>
                        <button class="botton-suprimer">suprimer</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>aziz</td>
                    <td>azouz</td>
                    <td>azoz@gmail.com</td>
                    <td>06565656</td>
                    <td>safi</td>
                    <td>
                        <button class="botton-modifier">modifier</button>
                        <button class="botton-suprimer">suprimer</button>
                    </td>
                </tr>
            </tbody>
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
