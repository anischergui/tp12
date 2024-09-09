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
    <form action="ajouteranim.php" method="POST">
        <tr>
            <td>CODEANIM : </td>
            <td><input type="text" name="CODEANIM"></td>
        </tr>

        <tr>
            <td>CODETYPEANIM</td>
            <td><SELECT name=CODETYPEANIM>
                <option>--test--</option>
                <?php
                $req="SELECT * FROM type_anim";
                $result=mysqli_query($mysqli,$req);
                while ($enreg=mysqli_fetch_array($result))
                {
                ?>
                <option value="<?php echo $enreg['CODETYPEANIM'];?>"><?php echo $enreg['NOMTYPEANIM'];?></option>
                <?php
                }
                ?>
            </SELECT>
            </td>
        </tr> 
        <tr>
            <td>NOMANIM</td>
            <td><input type="text" name="NOMANIM"></td>
        </tr>        
        <tr>
            <td>DATECREATIONANIM</td>
            <td><input type="date" name="DATECREATIONANIM"></td>
        </tr>        
        <tr>
            <td>DATEVALIDITEANIM</td>
            <td><input type="date" name="DATEVALIDITEANIM"></td>
        </tr>        
        <tr>
            <td>DUREEANIM</td>
            <td><input type="text" name="DUREEANIM"></td>
        </tr>        
        <tr>
            <td>LIMITEAGE</td>
            <td><input type="text" name="LIMITEAGE"></td>
        </tr>        
        <tr>
            <td>TARIFANIM</td>
            <td><input type="text" name="TARIFANIM"></td>
        </tr>        
        <tr>
            <td>NBREPLACEANIM</td>
            <td><input type="text" name="NBREPLACEANIM"></td>
        </tr>
        <tr>
            <td>DESCRIPTANIM</td>
            <td><textarea name="DESCRIPTANIM"></textarea> </td>
        </tr>
        <tr>
            <td>COMMENTANIM</td>
            <td><textarea name="COMMENTANIM"></textarea> </td>
        </tr>
        <tr>
            <td>DIFFICULTEANIM</td>
            <td><input type="text" name="DIFFICULTEANIM"></td>
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