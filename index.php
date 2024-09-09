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
include('navigation.php')
?>
    <!-- Fin de la barre de navigation -->
    <main>
        <h1>Accueil</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="wrap-slide">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-boutton" id="banner1">
                    <input type="radio" name="radio-boutton" id="banner2">
                    <input type="radio" name="radio-boutton" id="banner3">
    
                    <div class="premier slide">
                        <a href="activite1.php">
                            <img src="images/montage.jpg" alt="">
                        </a>
                    </div>
                    <div class="slide">
                        <a href="#">
                        <img src="images/riviere.jpg" alt="">
                        </a>
                    </div>
                    <div class="slide">
                        <img src="#" alt="">
                    </div>
    
                    <div class="navigation-auto">
                        <div class="boutton-auto1"></div>
                        <div class="boutton-auto2"></div>
                        <div class="boutton-auto3"></div>
                    </div>
    
                    <div class="navigation-manuel">
                        <label for="banner1" class="boutton-manuel"></label>
                        <label for="banner2" class="boutton-manuel"></label>
                        <label for="banner3" class="boutton-manuel"></label>
                    </div>
                </div>
            </div>
        </div>
    
        <script>
            var counter = 1;
            setInterval(function() {
                document.getElementById('banner' + counter).checked = true;
                counter++;
    
                if (counter > 3) {
                    counter = 1;
                }
            }, 5000);
        </script>
        <h2>Animation</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="productContainer">
            <div class="productDetail">
                <img class="productPic1" src="images/montage.jpg" alt="Activite1" />
                <div class="productName">Activité 1</div>
            </div>
            <div class="productDetail">
                <img class="productPic2" src="images/riviere.jpg" alt="Activite2" />
                <div class="productName">Activité 2</div>
            </div>
            <div class="productDetail">
                <img class="productPic3" src="images/montage.jpg" alt="Activite3" />
                <div class="productName">Activité 3</div>
            </div>
        </div>

        <h2>Animation2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="productContainerPC">
            <div class="subProductContainer">
                <div class="productDetail">
                    <img class="productPCPic" src="#" alt="Activité 1" />
                    <div class="productName">Activité 1</div>
                </div>
                <div class="productDetail">
                    <img class="productPCPic" src="#" alt="Activité 2" />
                    <div class="productName">Activité 2</div>
                </div>
            </div>
            <div class="productDetail">
                <img class="productPCPic3" src="#" alt="Activité 3" />
                <div class="productName">Activité 3</div>
            </div>
        </div>
    </main>
<?php
   include('footer.php');
?>
</body>

</html>