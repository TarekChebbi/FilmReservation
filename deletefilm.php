<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <title>Supprimer film</title>
</head>
<body>
<?php include('navbar.php'); ?>
<div class="container">
<h1 style="color:white;">Supprimer Film</h1>
    <form action="deletefilm_action.php" method="post">
        <div class="mb-3">
            <label for="movie-id" class="form-label" style="color:white;">Série de film:</label>
            <input type="text" id="serie" name="serie" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-danger">Supprimer film</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </form>
</div>

<!-- Bootstrap JS (Optional - Only if you need JavaScript functionality) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>