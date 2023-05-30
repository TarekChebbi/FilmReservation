<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="main.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
</head>
<body>
    
<?php include('navbar.php'); ?>


    <?php
    require_once('reserveController.php');
    $us=new reserveController();
    $res=$us->liste();
    ?>
    <div class="container">
        <h1 style="color:white;">Liste des Réservation</h1>
        <table class="table table-bordered" style="background-color: white;">
            <thead>
                <tr>
                    <th>Titre de Film</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Siege choisie</th>
                    <th>number de ticket</th>
                </tr>
            </thead>
            <tbody>
                
                <?php 
                if (is_array($res) || is_object($res)){
                foreach ($res as $reserve): ?>
                    <tr>
                        <td><?php echo $reserve['titre']; ?></td>
                        <td><?php echo $reserve['nom']; ?></td>
                        <td><?php echo $reserve['email']; ?></td>
                        <td><?php echo $reserve['phone']; ?></td>
                        <td><?php echo $reserve['siege_option']; ?></td>
                        <td><?php echo $reserve['num_ticket']; ?></td>
                    </tr>
                <?php endforeach; } ?>
            </tbody>
        </table>
    </div>
    
    
    <!-- Bootstrap JS (Optional - Only if you need JavaScript functionality) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>