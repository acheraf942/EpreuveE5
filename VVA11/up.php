<?php 

    $idc=mysqli_connect("localhost", "root", "", "gacti");


    $codeanim =$_POST['codeanim'];
    $nomanim = $_POST["NOMANIM"];
    $DateVal = $_POST["DATEVALIDITEANIM"];
    $Duree = $_POST["DUREEANIM"];
    $limiteage = $_POST["LIMITEAGE"];
    $tarifAnim = $_POST["TARIFANIM"];
    $Description = $_POST["DESCRIPTANIM"];
    $Commentaire = $_POST["COMMENTANIM"];
    $Difficulte = $_POST["DIFFICULTEANIM"];

    $requete = "UPDATE animation SET
    CODEANIM='$codeanim',
    NOMANIM='$nomanim',
    DATEVALIDITEANIM='$DateVal',
    DUREEANIM='$Duree',
    LIMITEAGE='$limiteage',
    TARIFANIM='$tarifAnim',
    DESCRIPTANIM='$Description',
    COMMENTANIM='$Commentaire',
    DIFFICULTEANIM='$Difficulte'
    WHERE CODEANIM= '$codeanim'";

     
    $resultat = mysqli_query($idc,$requete);
    include('affichage_animation.php');

    
    ?>