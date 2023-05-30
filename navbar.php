<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Management</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="admin.php">Film Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="listereservation.php">Liste Réservation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addfilm.php">Ajouter Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deletefilm.php">Supprimer Film</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listefilm.php">Listes des Films</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="modifierfilm.php">Modifier Film</a>
        </li>
       
        <div class="user" style="    position: absolute;
    top: -28px;
    left:1050px">
        <i class="fas fa-bell"></i>
        <i class="fas fa-search"></i>
        <a href="logout.php">Logout</a>
     
    </div>  
        
      </ul>
    </div>
  </nav>

  <!-- Your content goes here -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>