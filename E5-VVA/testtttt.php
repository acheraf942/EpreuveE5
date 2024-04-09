<?php

$connexion = mysqli_connect("localhost","root","","gacti");

session_start();

$user = $_SESSION['USER'];
echo"$user";
/*$requete1 = "SELECT * from activite WHERE USER = '$user'";
$resultat = mysqli_query($connexion, $requete1);*/

$requete1 = "SELECT * FROM activite WHERE USER = '$user'";

$resultat = mysql_query($connexion, $requete1);

?>
<center><H1>ACTIVITE</H1></center>

<TABLE border=1>
<TR>
<TD> code animation </TD>
<TD> date  </TD>
<TD> code </TD>
<TD> heure  </TD>
<TD> prix </TD>
<TD> heure début </TD>
<TD> heure fin </TD>
<TD> date annule </TD>
<TD> nom responsable </TD>
<TD> prenom responsable</TD>
<TD> statut</TD>

</TR>
<?php while($enreg=mysqli_fetch_array($resultat))
{
?>
<TR>
<TD><?php echo $enreg["CODEANIM"];?></TD>
<TD><?php echo $enreg["DATEACT"];?></TD>
<TD><?php echo $enreg["CODEETATACT"];?></TD>
<TD><?php echo $enreg["HRRDVACT"];?></TD>
<TD><?php echo $enreg["PRIXACT"];?> €</TD>
<TD><?php echo $enreg["HRDEBUTACT"];?></TD>
<TD><?php echo $enreg["HRFINACT"];?></TD>
<TD><?php echo $enreg["DATEANNULEACT"];?></TD>
<TD><?php echo $enreg["NOMRESP"];?></TD>
<TD><?php echo $enreg["PRENOMRESP"];?></TD>
<TD><?php if ($enreg["CODEETATACT"]==1){echo "disponible";} else {echo "fermer";};?></TD>
<TD><?php 
		
		if($_SESSION['TYPEPROFIL'] == "en")
		{
			echo"<td><a href='annulation2.php?CODEANIM=".$enreg['CODEANIM']."'>Annuler</a></td>";
		}
		
?></TD>


</TR>
<?php } ?>
</TABLE>

<?php mysqli_close($connexion); ?>