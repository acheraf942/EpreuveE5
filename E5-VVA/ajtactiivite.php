<?php
$idc = mysqli_connect("localhost", "root", "", "gacti");

if (!$idc) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

$a = $_POST['CODEANIM'];
$b = $_POST['DATEACT'];
$c = 1; // C'était en double, j'ai ajusté le reste du code pour correspondre à cette valeur
$d = $_POST['HRRDVACT'];
$e = $_POST['PRIXACT'];
$f = $_POST['HRDEBUTACT'];
$g = $_POST['HRFINACT'];
$h = $_POST['DATEANNULEACT'];
$i = $_POST['NOMRESP'];
$j = $_POST['PRENOMRESP'];

$req1 = "INSERT INTO activite VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j')";
$result = mysqli_query($idc, $req1);

if (!$result) {
    die("Erreur dans la requête : " . mysqli_error($idc));
}

header('Location: afficherActivite.php');
?>