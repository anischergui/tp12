 <?php
include('connexion.php');
        $CODEANIM=$_POST['CODEANIM'];
        $DATEACT=$_POST['DATEACT'];
        $CODEETATACT=$_POST['CODEETATACT'];
        $HRRDVACT=$_POST['HRRDVACT'];
        $PRIXACT=$_POST['PRIXACT'];
        $HRDEBUTACT=$_POST['HRDEBUTACT'];
        $HRFINACT=$_POST['HRFINACT'];
        $DATEANNULEACT=$_POST['DATEANNULEACT'];
        $NOMRESP=$_POST['NOMRESP'];
        $PRENOMRESP=$_POST['PRENOMRESP'];

        $canim=$_GET['CODEANIM'];
        $ddateact=$_GET['DATEACT'];
        $_SESSION['CODEANIM']=$canim;
        $_SESSION['DATEACT']=$ddateact;


        $requete="INSERT INTO activite VALUES ( '$CODEANIM', '$DATEACT', '$CODEETATACT', '$HRRDVACT', '$PRIXACT', '$HRDEBUTACT', '$HRFINACT', '$DATEANNULEACT', '$NOMRESP', '$PRENOMRESP') "; 
        echo $requete;
        if(mysqli_query($mysqli,$requete))
            echo "Activité ajoutée";
        else
            echo"Execution de la requete impossible";
               
?>