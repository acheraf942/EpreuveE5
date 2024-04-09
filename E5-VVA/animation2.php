<?php
$idc = mysqli_connect("localhost","root","","gacti");
$c = mysqli_select_db($idc, "gacti");

$a=$_POST ['CODEANIM'];
$b=$_POST ['CODETYPEANIM'];
$c=$_POST ['NOMANIM'];
/*$d=$_POST ['DATECREATIONANIM'];*/
$d= date('y-m-d h:i:s');
$e=$_POST ['DATEVALIDITEANIM'];
$f=$_POST ['DUREEANIM'];
$g=$_POST ['LIMITEAGE'];
$h=$_POST ['TARIFANIM'];
$i=$_POST ['NBREPLACEANIM'];    
$j=$_POST ['DESCRIPTANIM'];
$k=$_POST ['COMMENTANIM'];
$l=$_POST ['DIFFICULTEANIM'];






$req1 ="INSERT INTO animation VALUES ('$a', '$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
mysqli_query($idc, $req1);

header('Location: animation.php');

?>

