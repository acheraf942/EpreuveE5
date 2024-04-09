

<?php
	


$idc = mysqli_connect("localhost","root","","gacti");
$c = mysqli_select_db($idc,"gacti");

$code = $_GET['CODEANIM'];


$sql = "UPDATE activite
SET CODEETATACT = '2', DATEANNULEACT = NOW()
WHERE CODEANIM='$code'";
$resultat = mysqli_query($idc,$sql);


header('location:afficherActivite.php');
	exit;

mysql_close($idc);


?>

