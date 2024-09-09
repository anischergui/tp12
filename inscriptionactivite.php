<?php
include('connexion.php');
include('navigation.php');

$USER=$_SESSION['USER'];
$CODEANIM=$_SESSION['CODEANIM'];
$DATEACT=$_SESSION['DATEACT'];
$DATEINSCRIP="0";
$DATEANNULE="0";
$requete="INSERT INTO compte VALUES ('$USER', '$CODEANIM', '$DATEACT','$DATEINSCRIP','$DATENANNULE')"; 
        echo $requete;
        if(mysqli_query($mysqli,$requete))
            echo "Activité ajoutée";
        else
            echo"Execution de la requete impossible";
?>
