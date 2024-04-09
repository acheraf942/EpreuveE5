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
$connexion = mysqli_connect("localhost", "root", "", "gacti");

if (!$connexion) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();
$user = $_SESSION['USER'];

$requete1 = "SELECT * FROM activite";
$resultat = mysqli_query($connexion, $requete1);

if (!$resultat) {
    die("Erreur: " . mysqli_error($connexion));
}
?>

<center><h1>ACTIVITE</h1></center>

<table border="1">
<tr>
    <th>Code animation</th>
    <th>Date</th>
    <th>Code</th>
    <th>Heure</th>
    <th>Prix</th>
    <th>Heure début</th>
    <th>Heure fin</th>
    <th>Date annule</th>
    <th>Nom responsable</th>
    <th>Prénom responsable</th>
    <th>Statut</th>
    <th>Action</th>
</tr>

<?php while ($enreg = mysqli_fetch_array($resultat)) { ?>
<tr>
    <td><?php echo $enreg["CODEANIM"]; ?></td>
    <td><?php echo $enreg["DATEACT"]; ?></td>
    <td><?php echo $enreg["CODEETATACT"]; ?></td>
    <td><?php echo $enreg["HRRDVACT"]; ?></td>
    <td><?php echo $enreg["PRIXACT"]; ?> €</td>
    <td><?php echo $enreg["HRDEBUTACT"]; ?></td>
    <td><?php echo $enreg["HRFINACT"]; ?></td>
    <td><?php echo $enreg["DATEANNULEACT"]; ?></td>
    <td><?php echo $enreg["NOMRESP"]; ?></td>
    <td><?php echo $enreg["PRENOMRESP"]; ?></td>
    <td><?php echo ($enreg["CODEETATACT"] == 1) ? "Disponible" : "Fermé"; ?></td>
    <td>
        <?php if ($enreg["CODEETATACT"] == 1): ?>
            <?php echo "<a href='ajtVacancier.php?CODEANIM=".$enreg['CODEANIM']."&DATEACT=".$enreg['DATEACT']."'>S'inscrire</a>"; ?>
        <?php endif; ?>
        <?php if ($_SESSION['TYPEPROFIL'] == "en"): ?>
            <?php echo "<a href='annulation2.php?CODEANIM=".$enreg['CODEANIM']."'>Annuler</a>"; ?>
        <?php endif; ?>
    </td>
</tr>
<?php } ?>



					
			