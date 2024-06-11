<?php
 session_start()
?>

<!doctype html>
<html>
  <head>
    <
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta charset="utf-8">
  
    <title>VVA</title>

    <style>
  td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}
</style>

  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <?php
    @include('menu.php');
    $idc=mysqli_connect("localhost", "root", "", "gacti");
    if ($_SESSION['typeprofil'] == 'va'){
    $nomuser= $_SESSION['nomuser'];
    $requete= "select * from inscription where user = '$nomuser' ";
    } else if ($_SESSION['typeprofil'] == 'en'){
      $requete="SELECT * FROM inscription";
    }
    $resultat=mysqli_query($idc,$requete);
    ?>

    <br><br>
    <?php if ($_SESSION['typeprofil'] == 'encadrant'){?>
             <center><h1>Toutes les réservations</h1></center><br><br>
            <?php  } else if ($_SESSION['typeprofil'] == 'va'){?>
              <center><h1>Mes réservations</h1></center><br><br>
            <?php }?>
    
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table" border="1">

          <tr>
            <td>Numéro de l'inscription</td>
            <td>User</td>
            <td>Code Animation</td>
            <td>Date de l'activité</td>
            <td>Date de l'inscription</td>   

            <?php if ($_SESSION['typeprofil'] == 'en'){?>
             <td>Inscrit</td>
            <?php  } else if ($_SESSION['typeprofil'] == 'va'){?>
              <td>Annulation</td>
            <?php }?>
          </tr>


          <?php 
            while($enreg=mysqli_fetch_array($resultat))
            {
              ?>
          <tr>
            
            <td><?php echo $enreg["NOINSCRIP"]; ?></td>
            <td><?php echo $enreg["USER"]; ?></td>
            <td><?php echo $enreg["CODEANIM"]; ?></td>
            <td><?php echo $enreg["DATEACT"]; ?></td>
            <td><?php echo $enreg["DATEINSCRIP"]; ?></td>
            <td><?php 
            if ($_SESSION['typeprofil'] == 'va'){
              if($enreg["DATEANNULE"]==NULL){
              echo"<a href='annulation_inscription.php?NOINSCRIP=".$enreg['NOINSCRIP']."'>Annulation</a>";
              }
              else{
              echo'Annulé';
              }
            }
            else if ($_SESSION['typeprofil'] == 'en'){
              echo'Inscrit';
          }
            ?></td>
            <?php }?>
           
          </tr>
         
        </table>
      
        <?php
        mysqli_close($idc);?>
      </div>
    <div class="col-1"></div>
    </div>
    <?php
      if(isset($_SESSION['place'])){
        unset($_SESSION['place']);
        echo"Il n'y a plus de places";
      }
      if(isset($_SESSION['inscrit'])){
        unset($_SESSION['inscrit']);
        echo"Vous êtes déjà inscrit";
      }

    ?>
  </body>
</html>