<!DOCTYPE html>
<html>
<head>
    <title>Liste film</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
</head>
<body>
<?php include('navbar.php'); ?>
    <?php
    require_once('filmController.php');
    $us=new filmController();
    $res=$us->liste();
    ?>
    <div class="container">
        <h1 style="color: white;">Liste des films</h1>
        <table class="table table-bordered" style="background-color: white;" >
            <thead>
                <tr>
                    <th>Série de film</th>
                    <th>Titre</th>
                    <th>Genre</th>
                    <th>Directeur</th>
                    <th>Date de sortie</th>
                    <th>Durée</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php if (is_array($res) || is_object($res)){
                foreach ($res as $film): ?>
                    <tr>
                        <td><?php echo $film['serie_film']; ?></td>
                        <td><?php echo $film['titre']; ?></td>
                        <td><?php echo $film['genre']; ?></td>
                        <td><?php echo $film['directeur']; ?></td>
                        <td><?php echo $film['date_sortie']; ?></td>
                        <td><?php echo $film['duree']; ?></td>
                      <?php echo  "<td><a href ='modifierfilm.php?id=$film[serie_film]'>Modifier</a></td>" ; ?>
                      <?php  echo "<td><a href ='supfilm.php?id=$film[serie_film]'>Supprimer</a></td>"; ?>
                    </tr>
                <?php endforeach;
                } ?>
            </tbody>
        </table>
    </div>
    
    <!-- Bootstrap JS (Optional - Only if you need JavaScript functionality) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>