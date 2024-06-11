<?php
$conn=mysqli_connect("localhost","root","", "gacti");

$code=$_POST ['code_anim'];
$date=$_POST ['date_act'];
$codeetat=$_POST ['code_etat_act'];
$hrdv=$_POST ['hrdv_act'];
$prix=$_POST ['prix_act'];
$hdebut=$_POST ['hdebut_act'];
$hfin=$_POST ['hfin_act'];
$dateannule=$_POST ['dateannule_act'];
$nomr=$_POST ['nom_resp'];
$prenomr=$_POST ['prenom_resp'];




$req1 ="INSERT INTO activite VALUES ('$code','$date', '$codeetat', '$hrdv', '$prix', '$hdebut','$hfin','$dateannule','$nomr','$prenomr')";
mysqli_query($conn,$req1);

@include('affichage_animation.php');

?>