<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$idc = mysqli_connect("localhost", "root", "", "gacti");

if (!$idc) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

$requete = "SELECT CODEANIM, NOMANIM FROM animation";
$resultat = mysqli_query($idc, $requete);

if (!$resultat) {
    die("Erreur dans la requête : " . mysqli_error($idc));
}

?>

<select size="1" name="CODEANIM" id="CODEANIM">
<?php 
while ($enreg = mysqli_fetch_array($resultat)) {
?>
<option value="<?php echo $enreg['CODEANIM']; ?>"><?php echo $enreg['NOMANIM']; ?></option>
<?php 
} 
?>
</select>

</select>
<br>

</body>
</html>
