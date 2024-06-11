<?php
$conn=mysqli_connect("localhost","root","", "gacti");


$code=$_POST ['code_anim'];
$type=$_POST ['type_anim'];
$nom=$_POST ['nom_anim'];
$datecrea=$_POST ['date_crea_anim'];
$dateval=$_POST ['date_validite_anim'];
$duree=$_POST ['duree_anim'];
$age=$_POST ['age_anim'];
$tarif=$_POST ['tarif_anim'];
$place=$_POST ['place_anim'];
$description=$_POST ['description_anim'];
$commentaire=$_POST ['commentaire_anim'];
$difficulte=$_POST ['difficulte_anim'];



$req1 ="INSERT INTO animation VALUES ('$code','$type', '$nom', '$datecrea', '$dateval', '$duree','$age','$tarif','$place','$description','$commentaire','$difficulte')";
mysqli_query($conn, $req1);
include "affichage_animation.php";

?>