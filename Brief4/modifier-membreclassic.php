<?php
include_once"connection.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Css/styleFAC.css">
    <link rel="stylesheet" href="Css/style.css?=<?php time() ?>" />
    <link rel="stylesheet" href="Css/style-ajouter.css?=<?php time() ?>">

    <title>formulaire d'ajoute d'apprenant</title>
  </head>
  <body>

  <header>
      <a href="./index.php"><div class="logo"><img src="images/logo.png" alt="" /></div></a>
        <ul>
          <li><a href="dashboardClubs.php">gestion de clubs</a></li>
          <li><a href="lesmembres.php">gestion des apprenanats</a></li>
        </ul>
    </header>
    
  

    <div class="wrapper">
      <h2>Entrer les données d'apprenat</h2>
      <form action="" method="POST" >
      <div style="color: rgb(207, 95, 95); margin :0% 30%" class="remplie-les-choix">
        <?php
          //si la variable message exist ,affichons son conenu
          if(isset($message))
          echo $message;
         ?> 
        </div>
        
        <div class="input-box">
          <input name="Nom" id="uername" type="text" placeholder="Nom" value="<?=$row['Nom']?>" required />
        </div>
        <div id="namerror">
      
        </div>
        <div class="input-box">
          <input name="Prenom" type="text" id="lastname" placeholder="Prenom" value="<?=$row['Prenom']?>"/>
        </div>
        <div class="input-box">
          <input name="Age" type="text" id="Age"placeholder="Age"  value="<?=$row['Age']?>" />
        </div>
        
        <div>
          <select name="Class" id="Class">
             <option value="Ada lovelace">Ada lovelace</option>
             <option value="Ada lovelace">Ada lovelace</option>
             <option value="Ada lovelace">Ada lovelace</option>
            
          </select>
       </div>
       
       <div class="input-box">
          <input name="Role" type="text" placeholder="Role d'pprenant" value="<?=$row['Role']?>" ></input>
        </div>

        <div>
          <select name="club" id="Class " placeholder="club">
            <option value="-1">votre choix</option>
          
          </select>
          <span id="roleerror"></span>
       </div>


        <div class="input-box Btn">
          <input name="button-valide" type="submit" value="Valider"   />
        </div>
        
      </form>
    </div>


   <script type="text/javascript">
    function clubajouter(){

    var nam=document.getElementById('nam').value;
    var descri=document.getElementById('description').value;


    var checknam=/^[A-Za-z. ]{3,30}$/;
    var checkdesc=/^[A-Za-z. ]{3,30}$/;
     
    if(checknam.test(nam)){
          document.getElementById('namerror').innerHTML=" ";

    }else{
      document.getElementById('namerror').innerHTML="**name is invalid ";

    }
    if(checkdesc.test(descri)){
          document.getElementById('discerror').innerHTML=" ";

    }else{
      document.getElementById('discerror').innerHTML="**name is invalid ";

    }
  };
   </script>


  </body>
</html>
