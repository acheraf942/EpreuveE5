<!doctype html>
<style>
	table{
		border-color: solid black 10px;
		width: 100%;
		align-items: center;
		text-align: center;
	}
	body {
			background-color: #46494C;
			color: white;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 20px;
		}
		table {
			border-color: white;
			width: 100%;
			text-align: center;
			margin-top: 20px;
		}
		th, td {
			padding: 10px;
			border: 1px solid white;
		}
		th {
			background-color: #27282B;
			text-transform: uppercase;
		}
		a {
			color: white;
			text-decoration: none;
			font-weight: bold;
		}
		h1 {
			text-align: center;
			font-weight: normal;
			font-size: 40px;
    		font-family: 'Comic Sans MS';
			background-color: #212529;
		}
		footer{
			background-color: #212529;
            color: #fff;
            font-size: 14px;
            padding: 20px;
            text-align: center;
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
	}
	
	
</style>
<?php

$connexion = mysqli_connect("localhost","root","","gacti");
if (!$connexion) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();

$user = $_SESSION['USER'];

/*$requete1 = "SELECT * from activite WHERE USER = '$user'";
$resultat = mysqli_query($connexion, $requete1);*/

$requete1 = "SELECT * FROM animation";

$resultat = mysqli_query($connexion, $requete1);

if (!$resultat) {
    die("Erreur: " . mysqli_error($connexion));
}

?>
<center><H1>ANIMATION</H1></center>

<TABLE border=1>
<TR>
<TD> code animation </TD>
<TD> type </TD>
<TD> nom </TD>
<TD> date Creation  </TD>
<TD> date de fin val.  </TD>
<TD> durée </TD>
<TD> limite age </TD>
<TD> tarif </TD>
<TD> nb places </TD>
<TD> description </TD>
<TD> commentaire </TD>

</TR>
<?php while($enreg=mysqli_fetch_array($resultat))
{
?>
<TR>
<TD><?php echo $enreg["CODEANIM"];?></TD>
<TD><?php if($enreg["CODETYPEANIM"] == "SP"){echo "SPORT";} elseif($enreg["CODETYPEANIM"] == "AR"){echo "ART";} elseif($enreg["CODETYPEANIM"] == "CT"){echo "CULTUREL";} elseif($enreg["CODETYPEANIM"] == "CN"){echo "CINEMA";}?></TD>
<TD><?php echo $enreg["NOMANIM"];?></TD>
<TD><?php echo $enreg["DATECREATIONANIM"];?></TD>
<TD><?php echo $enreg["DATEVALIDITEANIM"];?> €</TD>
<TD><?php echo $enreg["DUREEANIM"];?></TD>
<TD><?php echo $enreg["LIMITEAGE"];?></TD>
<TD><?php echo $enreg["TARIFANIM"];?></TD>
<TD><?php echo $enreg["NBREPLACEANIM"];?></TD>
<TD><?php echo $enreg["DESCRIPTANIM"];?></TD>
<TD><?php echo $enreg["COMMENTANIM"];?></TD>
<TD><?php 		
		if($_SESSION['TYPEPROFIL'] == "en")
		{
			echo"<td><a href='supprimeranim.php?CODEANIM=".$enreg['CODEANIM']."'>Supprimer</a></td>";
		}
		
?></TD>


</TR>
<?php } ?>
</TABLE>

<?php mysqli_close($connexion); ?>

<footer>
<strong><a href="mainUtilisateur.php">Retourner à l'acceuil</a></strong>
</footer>	

					
			