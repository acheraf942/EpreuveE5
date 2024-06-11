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
  padding:40px;
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

    $idc=mysqli_connect("localhost","root","", "gacti");

    $codeanim=$_POST['codeanim'];

    $requete="SELECT * from animation where CODEANIM='$codeanim'";

    $resultat= mysqli_query($idc,$requete);

    $ligne=mysqli_fetch_array($resultat);
        echo '<center><h2> Modification des informations </h2></center></br>';

        echo '<div class="row">
                <div class="col-2">
                </div>
                  <div class="col-7">
                    <form action="up.php" method="POST">';
                

                echo '<div class="form mb-3">
                <input class="form-control" type="text" name="codeanim" value="'.$ligne["CODEANIM"].'" readonly>
                </div>';

                echo '<div class="form mb-3">
                <input type="text" class="form-control" name="NOMANIM" value="'.$ligne["NOMANIM"].'""></div>';

               
                echo '<div class="form mb-3"><input type="date" class="form-control" name="DATEVALIDITEANIM" value="'.$ligne["DATEVALIDITEANIM"].'"></div>';

                echo '<div class="form mb-3">
                <input type="text" name="DUREEANIM" class="form-control" value="'.$ligne["DUREEANIM"].'"></div>';                


                echo '<div class="form mb-3">
                <input type="text" name="LIMITEAGE" class="form-control" value="'.$ligne["LIMITEAGE"].'""></p>';


                echo '<div class="form mb-3">
                <input type="text" name="TARIFANIM" class="form-control" value="'.$ligne["TARIFANIM"].'"></div>';

                echo '<div class="form mb-3">
                <input type="text" name="DESCRIPTANIM" class="form-control" value="'.$ligne["DESCRIPTANIM"].'""></div>';

                echo '<div class="form mb-3">
                <input type="text" name="COMMENTANIM" class="form-control" value="'.$ligne["COMMENTANIM"].'""></div>';

                echo '<div class="form mb-3">
                <input type="text" name="DIFFICULTEANIM" class="form-control" value="'.$ligne["DIFFICULTEANIM"].'""></div>';

                echo '<div class="form mb-3">
                <button class="btn btn-secondary" type="submit" name="submit" value="Modifier">Modifier</button>

                <button class="btn btn-secondary" type="reset" value="Annuler">Annuler</button>
            </div>';
            echo "</form>
            </div>
            </div>";
         mysqli_close($idc);
?>