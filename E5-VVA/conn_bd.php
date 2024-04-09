<?php
// Paramètres de connexion à la base de données
$serveur = "localhost"; // Adresse du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur MySQL
$motDePasse = ""; // Mot de passe MySQL
$baseDeDonnees = "gacti"; // Nom de la base de données

// Établissement de la connexion à la base de données
$bdd = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

// Vérification de la connexion
if (!$bdd) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}
?>