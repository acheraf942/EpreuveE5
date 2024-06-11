
		<?php
		//On annule une activité sans la supprimer, on passe le code activité à 2 et on passe la date du jour pour le champ dateannule.
		
				$conn=mysqli_connect("localhost", "root", "", "gacti");
				$code=$_GET['CODEANIM'];
				$date=$_GET['DATEACT'];
				$dateannule= date('y-m-d h:i:s');

				$sql = "UPDATE activite 
				SET CODEETATACT='2', DATEANNULEACT='$dateannule'
				WHERE CODEANIM = '$code' AND DATEACT='$date'";
				mysqli_query($conn,$sql);

				header('location:affichage_animation.php');
				exit;
					
				mysqli_close($conn);
			?>