



<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body >
	test
	<?php
		$con=mysqli_connect("localhost","root","","gacti");


		$a=$_POST["compte"];
		$b=$_POST["mdp"];

		$req1="SELECT * FROM compte where USER='$a' and MDP='$b'";
		$resultat=mysqli_query($con,$req1);
		$ligne=mysqli_num_rows($resultat);
		if ($ligne==1) {
			while ($enreg=mysqli_fetch_array($resultat)) {
			$user=$enreg["USER"];
			$mdp=$enreg["MDP"];
			$typeProfil=$enreg["TYPEPROFIL"];
			}
			$_SESSION['USER']=$user;
			$_SESSION['TYPEPROFIL']=$typeProfil;
			$_SESSION['etat']=1;
			header('location: mainUtilisateur.php');
		}else {
			header('location: mainErreur.php');
		}

	?>
</body>
</html>


