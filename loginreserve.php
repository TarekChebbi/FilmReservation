<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('127.0.0.1:3306','root','','filmprojet') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM login_reserve WHERE mail='" . $_POST["mail"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Invalid mail or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:reservation.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
<div class="logo">
    <a href="index.php">
        <img src="images/logo/e.png" alt="">
        <h3>VoirFilm</h3></a>
    </div>
    <title>User Login</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container" >
        <div class="row justify-content-center mt-5" >
            <div class="col-md-6"style="background-color: white;">
                <form name="frmUser" method="post" action="" class="border p-4">
                    <div class="text-center mb-3">
                        <?php if($message!="") { echo '<div class="alert alert-danger">' . $message . '</div>'; } ?>
                        <h3>Enter Login Details To Reserve Film</h3>
                    </div>
                    <div class="form-group">
                        <label for="username">Email:</label>
                        <input type="text" class="form-control" name="mail" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                        <input type="button" class="btn btn-primary" onclick="location.href='signup.php';" value="Signup" />
                        <button type="reset" class="btn btn-secondary" >Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>