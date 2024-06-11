<!doctype html>
<html lang="fr">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="generator" content="Hugo 0.98.0">
    <meta charset="utf-8">
  
    <title>VVA</title>

<?php
        $idc=mysqli_connect("localhost","root","", "gacti");
        session_start();
        if ($_SESSION['typeprofil'] == NULL) { $_SESSION['typeprofil'] = 'visiteur';}
?>

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
#btn
{
  text-decoration: none;
  padding: 8px 30px;
  border-radius: 40px;
  background: #fff;
  color: #2b1055;
  transform: translateY(100px);
  font-size: 1.5em;
  z-index: 9;
  border: 2px dotted black;
   /*transform: translateY(0px);*/
}
.sec
{
  position: relative;
  min-height: 500px;
  padding: 100px;

}
.sec h2
{
  font-size: 3.5em;
  margin-bottom: 10px;
  color: #000000;
}
.sec p
{
  font-size: 1.2em;
  color: #000000;
}
</style>

  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <?php 
    @include('menu.php');

   //page quand on n'est pas connecté

    if($_SESSION['typeprofil'] == 'visiteur') {?>


    <section>
      <img src="stars.png" id="stars">
      <img src="moon.png" id="moon">
      <img src="mountains_behind.png" id="mountains_behind">
           <a href="#sec" id="btn">Animations</a>
      <img src="mountains_front.png" id="mountains_front">
      <div class="content">
    </section>

    <div class="sec" id="sec">
        <?php
      $idc=mysqli_connect("localhost", "root", "","gacti");
      $requete="select * from animation";
      $resultat=mysqli_query( $idc, $requete);
      ?>

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
              
              
            </tr>
            <?php }?>
          </table>
        
          <?php
          mysqli_close($idc);?>
        </div>

        <div class="col-1">
          
        </div>
      </div>

      </div class="sec">

       <script type="text/javascript">
        let moon = document.getElementById('moon');
        let stars = document.getElementById('stars');
        let mountains_behind = document.getElementById('mountains_behind');
        let mountains_front = document.getElementById('mountains_front');
        let text = document.getElementById('text');
        let btn = document.getElementById('btn');
        let header = document.querySelector('header');
        window.addEventListener('scroll', function() {
          var value = window.scrollY;
          moon.style.top = -value * -1.05 + 'px';
          stars.style.left = value * 0.25 + 'px';
          mountains_behind.style.top =-value * -0.5 + 'px';
          header.style.top =-value * -0.5 + 'px';
          mountains_front.style.top =-value * 0 + 'px';
          text.style.marginTop = value * 1.5 + 'px';
          btn.style.marginTop = value * 1.5 + 'px';
          text.style.marginRight = value * 4 + 'px';
        });
        </script>


      <?php  }//page quand on est connecté en tant que vacancier
      else if ($_SESSION['typeprofil'] == 'va'){?>

        <h1> &nbsp;&nbsp;Bienvenue&nbsp;
                <?php
                  echo($_SESSION['nomuser']);
                ?>
                  
        </h1><br><br>

          <div class="row">
            <div class="col-3"></div>
              <div class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>

                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="photo/caroussel1.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="photo/caroussel2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="photo/caroussel3.jpg" class="d-block w-100">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually">Avant</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually">Après</span>
                  </button>
                </div>
              </div>
              <div class="col-3"></div>
            </div>

                <?php  } //page quand on est connecté en tant que encadrant
                else if ($_SESSION['typeprofil'] == 'en'){?>

                  <h1> &nbsp;&nbsp;Bienvenue&nbsp;
                <?php
                  echo($_SESSION['nomuser']); 
                ?>
                  
                 </h1><br><br>


            <div class="row">
              <div class="col-3">
                
              </div>
                <div class="col-6">
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="photo/caroussel1.jpg" class="d-block w-100">
                      </div>
                      <div class="carousel-item">
                        <img src="photo/caroussel2.jpg" class="d-block w-100">
                      </div>
                      <div class="carousel-item">
                        <img src="photo/caroussel3.jpg" class="d-block w-100">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually">Avant</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually">Après</span>
                    </button>
                  </div>
                </div>
              <div class="col-3">
                
              </div>
            </div>

            <?php }?>    


  </body>
</html>