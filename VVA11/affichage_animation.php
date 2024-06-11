<?php
 session_start()
?>

<!doctype html>
<html>
  <head>
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
    $idc=mysqli_connect("localhost", "root", "","gacti");
    $requete="select * from animation";
    $resultat=mysqli_query( $idc, $requete);
    ?>
    <br><br><br><br>

    <center><h1>Affichage de toutes les animations</h1></center><br><br>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
        <table class="table" border=1>

          <tr>
            <td>Description</td>
            <td>Durée</td>
            <td>Limite d'âge</td>
            <td>Tarif</td>
            <td>Nombre de places</td>
            <td>Commentaire</td>
            <td>Difficulté</td>
            <td>Voir les activités</td>

            
          </tr>

          <?php 
            while($enreg=mysqli_fetch_array($resultat))
            {
              ?>
          <tr>
            
            <td><?php echo $enreg["DESCRIPTANIM"]; ?></td>
            <td><?php echo $enreg["DUREEANIM"]; ?></td>
            <td><?php echo $enreg["LIMITEAGE"]; ?></td>
            <td><?php echo $enreg["TARIFANIM"]; ?></td>
            <td><?php echo $enreg["NBREPLACEANIM"]; ?></td>
            <td><?php echo $enreg["COMMENTANIM"]; ?></td>
            <td><?php echo $enreg["DIFFICULTEANIM"]; ?></td>
            <td><?php echo"<a href='affichage_act.php?CODEANIM=".$enreg['CODEANIM']."'>Voir les activités</a>";?></td>


            
            
          </tr>
          <?php }?>
        </table>
      
        <?php
        mysqli_close($idc);?>
      </div>
    <div class="col-1"></div>
    </div>


  </body>

  
</html>