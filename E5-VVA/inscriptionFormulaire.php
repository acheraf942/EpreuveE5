<!doctype html>
<style>
	table{
		border-color: solid black 10px;
		width: 100%;
		align-items: center;
		text-align: center;
	}
	
	
</style>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

<?php
	mysqli_connect("localhost","root","","gacti");
	$c=mysql_select_db("gacti");
	$requete="select USER from compte";
	$resultat=mysql_query($requete);
	$requete2= "select CODEANIM from activite";
	$resultat2=mysql_query($requete2);
?>

<body>	
		<H><Strong><center>Inscire un abonné</center><Strong></H>
		
<form method="post" action="inscriptionBDD.php">

<table>
	
	<tr><td>abonné : <select size = "1" name = "user" id ="user">
	<?php while($enreg=mysql_fetch_array($resultat)){?>
	<option selected value = "<?php echo $enreg['USER'];?>">
	<?php echo $enreg['USER'];?> </option><?php } ?>
	</tr></td>

    <tr><td>code animation : <select size = "1" name = "codeanim" id ="codeanim">
	<?php while($enreg=mysql_fetch_array($resultat2)){?>
	<option selected value = "<?php echo $enreg['CODEANIM'];?>">
	<?php echo $enreg['CODEANIM'];?> </option><?php } ?>
	</tr></td>

    


    <br><br>
    <tr><td><input type="submit" id="req1 "value="enregistrer" class="bout"></td><tr>
</table>

		
</body>
<footer>
<strong><a href="mainEncadrant.php">accueil</a></strong>
</footer>	
</html>


						
			