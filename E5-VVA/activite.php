<!doctype html>
<style>
	
	


		body {
			background-color: #46494C;
			color: white;
			width: 100%;
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
			position: absolute;
			top: 150px;
			left: 25%;
			width: 50%;
			text-align: center;
			margin: 0 auto; 
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
		H1 {
		text-align: center;
		font-weight: normal;
		font-size: 20px;
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter une activite</title>
</head>
<body>
    <h1><strong><center>Ajouter une activité</center></strong></h1>
    
    <form method="post" action="ajtactiivite.php">
        <table>
            <tr><td>Code animation : <?php include('listederoulante.php') ?></td></tr>
            <tr><td>Date activité : <input type="date" name="DATEACT" id="DATEACT" class="text" required></td></tr>
            <tr><td>Heure rdv activité : <input type="time" name="HRRDVACT" id="HRRDVACT" class="text" required></td></tr>
            <tr><td>Prix activité : <input type="number" name="PRIXACT" id="PRIXACT" class="text" required></td></tr>
            <tr><td>Heure début : <input type="time" name="HRDEBUTACT" id="HRDEBUTACT" class="text" required></td></tr>
            <tr><td>Heure fin : <input type="time" name="HRFINACT" id="HRFINACT" class="text" required></td></tr>
            <tr><td>Date annulé : <input type="date" name="DATEANNULEACT" id="DATEANNULEACT" class="text"></td></tr>
            <tr><td>Nom responsable : <input type="text" name="NOMRESP" id="NOMRESP" class="text" required></td></tr>
            <tr><td>Prénom responsable : <input type="text" name="PRENOMRESP" id="PRENOMRESP" class="text" required></td></tr>
            <tr><td><input type="submit" id="req1" value="Enregistrer" class="bout"></td></tr>
        </table>
    </form>
    
    <footer>
        <strong><a href="mainUtilisateur.php">Accueil</a></strong>
    </footer> 
</body>
</html>



						
			