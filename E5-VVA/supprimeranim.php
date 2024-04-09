

<?php
	


$idc = mysqli_connect("localhost","root","","gacti");
$c = mysqli_select_db($idc,"gacti");

$code = $_GET['CODEANIM'];


$sql = "DELETE FROM animation WHERE CODEANIM ='$code'";
$resultat = mysqli_query($idc,$sql);


header('location:afficherAnimation.php');
	exit;

mysqli_close($idc);


?>

