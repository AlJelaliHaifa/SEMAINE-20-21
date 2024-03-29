<?php
if  (isset ($_SESSION["Log"])){?>
<div class="row"> 
            <div class="col-6"> 
                
                <img src="../images/jarditou_logo.jpg"  class="d-none d-md-block w-50 mt-2" alt="Image responsive" title="Image logo">
            </div>
            <div class="col-6">
                
                <h2 class="d-none d-md-block display-6 float-right mr-5 mt-3">Tout le jardin</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

            <nav class="navbar navbar-expand-sm bg-light navbar-light"> 
                <span class=navbar-brand>Jarditou.com</span> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar1">
                    <span class="navbar-toggler-icon"></span>
                </button> 
                <div class="collapse navbar-collapse" id="collapsibleNavbar1">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../home.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../table.php">Tableau</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contact.php">Contact</a>
                        </li>
            <?php if ($_SESSION["status"] == 0) {?>
                        <li class="nav-item">
                            <a class="nav-link" href="../basket.php">Panier</a>
                        </li>
            <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Deconnexion</a>
                        </li>
                    </ul>
                </div>
                <form action = '#' class="form-inline d-sm-none d-md-block" id="search" role="search" method="post"> 
                        <label for="search-imput" ></label>
                        <input type="search"  id="search-imput" name="Entrerpromotion" spellcheck="false" placeholder="Votre promotion"> 
                        <input value="Recherche" type="submit" class="btn btn-outline-info py-1"> 
                </form>
            </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <img src="../images/promotion.jpg"  class="w-100" alt="Image responsive" title="Image promotion">
            </div>
        </div>


        <?php }

else  {?>
    
    <!DOCTYPE html>
    <html lang="fr"> 
    
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0",shrink-to-fit=no>
        <title>Document Contact</title>
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container"> 
            <div class="row">
                <div class="col-12">
                    <img src="../images/promotion.jpg"  class="w-100" alt="Image responsive" title="Image promotion"> 
                </div>
            </div>
        <?php
            echo "<h1 class='d-flex justify-content-center'>"."Vous n'êtes pas autorisé à acceder à cette page."."</h1>";
            echo "<h3 class='d-flex justify-content-center'>"."Veuillez vous inscrire ou vous authentifier"."</h3>";
            echo "<br>";
            echo "<br>";
        ?>
            <a  class="btn btn-success d-flex justify-content-center" href="../index.php">Inscription/Connexion</a>
        </div>      
        
        <!--fichiers Javascript nécessaires à Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        </body>
        </html>
        
       <?php } ?>