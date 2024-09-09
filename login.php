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

<body class="body">
    <!-- Barre de navigation -->
<?php
    include('navigation.php');
?>
    <!-- Fin de la barre de navigation -->

<form action="login.php" method="post">
	
	<div class="entete">
</div>
	<div class="connexion">

        <h2 style="text-align: center; padding-top: 80px;">Connexion</h2>
       	<table style="padding: 10px; margin: auto;">
		<tr>
			<td><strong>Login</strong><br></td>
			<td><input type="text" name="login"></td>
		</tr>
		<tr>
			<td><strong>Mot de passe </strong></td>
			<td><input type="password" name="mdp"></td>
		</tr>
        <tr>
        	<td colspan="2"><input type="submit" name="bouton" value="identifiez-vous" class="valider"></td>
        </tr>
	</table>
<br>

</div>
<?php
include('connexion.php');   
if (isset($_POST['bouton']))    
{

	$login=$_POST["login"];
	$mdp=$_POST["mdp"];

	$message1="Connexion Refusée";
	
	
	
		$Requete2="SELECT USER FROM compte WHERE MDP ='$mdp' and USER ='$login' ";

		$Resultat2=mysqli_query($mysqli,$Requete2)or die("impossible d'executer la requête 2");

		$Num2=mysqli_num_rows($Resultat2);

			if($Num2==1){
			$_SESSION['USER'] = $login;
			$user=$_SESSION['USER']; 
            $req="SELECT * FROM compte WHERE user='$user'";
            $result=mysqli_query($mysqli,$req);
            while ($enreg=mysqli_fetch_array($result)){
            $typeProf=$enreg['TYPEPROFIL'];
            $_SESSION['TYPEPROFIL']=$typeProf;
            header("Location:index.php");
            }
        }
else
echo($msg=$message1);
}
?>		

</form>
</body>
</html>