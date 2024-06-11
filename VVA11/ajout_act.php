<?php
  session_start()
?>
<!doctype html>
<html>
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="generator" content="Hugo 0.98.0">
    <meta charset="utf-8">
  
    <title>VVA</title>
  </head>
<center>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <?php 
      @include('menu.php');
    ?>


    <center><h1>Enregistrer une activité</h1></center><br><br>
    
    <div class="row">
        <div class="col-3">
          
        </div>
          <div class="col-6">
            <form method="post" action="ajout1_act.php">


            <?php
            $conn=mysqli_connect("localhost", "root","", "gacti") or die(mysqli_error());
            

            $query = "SELECT CODEANIM, NOMANIM FROM animation";
            $result = mysqli_query($conn, $query) or die(mysqli_error()."[".$query."]");
            ?>

            <div class="form-floating mb-3">
              <select class="form-select" placeholder=" " name="code_anim">
              <?php 
              while ($row = mysqli_fetch_array($result))
              {
                  echo "<option value='".$row['CODEANIM']."'>".$row['NOMANIM']."</option>";
              }
              ?>        
              </select>
            </div>


            <div class="form-floating mb-3">
                <input type="date"  name="date_act" class="form-control" placeholder="date">
                <label for="floatingInput">Date</label>
            </div>

             <?php
           $conn= mysqli_connect("localhost", "root","", "gacti") or die(mysqli_error());
           

            $query = "SELECT CODEETATACT, NOMETATACT FROM etat_act";
            $result = mysqli_query($conn, $query) or die(mysqli_error()."[".$query."]");
            ?>

            <div class="form-floating mb-3">
              <select class="form-select" placeholder=" " name="code_etat_act">
              <?php 
              while ($row = mysqli_fetch_array($result))
              {
                  echo "<option value='".$row['CODEETATACT']."'>".$row['NOMETATACT']."</option>";
              }
              ?>
              </select>
            </div> 

            <div class="form-floating mb-3">
                <input type="time"  name="hrdv_act" class="form-control" placeholder="heurerdv">
                <label for="floatingInput">Heure du rendez-vous</label>
            </div>


            <div class="form-floating mb-3">
                <input type="text"  name="prix_act" class="form-control" placeholder="prix">
                <label for="floatingInput">Prix</label>
            </div>


            <div class="form-floating mb-3">
                <input type="time"  name="hdebut_act" class="form-control" placeholder="heuredeb">
                <label for="floatingInput">Heure début</label>
            </div>

            <div class="form-floating mb-3">
                <input type="time"  name="hfin_act" class="form-control" placeholder="user">
                <label for="floatingInput">Heure de finn</label>
            </div>

            <div class="form-floating mb-3">
                <input type="date"  name="dateannule_act" class="form-control" placeholder="user">
                <label for="floatingInput">Date annule act</label>
            </div>


            <div class="form-floating mb-3">
                <input type="text"  name="nom_resp" class="form-control" placeholder="user">
                <label for="floatingInput">Nom responsable</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text"  name="prenom_resp" class="form-control" placeholder="user">
                <label for="floatingInput">Prenomresponsable</label>
            </div>

            <br>
             <div class="gap-2 col-6 mx-auto">
                <button class="btn btn-secondary" type="submit" name="submit" value="Ajouter">Ajouter</button>

                <button class="btn btn-secondary" type="reset" value="Effacer">Effacer</button>
            </div>
                                               


            </form>
          </div>
        </div>

  </body>
</html>