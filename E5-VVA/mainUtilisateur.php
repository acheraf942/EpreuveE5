<!doctype html>
<style>

::before,
::after {
  box-sizing: border-box;
  
}

body {
    height: 100vh;
    background-image: repeating-linear-gradient(135deg, rgba(93,93,93, 0.1) 0px, rgba(93,93,93, 0.1) 2px,transparent 2px, transparent 4px),linear-gradient(90deg, rgb(255,255,255),rgb(255,255,255));
}

H1{
    font-size: 20px;
    font-family: 'Comic Sans MS';
}

H2{
    font-size: 50px;
    font-family: 'Comic Sans MS';
}

   
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    background-color: grey;
}

/*Basic structure of slider*/
.container{
    width: 80%;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    overflow: hidden;
    border: 10px solid #46494C;
    border-radius: 8px;
    box-shadow: -1px 5px 15px black;
}

/*Area of images*/
.wrapper{
    width: 100%;
    display: flex;
    animation: slide 16s infinite;
}

img{
    width: 100%;
}
li{
    background-color:black;
}
/*Animation activated by keyframes*/
@keyframes slide{
    0%{
        transform: translateX(0);
    }
    25%{
        transform: translateX(-50%);
    }
    
    50%{
        transform: translateX(-100%);
    }
    
    75%{
        transform: translateX(-50%);
    }
    
    100%{
        transform: translateX(0%);
    }
}
</style>




<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="body.css">
	</head>
	
<body>	

		<?php
			session_start();
			$compte = $_SESSION['USER'];
			
		?>
		<H1 class = "titre"><Strong><center>Accueil de <?php echo"$compte";?></center><Strong></H1>
		
		<?php 
			
			
			if ($_SESSION['TYPEPROFIL'] == "en") {?>
			<nav>
				<ul>
                    <li class="menu-animaux"><a href="#">Activite</a>
                        <ul class="submenu">
                            <li><a href="activite.php" >Ajouter activite</a></li>
                            <li><a href="afficherActivite.php">Afficher Activite</a></li>
                        </ul>
                    </li>

                    <li class="menu-animaux"><a href="#">Animation</a>
                        <ul class="submenu">
                            <li><a href="animation.php">Ajouter une animation</a></li>
                            <li><a href="afficherAnimation.php">Liste des animations</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-animaux"><a href="#">Vacancier</a>
                        <ul class="submenu">
                            <li><a href="formulaireVacancier.php">Inscrire un vacancier</a></li>
                            <li><a href="afficherInscription.php">Afficher les inscriptions</a></li>
							
                        </ul>
                    </li>
    
                    <li class="menu-signup" id="menu-droite"><a href="connexion.php">Deconnexion</a></li>
                    
                </ul>
			
			


			</nav>
				
				
	        	
	        	
	        	
		<?php } 
			
			else if ($_SESSION['TYPEPROFIL'] =='va') {?>
	        	
	        	
	        	
				<nav>
				<ul>
                    <li class="menu-animaux"><a href="#">Activite</a>
                        <ul class="submenu">
                            <li><a href="afficherActivite.php">afficher les activités</a></li>
                            <li><a href="annulation.php">annuler une inscription</a></li>
                        </ul>
                    </li>
                    <li class="menu-animaux"><a href="#">Animation</a>
                        <ul class="submenu">
                            <li><a href="afficherAnimation.php">Liste des animations</a></li>
                            
                        </ul>
                    </li>

    
                    <li class="menu-signup" id="menu-droite"><a href="connexion.php">Deconnexion</a></li>
                    
                </ul>
			
			


			</nav>
	        	

	    <?php } ?>
<H2><center><strong>Station des Sybelles</strong></center></H2>
		
<div class="container">
   
       <div class="wrapper">
          <img src="image2/img1.jpg">
          <img src="image2/img2.jpg">
          <img src="image2/img3.jpg">
          <img src="image2/img4.jpg">
          <img src="image2/img5.jpg">
          <img src="image2/img6.jpg">
          <img src="image2/img7.jpg">
          <img src="image2/img8.jpg">
   
       </div>
</div>

		
		
		

</body>
<footer>

</footer>	
</html>
			