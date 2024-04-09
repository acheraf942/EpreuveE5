<?php
session_start();
$idc = mysqli_connect("localhost", "root", "", "gacti");
$c = mysqli_select_db($idc,"gacti");

$a=$_SESSION['USER'];
$b=$_GET['CODEANIM'];
$c=$_GET['DATEACT'];






$req1 ="INSERT INTO inscription (USER, CODEANIM, DATEACT, DATEINSCRIP, DATEANNULE) VALUES ('$a', '$b','$c',NOW(),NULL)";
mysqli_query($idc,$req1);

header('Location: afficherActivite.php');



?>