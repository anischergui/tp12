<?php
    include('connexion.php');
    session_start();
    $us=$_SESSION['USER'];
    $Requete1="SELECT USER FROM compte WHERE USER='$us'";
    $Resultat1=mysqli_query($mysqli,$Requete1);
    $Num1=mysqli_num_rows($Resultat1);
?>
    <!-- Barre de navigation -->
    <header>
        <nav class="nav">

            <input type="checkbox" id="navCheckbox" class="navCheckbox">
            <label for="navCheckbox" class="navToggle">
                <img class="menuIcon" src="images/Hamburger_icon.svg" alt="hamburger menu icon"/>
                <img class="closeIcon" src="images/cross_icon.png" alt="cross menu icon" />
            </label>

            <ul class="nav-menu">
                <li class="nav-item-logo">
                    <a href="index.php" class="nav-link">
                       <img src="images/FM_miniLogo.png" id="logo" /> <!--Image accueil-->
                      
                    </a>
                </li>

                <li class="nav-second-item">
                    <a href="animation.php" class="nav-link">
                        <span class="nav-title">ANIMATION</span>
                    </a>
                    <?php
                    if(isset($_SESSION['USER']) && !empty($_SESSION['USER'])) 
                    {
                        if($_SESSION['TYPEPROFIL']=='en') 
                            {
                            echo'<ul class="submenu">
                                <li><a href="ajouteranimation.php">Ajouter une animation</a></li>
                                <li><a href="ajouteractivite.php">Ajouter une activité</a></li>
                                </ul>';     
                            }
                        if($_SESSION['TYPEPROFIL']=='va') 
                            {
                                
                            echo'<ul class="submenu">
                                <li><a href="animation.php">test</a></li>
                                <li><a href="#">test</a></li>
                                </ul>';   
                                error_reporting(0);
                            }
                    }
                    ?>
                <!--
                         <ul class="submenu">
                            <li><a href="#">A CHANGER </a></li>
                            <li><a href="#">A CHANGER</a></li>
                        </ul>
                -->
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="nav-title">A CHANGER</span>
                    </a>
                    <?php
                    if(isset($_SESSION['USER']) && !empty($_SESSION['USER'])) 
                    {
                        if($_SESSION['TYPEPROFIL']=='en') 
                            {
                            echo'<ul class="submenu">
                                <li><a href="animation.php">Ajouter une animation</a></li>
                                <li><a href="#">Ajouer une activité</a></li>
                                </ul>';     
                            }
                        if($_SESSION['TYPEPROFIL']=='va') 
                            {
                            echo'<ul class="submenu">
                                <li><a href="animation.php">test</a></li>
                                <li><a href="#">test</a></li>
                                </ul>';     
                            }                       
                    }
                    ?>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="nav-title">A CHANGER</span>
                    </a>
                </li>
               
                 <li class="nav-item">
                    <a href="login.php" class="nav-link">
                        <?php
                        if($Num1>=1){
                            echo "<!--";
                        }
                        ?>
                        <span class="nav-title">CONNEXION</span>
                        <?php
                        if($Num1>=1){
                            echo "-->";
                        }
                        ?>

                        <?php
                        if($Num1>=1){
                            echo '<span class=nav-title>'.$_SESSION['USER'].'</span>';
                        }
                        ?>
                    </a>

                        <?php
                        if($Num1>=1){

                            echo '<ul class="submenu">
                            <li><a href="logout.php" name="deco">* Se déconnecter</a></li>                         
                        </ul>';

                        }
                        ?>
                </li>
            </ul>
        </nav>
</header>