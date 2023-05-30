<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <style>
        .form-control {
            width: 39%; /* Adjust the width as per your preference */
        }
    </style>
    <title>Movie Management System</title>
</head>
<body>
<?php include('navbar.php'); ?>
<div class="container">
<h1 style="color:white;">Ajouter Film</h1>
    <form action="addfilm_action.php" method="post">
    <div class="mb-3">
            <label for="title" class="form-label" style="color:white;">serie de film:</label>
            <input type="text" id="serie" name="serie" class="form-control"  required><!--style="width:39%;    position: relative;
    right: -31%;"!-->
        </div>    
    <div class="mb-3">
            <label for="title" class="form-label"style="color:white;">Titre:</label>
            <input type="text" id="titre" name="titre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label"style="color:white;">Genre:</label>
            <input type="text" id="genre" name="genre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="director" class="form-label"style="color:white;">Directeur:</label>
            <input type="text" id="directeur" name="directeur" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="release-year" class="form-label"style="color:white;">date de sortie:</label>
            <input type="text" id="date" name="date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label"style="color:white;">Duree:</label>
            <input type="text" id="duree" name="duree" class="form-control" required>
        </div>

        

        <button type="submit" class="btn btn-primary">Ajouter film</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </form>
</div>

<!-- Bootstrap JS (Optional - Only if you need JavaScript functionality) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>