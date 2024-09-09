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
    ?>
    <!-- Barre de navigation -->
    
    <!-- Fin de la barre de navigation -->
    <main>
    <table class="activiteinscription">

    <form action="ajouteract.php" method="POST">
        <tr>
            <td>CODEANIM</td>
            <td><SELECT name=CODEANIM>
                <option>--test--</option>
                <?php
                $req="SELECT * FROM animation";
                $result=mysqli_query($mysqli,$req);
                while ($enreg=mysqli_fetch_array($result))
                {
                ?>
                <option value="<?php echo $enreg['CODEANIM'];?>"><?php echo $enreg['CODEANIM'];?></option>
                <?php
                }
                ?>
            </SELECT>
            </td>
        <tr>
            <td>DATEACT</td>
            <td><input type="date" name="DATEACT"></td>
        </tr>        
        <tr>
            <td>CODEETATACT</td>
             <td><SELECT name=CODEETATACT>
                <option>--test--</option>
                <?php
                $req="SELECT * FROM etat_act";
                $result=mysqli_query($mysqli,$req);
                while ($enreg=mysqli_fetch_array($result))
                {
                ?>
                <option value="<?php echo $enreg['CODEETATACT'];?>"><?php echo $enreg['CODEETATACT'];?></option>
                <?php
                }
                ?>        </tr>        
        <tr>
            <td>HRRDVACT</td>
            <td><input type="time" name="HRRDVACT"></td>
        </tr>        
        <tr>
            <td>PRIXACT</td>
            <td><input type="text" name="PRIXACT"></td>
        </tr>        
        <tr>
            <td>HRDEBUTACT</td>
            <td><input type="time" name="HRDEBUTACT"></td>
        </tr>        
        <tr>
            <td>HRFINACT</td>
            <td><input type="time" name="HRFINACT"></td>
        </tr>        
        <tr>
            <td>NBREPLACEANIM</td>
            <td><input type="text" name="NBREPLACEANIM"></td>
        </tr>
        <tr>
            <td>DATEANNULEACT</td>
            <td><input type="date" name="DATEANNULEACT"></td>
        </tr>
        <tr>
            <td>NOMRESP</td>
             <td><SELECT name=NOMRESP>
                <option>----</option>
                <?php
                $req="SELECT * FROM COMPTE WHERE TYPEPROFIL ='en' ";
                $result=mysqli_query($mysqli,$req);
                while ($enreg=mysqli_fetch_array($result))
                {
                ?>
                <option value="<?php echo $enreg['NOMCOMPTE'];?>"><?php echo $enreg['NOMCOMPTE'];?></option>
                <?php
                }
                ?>
        </tr>
        <tr>
            <td>PRENOMRESP</td>
             <td><SELECT name=PRENOMRESP>
                <option>--test--</option>
                <?php
                $req="SELECT * FROM COMPTE WHERE TYPEPROFIL ='en' ";
                $result=mysqli_query($mysqli,$req);
                while ($enreg=mysqli_fetch_array($result))
                {
                ?>
                <option value="<?php echo $enreg['PRENOMCOMPTE'];?>"><?php echo $enreg['PRENOMCOMPTE'];?></option>
                <?php
                }
                ?>
        </tr>
        <tr>
            <td colspan="2"><input name="btnact" type="submit" value="Ajouter Animation"></td>
        </tr>
       
    </form>
    </table>


    <?php
   include('footer.php');
?>
</body>

</html>