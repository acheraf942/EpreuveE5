<!doctype html>
<style>

	body {
		background-color: #46494C;
		width: 100%;
		text-align: center;
		align-items: center;
		color: white;
		font-family: Arial, sans-serif;
		margin: 0;
		padding: 0;
		
		align-items: center; /* ajout de cette ligne */
		justify-content: center; /* ajout de cette ligne */
	}


	table {
		border-color: white;
		position: absolute;
		top: 150px;
		left: 25%;
		width: 50%;
		text-align: center;
		margin: 0 auto; /* ajout de cette ligne pour centrer le tableau horizontalement */
		
	}

	th, td {
		padding: 10px;
		border: 1px solid white;
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
	.bout {
            background-color: #212529;
            border: none;
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            height: 40px;
            margin-top: 20px;
            width: 100%;
        }

        .bout:hover {
            background-color: #46494C;
        }
	

	
</style>
<?php
// Inclusion du fichier de connexion à la base de données
include_once 'conn_bd.php';
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

<body>	
		<H1><Strong><center>Ajouter une animation</center><Strong></H1>
		
<form method="post" action="animation2.php">

<table>
    <tr>
        <td>Code animation : <input type="text" name="CODEANIM" class="text" required></td>
    </tr>
    <tr>
        <td>
            Code type :
        </td>
        <td>
        <select name="CODETYPEANIM" onchange="combo(this,'theinput')">
    <?php
    $sql ="SELECT CODETYPEANIM, NOMTYPEANIM FROM TYPE_ANIM";
    foreach ($bdd->query($sql) as $row) {
        echo "<option value='" . $row['CODETYPEANIM'] . "'>" . $row['NOMTYPEANIM'] . "</option>";
    }
    ?>
</select>
        </td>
    </tr>
    <tr>
        <td>Nom animation : <input type="text" name="NOMANIM" class="text" required></td>
    </tr>
    <tr>
        <td>Date fin validité animation : <input type="date" name="DATEVALIDITEANIM" class="text" required></td>
    </tr>
    <tr>
        <td>Durée animation : <input type="number" name="DUREEANIM" class="text" required></td>
    </tr>
    <tr>
        <td>Limite age : <input type="number" name="LIMITEAGE" class="text" required></td>
    </tr>
    <tr>
        <td>Tarif animation : <input type="number" name="TARIFANIM" class="text" required></td>
    </tr>
    <tr>
        <td>Nombre places animation : <input type="number" name="NBREPLACEANIM" class="text" required></td>
    </tr>
    <tr>
        <td>Description animation : <input type="text" name="DESCRIPTANIM" class="text" required></td>
    </tr>
    <tr>
        <td>Commentaire animation : <input type="text" name="COMMENTANIM" class="text" required></td>
    </tr>
    <tr>
        <td>
            Difficulté :
            <select size="1" name="DIFFICULTEANIM">
                <option value="Très facile">Très facile</option>
                <option value="Facile">Facile</option>
                <option value="Difficile">Difficile</option>
                <option value="Très difficile">Très difficile</option>
            </select>
        </td>
    </tr>
    <tr>
        <td><input type="submit" id="req1" value="Enregistrer" class="bout"></td>
    </tr>
</table>


		
</body>
<footer>
<strong><a href="mainUtilisateur.php">accueil</a></strong>
</footer>	
</html>


						
			