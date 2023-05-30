<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <title>Movie Management System</title>
</head>
<body>
<?php
require_once('filmController.php');
$filmCtr=new filmController();
$res=$filmCtr->getfilm($_GET['id']);
?>
<?php include('navbar.php'); ?>
<div class="container">
<h1 style="color:white;">Modifier Film</h1>
    <form action="modifierfilm_action.php" method="post">
    <div class="mb-3">
            <label for="title" class="form-label"style="color:white;">serie de film:</label>
            <input type="text" id="serie" name="serie" value = "<?php echo $res['serie_film'] ?> "class="form-control" required>
        </div>    
    <div class="mb-3">
            <label for="title" class="form-label"style="color:white;">Titre:</label>
            <input type="text" id="titre" name="titre" value = "<?php echo $res['titre'] ?> " class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label"style="color:white;">Genre:</label>
            <input type="text" id="genre" name="genre" value = "<?php echo $res['genre'] ?> " class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="director" class="form-label"style="color:white;">Directeur:</label>
            <input type="text" id="directeur" name="directeur" value = "<?php echo $res['directeur'] ?> " class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="release-year" class="form-label"style="color:white;">date de sortie:</label>
            <input type="text" id="date" name="date" value = "<?php echo $res['date_sortie'] ?> " class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label"style="color:white;">Duree:</label>
            <input type="text" id="duree" name="duree" value = "<?php echo $res['duree'] ?> " class="form-control" required>
        </div>

        

        <button type="submit" class="btn btn-primary">Modifier film</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </form>
</div>

<!-- Bootstrap JS (Optional - Only if you need JavaScript functionality) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>