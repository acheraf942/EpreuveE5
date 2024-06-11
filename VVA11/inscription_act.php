<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title></title>
</head>
<body>
<?php
        session_start();
        $conn=mysqli_connect("localhost", "root", "", "gacti");
        $code=$_GET['CODEANIM'];
        $date=$_GET['DATEACT'];
        $dateinscrip= date('y-m-d');
        $nomuser= $_SESSION['nomuser'];

        $requete= "SELECT* 
        FROM inscription 
        WHERE CODEANIM='$code' 
        AND DATEACT='$date'
        AND DATEANNULE IS NULL
        AND USER='$nomuser'";

        $resultat=mysqli_query($conn,$requete);
        $nums_rows=mysqli_num_rows($resultat);

        if($nums_rows==0){

        $requeteNbplaces="SELECT NBREPLACEANIM-COUNT(NOINSCRIP) AS Nbplacedisponibles 
        FROM animation 
        INNER JOIN inscription ON animation.CODEANIM=inscription.CODEANIM 
        WHERE DATEANNULE IS NULL AND animation.CODEANIM='$code' AND DATEACT='$date'";
        $resultat2=mysqli_query($conn,$requeteNbplaces);

        //on récupère la table du champ Nbplacedisponibles, on met le résultat dans une variable $place et ensuite on fait notre opération de comparaison

        $recupplaces=mysqli_fetch_array($resultat2);
        $place=$recupplaces["Nbplacedisponibles"];
        
                if($place>0){

                $sql = "INSERT INTO inscription(USER, CODEANIM, DATEACT, DATEINSCRIP) VALUES('$nomuser','$code','$date', '$dateinscrip')";
                mysqli_query($conn,$sql);

                header('location:reservation.php');
                }

                else{
                        $_SESSION['place']="Toutes les places sont complètes";
                        header('location:reservation.php');
                }    

        }

        else{
        $_SESSION['inscrit']="Il est déjà inscrit";
             header('location: reservation.php');
        }
        exit;
          
        mysqli_close($conn);

?>
</body>
</html>

