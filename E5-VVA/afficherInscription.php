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
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

<body>	
		
<?php
session_start();

$connexion = mysqli_connect("localhost","root","","gacti");
if (!$connexion) {
	die("Connexion échouée: " . mysqli_connect_error());
}

$user = $_SESSION['USER'];

if($_SESSION['TYPEPROFIL'] == 'en'){
	$requete1 = "SELECT * FROM inscription";
}
else if($_SESSION['TYPEPROFIL'] == 'va'){
	$requete1 = "SELECT * FROM inscription WHERE USER = '$user'";
}


$resultat = mysqli_query($connexion, $requete1);


?>
<center><H1>Mes Inscriptions</H1></center>

<TABLE border=1>
<TR>
<TD> No inscription </TD>
<TD> user  </TD>
<TD> code animation </TD>
<TD> date activité  </TD>
<TD> date inscription </TD>
<TD> date annulation </TD>


</TR>
<?php while($enreg=mysqli_fetch_array($resultat))
{
?>
<TR>
<TD><?php echo $enreg["NOINSCRIP"];?></TD>
<TD><?php echo $enreg["USER"];?></TD>
<TD><?php echo $enreg["CODEANIM"];?></TD>
<TD><?php echo $enreg["DATEACT"];?></TD>
<TD><?php echo $enreg["DATEINSCRIP"];?></TD>
<TD><?php echo $enreg["DATEANNULE"];?></TD>
		<TD><?php
		echo"<td><a href='annulation.php?NOINSCRIP=".$enreg['NOINSCRIP']."'>Annuler</a></td>";
		?></TD>



</TR>
<?php } ?>
</TABLE>
	
</body>
<footer>
<strong><a href="mainUtilisateur.php">accueil</a></strong>
</footer>	
</html>