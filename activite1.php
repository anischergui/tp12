<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VVA</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/accueil.css">

    <link rel="shortcut icon" href="images/FM_miniLogo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique&display=swap" rel="stylesheet">

</head>

<body>
    <?php
    include('navigation.php');
    include('connexion.php');
    session_start();
    $us=$_SESSION['USER'];
    $Requete1="SELECT USER FROM compte WHERE USER='$us'";
    $Resultat1=mysqli_query($mysqli,$Requete1);
    $Num1=mysqli_num_rows($Resultat1);
    if($Num1>=1)
    ?>
    <!-- Barre de navigation -->
    <!-- Fin de la barre de navigation -->
    <main>
    <table class="activiteinscription">
    <?php  
    include('connexion.php');
    $requete="SELECT NOMANIM,DATECREATIONANIM,DATEVALIDITEANIM,DUREEANIM,LIMITEAGE,TARIFANIM,NBREPLACEANIM,DESCRIPTANIM,COMMENTANIM,DIFFICULTEANIM FROM animation WHERE CODETYPEANIM='act1'";
    $resultat=mysqli_query($mysqli,$requete);
    ?>

    <?php while ($enreg=mysqli_fetch_array($resultat)) {
    ?>
    <table >
        <tr>
            <td>Nom Animation : </td>
            <td><?php echo $enreg["NOMANIM"];?></td>
        </tr>
        <tr>
            <td>Date Creation Animation</td>
            <td><?php echo $enreg["DATECREATIONANIM"];?></td>
        </tr>        
        <tr>
            <td>Date Fin Animation</td>
            <td><?php echo $enreg["DATEVALIDITEANIM"];?></td>
        </tr>        
        <tr>
            <td>Duree Animation</td>
            <td><?php echo $enreg["DUREEANIM"]."h";?></td>
        </tr>        
        <tr>
            <td>Limite d'age</td>
            <td><?php echo $enreg["LIMITEAGE"]."ans";?></td>
        </tr>        
        <tr>
            <td>Tarif</td>
            <td><?php echo $enreg["TARIFANIM"]."€";?></td>
        </tr>        
        <tr>
            <td>Nombre de place restant</td>
            <td><?php echo $enreg["NBREPLACEANIM"];?></td>
        </tr>        
        <tr>
            <td>Description</td>
            <td><?php echo $enreg["DESCRIPTANIM"];?></td>
        </tr>        
        <tr>
            <td>Commentaire</td>
            <td><?php echo $enreg["COMMENTANIM"];?></td>
        </tr>
        <tr>
            <td>Difficulte</td>
            <td><?php echo $enreg["DIFFICULTEANIM"];?></td>
        </tr>
    <?php } ?>
    </table>

    </table>



    <div class="others-bottom">
        <p>*Consultez la page "À Propos".</p>

    </div>

    <script src="js/script.js"></script>
    <footer>
        <div class="copyrightText">Copyright © 2021 | VVA. Tous droits réservés</div>
        <div class="divAboutUs">
            <a class="linkAboutUs" href="apropos.html">À Propos de nous 
            </a>
        </div>
    </footer>
</body>

</html>