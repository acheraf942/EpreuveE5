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
section
{
  position: relative;
  width: 100%;
  height: 100vh;
  padding: 100px;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
}
section::before
{
  content: "";
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;

}
section img
{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  pointer-events: none;
}

section img#moon
{
  mix-blend-mode: screen;
}
section img#mountains_front
{
  z-index: 10;
}
</style>

  </head>

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
                    <a class="nav-link" href="ajout_animation.php">Enregistrer une animation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="affichage_animation.php">Animations</a>
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

    <br><br><br><br>
        <div class="row">
          <div class="col-12">
            <section>
              <img src="stars.png" id="stars">
                
                <form action="modification.php" method="POST">  
                  <h2>Modification des animations</h2><br> 

                  <div class="form-floating mb-3">
                    <select class="form-select" name="codeanim">   
                    <?php 
                      $idc=mysqli_connect("localhost","root","", "gacti");

                      $requete="SELECT CODEANIM, NOMANIM FROM animation";
                      $resultat=mysqli_query($idc,$requete) or die (mysqli_error());
                      while ($result = mysqli_fetch_array($resultat)) 
                      { 
                      echo '<option value="'.$result['CODEANIM'].'">'.$result['NOMANIM'].'</option>';
                      } 
                      ?> 
                    </select>
                  </div>  

                  <br>
                  <div class="gap-2 col-2 mx-auto">
                    <button class="btn btn-secondary" type="submit" name="submit" value="Modifier">Modifier</button>
                  </div>

                </form>

            <img src="mountains_front.png" id="mountains_front">
            <div class="content">
            </div>
          </section>
        </div>

        </div>


</body>
</html>