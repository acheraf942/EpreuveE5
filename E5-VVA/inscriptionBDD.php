<?php
mysqli_connect("localhost","root","","gacti");
mysql_select_db("gacti");

$b=$_POST ['codeanim'];
$requeteCodeanim="SELECT DATEACT FROM activite WHERE CODEANIM = '$b'";
$resultat=mysql_query($requeteCodeanim);
// echo($requeteCodeanim);



/*while($do=mysql_fetch_array($resultat))
{
    echo $do["DATEACT"];
}*/


$a=$_POST['user'];
$c= $resultat;
$d= date('y-m-d');
$e= "0000-00-00";





$req1 = "INSERT INTO inscription (`USER`,`CODEANIM`,`DATEACT`,`DATEINSCRIP`,`DATEANNULE`) VALUES ('$a','$b','$c','$d','$e')";
mysql_query($req1);
echo($req1);

header('Location: inscriptionFormulaire.php');

?>

