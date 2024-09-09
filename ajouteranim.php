 <?php
include('connexion.php');
        $codeAnim=$_POST['CODEANIM'];
        $codeTypeAnim=$_POST['CODETYPEANIM'];
        $nomAnim=$_POST['NOMANIM'];
        $dateCreationAnim=$_POST['DATECREATIONANIM'];
        $dateValiditeAnim=$_POST['DATEVALIDITEANIM'];
        $dureeAnim=$_POST['DUREEANIM'];
        $limiteAge=$_POST['LIMITEAGE'];
        $tarifAnim=$_POST['TARIFANIM'];
        $nbPlaceAnime=$_POST['NBREPLACEANIM'];
        $descriptAnim=$_POST['DESCRIPTANIM'];
        $commentAnim=$_POST['COMMENTANIM'];
        $diffulteAnim=$_POST['DIFFICULTEANIM'];

        $requete="INSERT INTO animation VALUES ( '$codeAnim', '$codeTypeAnim', '$nomAnim', '$dateCreationAnim', '$dateValiditeAnim', '$dureeAnim', '$limiteAge', '$tarifAnim', '$nbPlaceAnime', '$descriptAnim', '$commentAnim', '$diffulteAnim') "; 
        echo $requete;
        if(mysqli_query($mysqli,$requete))
            echo "Animation ajoutée";
        else
            echo"Execution de la requete impossible";
               
?>