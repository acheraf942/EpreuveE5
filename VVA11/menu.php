    <div class="row">
      <div class="col-12">
        <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
          <img src="photo/montagne.jpg">
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

                <?php if($_SESSION['typeprofil'] == 'visiteur') {?>

                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="connexion.php">Connexion</a>
                      </li>


               <?php  } else if ($_SESSION['typeprofil'] == 'va'){?>

                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="affichage_animation.php">Consulter les animations</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="reservation.php">Consulter mes réservations</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="deconnexion.php">Déconnexion</a>
                    </li>

                <?php  } else if ($_SESSION['typeprofil'] == 'en'){?>

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
                      <a class="nav-link" href="animation_modification.php">Modification Animations</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="reservation.php">Consulter les réservations</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="deconnexion.php">Déconnexion</a>
                    </li>

                <?php }?>
              </ul>
              
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>

    <br><br><br><br><br><br>