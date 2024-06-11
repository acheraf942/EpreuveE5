<?php 
   
   $conn=mysqli_connect("localhost","root","", "gacti");

   
   $nomuser = $_POST['user'];
   $mdp = $_POST['mdp'];

   $select = " SELECT TYPEPROFIL, DATEDEBSEJOUR, DATEFINSEJOUR FROM compte WHERE USER= '$nomuser' && MDP= '$mdp' ";
   $result = mysqli_query($conn, $select);
   $recup = mysqli_fetch_array($result);

   if(mysqli_num_rows($result) == 0){
     
       header('Location:connexion.php');
       echo 'Mot de passe incorrect';

   }
   else{
      if(($recup['TYPEPROFIL']) == 'va'){
         session_start();
         $_SESSION['typeprofil'] = 'va';
         $_SESSION['datedebsejour']= $recup['DATEDEBSEJOUR'];
         $_SESSION['datefinsejour']= $recup['DATEFINSEJOUR'];
         $_SESSION['nomuser'] = $nomuser;
         header('Location:index.php');
      }

      else if(($recup['TYPEPROFIL']) == 'en'){
         session_start();
         $_SESSION['typeprofil'] = 'en';
         $_SESSION['nomuser'] = $nomuser;
         header('Location:index.php');
      }

   }
?>

