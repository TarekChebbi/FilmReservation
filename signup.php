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
<form action="signup_action.php" method="post">
    <div class="container" >
        <div class="row justify-content-center mt-5" >
            <div class="col-md-6"style="background-color: white;">
                <form name="frmUser" method="post" action="" class="border p-4">
                    <div class="text-center mb-3">
                     
                        <h3>Enter Signup Details</h3>
                    </div>
                    <div class="form-group">
                        <label for="name">Nouveau Username:</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="mail">Nouveau Email:</label>
                        <input type="text" class="form-control" name="mail" id="mail">
                    </div>
                    <div class="form-group">
                        <label for="password">Nouveau Password:</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" name="submit">Signup</button>
                        <button type="reset" class="btn btn-secondary" >Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>