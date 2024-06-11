
		<?php
				$conn=mysqli_connect("localhost", "root", "", "gacti");
				$numero=$_GET['NOINSCRIP'];
				$dateannule= date('y-m-d h:i:s');
				$sql = "UPDATE inscription
				SET DATEANNULE='$dateannule'
				WHERE NOINSCRIP = '$numero'";
				mysqli_query($conn,$sql);

				header('location:reservation.php');
				exit;
					
				mysqli_close();
			?>