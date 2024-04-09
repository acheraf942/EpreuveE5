<!doctype html>
<style>
	table{
		border-color: solid #fff;
		width: 100%;
		align-items: center;
		text-align: center;
		border-collapse: collapse;   
       	margin: 0 auto;
        width: 50%;
	}
	body {
            background-color: #46494C;
            color: #fff;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }

       

        th, td {
            border: 1px solid #fff;
            padding: 10px;
        }

        th {
            background-color: #212529;
        }

        input[type="text"], input[type="date"] {
            background-color: #fff;
            border: none;
            border-radius: 3px;
            box-sizing: border-box;
            color: #46494C;
            font-size: 16px;
            height: 40px;
            padding: 5px;
            width: 100%;
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

        h1 {
            color: #fff;
            font-size: 24px;
            margin: 20px 0;
            text-align: center;
            text-transform: uppercase;
        }

        footer {
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

        footer a {
            color: #fff;
            text-decoration: none;
			
        }

		H2 {
			font-size: 30px;
			font-family: 'Comic Sans MS';
		}
   
	
	
</style>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

<body>	
		<H2><Strong><center>Inscrire un vacancier</center><Strong></H2>
		
<form method="post" action="ajtVacancier.php">

<table>

<tr><td>utilisateur : <input type="text" name="USER" id="USER" class="text" required></td></tr>

<tr><td>code animation : <?php include('listederoulante.php') ?></td></tr>

<tr><td>date activite: <input type="date" name="DATEACT" id="DATEACT" class="text" required></td></tr>

<br><br>
<tr><td><input type="submit" id="req1 "value="enregistrer" class="bout"></td><tr>
</table>

		
</body>
<footer>
<strong><a href="mainUtilisateur.php">accueil</a></strong>
</footer>	
</html>


						
			