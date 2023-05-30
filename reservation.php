<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie Reservation</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  
  <header><div class="logo">
    <a href="index.php">
        <img src="images/logo/e.png" alt="">
        <h3>VoirFilm</h3></a>
    </div>
    <div class="user">
       
       <a href="logoutreserve.php" style="position: relative;
    right: -87%;
    top: -66px;">Logout</a>
    
   </div> </header>
<?php
  require_once('filmController.php');
  $us=new filmController();
  $res=$us->liste();?>
  <div class="container">
    <h1 style="color:white">Film Réservation</h1>
    <form action="reservation_action.php" method="post">
      <div class="form-group">
        <label for="name"style="color:white">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="nom" required>
      </div>
      <div class="form-group">
        <label for="email"style="color:white">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone"style="color:white">Phone Number:</label>
        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" name="phone" required>
      </div>
      <div class="form-group">
        <label for="movie"style="color:white">Film:</label>
        <select class="form-control" id="movie" name="movie" required>
        <option value="" selected disabled>Select a movie</option>
  <?php
  if (is_array($res) || is_object($res)){
  foreach ($res as $film) {
    echo '<option value="' . $film['id'] . '">' . $film['titre'] . '</option>';
  }}
  ?>
        </select>
      </div>
      <div class="form-group">
        <label for="phone"style="color:white">Titre de Film:</label>
        <input type="text" class="form-control" id="titre" placeholder="Enter Film Name" name="titre" required>
      </div>
    
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#movie').change(function() {
      var selectedTitle = $('#movie option:selected').text();
      $('#titre').val(selectedTitle);
    });
  });
</script>
      <div class="form-group"style="color:white">
        <label>Seating Option:</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="option" id="Front stage" value="Front stage" required>
          <label class="form-check-label" for="Front stage">
            
Front stage


          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="option" id="Middle" value="Middle">
          <label class="form-check-label" for="Middle">
          Middle


          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="option" id="Balcony" value="Balcony">
          <label class="form-check-label" for="Balcony">
          Balcony
          </label>
        </div>
      </div>
      <div class="form-group">
        <label for="numTickets"style="color:white">Number of Tickets:</label>
        <input type="number" class="form-control" id="numTickets" name="ticket" placeholder="Enter the number of tickets" required>
      </div>
      <button type="submit" class="btn btn-primary">Réserver</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>