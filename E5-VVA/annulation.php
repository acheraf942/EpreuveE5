<?php
    
    

   
$connexion = mysqli_connect("localhost","root","","gacti");
    
   
if (!$connexion) {
        die("Connexion échouée: " . mysqli_connect_error());
    }

    
    

    
$code = $_GET['NOINSCRIP'];

    $sql = "UPDATE inscription
            SET DATEANNULE = NOW()
            WHERE NOINSCRIP='$code'";

    

   


if(mysqli_query($connexion, $sql)) {
        header('location:afficherInscription.php');
        
       
exit;
    } 
    
else {
        echo "Erreur: " . mysqli_error($connexion);
    }

    
    

    mysqli_close();

    

 

    

   

    


   
mysqli_close($connexion);
?>





