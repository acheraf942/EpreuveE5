<?php
 session_start();
?>

<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta charset="utf-8">
  
    <title>VVA</title>
  <!--code css pour le tableau-->
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
    $code=$_GET['CODEANIM'];
    $nomuser=$_SESSION['nomuser'];
    //récupère toutes les activités de l'animation sélectionnée qui sont Ouverte et Incertaine pour le vacanciers.
    if ($_SESSION['typeprofil'] == 'vacancier'){

        $requete="SELECT activite.CODEANIM, activite.DATEACT, PRIXACT, HRDEBUTACT,HRFINACT,PRENOMRESP 
        FROM activite 
        WHERE (CODEETATACT='1' OR CODEETATACT='3') 
        AND CODEANIM= '$code'
        AND DATEACT BETWEEN (SELECT DATEDEBSEJOUR FROM compte WHERE compte.USER='alexis')
        AND (SELECT DATEFINSEJOUR FROM compte WHERE USER='$nomuser')";
        $resultat=mysqli_query($idc,$requete);

        if(mysqli_num_rows($resultat)==0){
          echo"Aucune activité de cette animation n'est dans vos dates de séjour";
        }

    } else if ($_SESSION['typeprofil'] == 'en'){
      //pour l'encadrant récupération de toutes les activités peut importe leur état selon l'animation choisie.
      $requete="SELECT CODEANIM, NOMETATACT, DATEACT, PRIXACT, HRDEBUTACT,HRFINACT,PRENOMRESP 
      FROM activite
      INNER JOIN etat_act ON activite.CODEETATACT=etat_act.CODEETATACT
      WHERE CODEANIM='$code'";
      $resultat=mysqli_query($idc,$requete);

    }
    
    ?>
    <br><br>
    
    <center><h1>Liste des activités</h1></center><br><br>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
        <table class="table" border="1">

          <tr>
            <td>Code Anim</td>
            <td>Date activité</td>
            <td>Prix</td>
            <td>Heure début</td>
            <td>Heure fin</td>
            
            <td>Prénom du responsable</td>            
            <?php if ($_SESSION['typeprofil'] == 'en'){?>
            <td>Etat de l'activité</td>
            <td>Annulation</td>
          <?php  } else if ($_SESSION['typeprofil'] == 'va'){?>
            <td>Inscription</td>

          <?php }?>

            
          </tr>

          <?php 
            while($enreg=mysqli_fetch_array($resultat))
            {
              ?>
          <tr>
            
            <td><?php echo $enreg["CODEANIM"]; ?></td>
            <td><?php echo $enreg["DATEACT"]; ?></td>
            <td><?php echo $enreg["PRIXACT"]; ?></td>
            <td><?php echo $enreg["HRDEBUTACT"]; ?></td>
            <td><?php echo $enreg["HRFINACT"]; ?></td>
            
            <td><?php echo $enreg["PRENOMRESP"]; ?></td>

            <?php if ($_SESSION['typeprofil'] == 'en'){?>
            <td><?php echo $enreg["NOMETATACT"];?></td>
            <td><?php echo"<a href='annulation.php?CODEANIM=".$enreg['CODEANIM']."&DATEACT=".$enreg['DATEACT']."'>Annulation</a>";?></td>

            <?php  } else if ($_SESSION['typeprofil'] == 'va'){?>
              <td><?php echo"<a href='inscription_act.php?CODEANIM=".$enreg['CODEANIM']."&DATEACT=".$enreg['DATEACT']."'>Inscription</a>";?></td>
            <?php }?>
            
          
          </tr>
          <?php }?>
        </table>
        <div class="d-grid gap-2 col-6 mx-auto">
              <a class="btn btn-secondary" href='affichage_animation.php'>Retour aux animations</a>
        </div>
      
        <?php
        mysqli_close($idc);?>
      </div>
    </div>

  </body>
</html>