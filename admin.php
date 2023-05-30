<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
</head>
<body>
<?php
if($_SESSION["name"]) {
?>
<?php include('navbar.php'); ?>
<section id="services" class="container-fluid" style="background: rgb(253, 253, 254);display:flex;justify-content:center;align-items:center;flex-direction:column;height:100vh;background-image: linear-gradient( rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url('images/hero page/7.jpg');">
        <div class="container services mt-3" style="background: rgb(253, 253, 254);display:flex;justify-content:center;align-items:center;">
            <div class="row">
                <div class="container col-12 services-container"style="margin-top:-87px;background-image: linear-gradient( rgba(0,0,0,0.9),rgba(0,0,0,0.9)),url('images/hero page/7.jpg');">
                <div class="col-md-4">
                        <!-- service box -->
                        <div class="service-box text-center color3">
                            <img src="images/show.png" alt="Insert Data" width=60 />
                            <h3 class="mb-1 mt-0">Liste Réservation</h3>
                            <p class="mb-0">Cliquez sue le button pour afficher la liste de réservation</p>
                            <a href="listereservation.php" class="text-decoration-none"><button class="button">Ouvrir</button></a>
                        </div>
                    </div>   
                <div class="col-md-4">
                        <!-- service box -->
                        <div class="service-box text-center color3">
                            <img src="images/insert.png" alt="Insert Data" width=60 />
                            <h3 class="mb-1 mt-0">Ajouter Film</h3>
                            <p class="mb-0">Cliquez sue le button pour ajouter Nouveau Film</p>
                            <a href="addfilm.php" class="text-decoration-none"><button class="button">Ouvrir</button></a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- service box -->
                        <div class="service-box text-center color3">
                            <img src="images/delete.png" alt="show Data" width=60 />
                            <h3 class="mb-1 mt-0">Supprimer Film</h3>
                            <p class="mb-0">Cliquez sue le button pour Supprimer Film</p>
                            <a href="deletefilm.php" class="text-decoration-none"><button class="button">Ouvrir</button></a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- service box -->
                        <div class="service-box text-center color3">
                            <img src="images/show.png" alt="update Data" width=60 />
                            <h3 class="mb-1 mt-0">Liste Film</h3>
                            <p class="mb-0">Cliquez sur le button pour Afficher la liste des Films</p>
                            <a href="listefilm.php" class="text-decoration-none"><button class="button">Ouvrir</button></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- service box -->
                        <div class="service-box text-center color3">
                            <img src="images/insert.png" alt="delete Data" width=60 />
                            <h3 class="mb-1 mt-0">Modifier Film</h3>
                            <p class="mb-0">Cliquez sur le button pour Modifier Film</p>
                            <a href="modifierfilm.php" class="text-decoration-none"><button class="button">Ouvrir</button></a>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
       
    </section>

   
    
    
    <!-- Bootstrap JS (Optional - Only if you need JavaScript functionality) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
    <?php
}else echo "<h1>Please login first .</h1>";
?>
</body>
</html>