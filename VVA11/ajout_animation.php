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

    <div class="row">
      <div class="col-12">

        <nav class="navbar bg-light fixed-top">
          <div class="container-fluid">
            <img src="photo/montagne.jpg" class="img-fluid">
            <a style="font-size: 30px; font-family: Snell Roundhand, fantasy;"class="navbar-brand" href="#">Villages Vacances Alpes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu de navigation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>

              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ajout_act.php">Enregistrer une activité</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="ajout_animation.php">Enregistrer une animation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="affichage_animation.php">Animations</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="deconnexion.php">Déconnexion</a>
                  </li>
                </ul>
              </div>

            </div>

          </div>
        </nav>

      </div>
    </div>

    <br><br><br><br><br><br><br>


    <center><h1>Enregistrer une animation</h1></center><br><br>

    <div class="row">
        <div class="col-2"></div>
          <div class="col-8">
            <form method="post" action="ajout1_animation.php">


            <div class="form-floating mb-3">
                <input type="text"  name="code_anim" class="form-control" placeholder="user">
                <label for="floatingInput">Code de l'animation</label>
            </div>

            <?php
            $conn=mysqli_connect("localhost", "root","", "gacti") or die(mysqli_error());
            

            $query = "SELECT CODETYPEANIM, NOMTYPEANIM FROM type_anim ORDER BY CODETYPEANIM";
            $result = mysqli_query($conn,$query) or die(mysqli_error()."[".$query."]");
            ?>

            <div class="form-floating mb-3">
              <select class="form-select" placeholder=" " name="type_anim">
              <?php 
              while ($row = mysqli_fetch_array($result))
              {
                  echo "<option value='".$row['CODETYPEANIM']."'>".$row['NOMTYPEANIM']."</option>";
              }
              ?>        
              </select>
            </div>

            <div class="form-floating mb-3">
                <input type="text"  name="nom_anim" class="form-control" placeholder="user">
                <label for="floatingInput">Nom de l'animation</label>
            </div>

            <div class="form-floating mb-3">
                <input type="date"  name="date_crea_anim" class="form-control" placeholder="user">
                <label for="floatingInput">Date crea de l'animation</label>
            </div>


            <div class="form-floating mb-3">
                <input type="date"  name="date_validite_anim" class="form-control" placeholder="user">
                <label for="floatingInput">Date validite de l'animation</label>
            </div>


            <div class="form-floating mb-3">
                <input type="text"  name="duree_anim" class="form-control" placeholder="user">
                <label for="floatingInput">Duree de l'animation</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text"  name="age_anim" class="form-control" placeholder="user">
                <label for="floatingInput">Limite age de l'animation</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text"  name="tarif_anim" class="form-control" placeholder="user">
                <label for="floatingInput">Tarif de l'animation</label>
            </div>


            <div class="form-floating mb-3">
                <input type="text"  name="place_anim" class="form-control" placeholder="user">
                <label for="floatingInput">Place de l'animation</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text"  name="description_anim" class="form-control" placeholder="user">
                <label for="floatingInput">Description de l'animation</label>
            </div>


            <div class="form-floating mb-3">
                <input type="text"  name="commentaire_anim" class="form-control" placeholder="user">
                <label for="floatingInput">Commentaire de l'animation</label>
            </div>


            <div class="form-floating mb-3">
                <input type="text"  name="difficulte_anim" class="form-control" placeholder="user">
                <label for="floatingInput">Difficulté de l'animation</label>
            </div>


            <br>
             <div class="d-grid gap-2 col-8 mx-auto">
                <button class="btn btn-secondary" type="submit" name="submit" value="Ajouter">Ajouter</button>

                <button class="btn btn-secondary" type="reset" value="Effacer">Effacer</button>
            </div>
                                               


            </form>
          </div>
        </div>

  </body>
</html>