<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="images/logo/e.png">
    <title>VoirFilm</title>
</head>
<body>

    <!--Header section-->
    <header>


    <div class="logo">
        <img src="images/logo/e.png" alt="">
        <h3>VoirFilm</h3>
    </div>
    <div class="nav" id="small_menu">
        <button class="hamburger" id="hamburger">
            <i class="fas fa-bars"></i>
        </button>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="#hollywood">Movies</a></li>
            <li><a href="#tollywood">Generes</a></li>
            <li><a href="#youtube">Series</a></li>
        </ul>
    </div>
    <div class="user">
       
        <a href="signup.php" style="position: relative;
    right: -120%;">SignUp User</a>
     
    </div>  
  
    <div class="user">
       
        <a href="login.php">Login Admin</a>
     
    </div>  
</header>
<!----------------->

<!--Hero section-->
<section>
    <div class="heropage">
        <div class="inside-heropage">
            <span>NOW STREAMING</span>
            <div class="line1">

            </div>
            <h1>PEAKY BLINDERS</h1>
            <p>Action,Drama,Sci-fi | 2021 | USA | 142 min</p>
            <div class="btn1">
       
            <a href="loginreserve.php"><i class="fas fa-heart"></i>Réserver ici</a>
            </div>
        </div>
    </div>
    <div class="poster">
        <img src="images/hero page/3.jpg" alt="">
    </div>
</section>


        <!------Lates movies---->
        <div class="latest-movies">
            <h1>Action</h1>
            <div class="latest-container">
                <div class="latest-inside">
                    <img src="images/horizantal/spider.jpg" alt="">
                    
                    <div class="heading1">
                        <h4><?php /*foreach ($films as $film): ?><?php echo $film['titre']; ?> <?php endforeach; */?>Spider-Man</h4>
                        <p><span>&#9733;&#9733;&#9733;&#9733;&#9734; </span></p>
                        <h6>Action</h6>
                    </div>
                   <div class="btn2">
                       <a href="reservation.php">Réserver</a>
                   </div>
                </div>
                <div class="latest-inside">
                    <img src="images/horizantal/darkness.jpg" alt="">
                    <div class="heading1">
                        <h4>People Who Eat Darkness</h4>
                        <p><span>&#9733;&#9733;&#9733;&#9733;&#9734; </span></p>
                        <h6>Action</h6>
                    </div>
                   <div class="btn2">
                       <a href="reservation.php">Réserver</a>
                   </div>
                </div>
                <div class="latest-inside">
                    <img src="images/horizantal/forrest.jpg" alt="">
                    <div class="heading1">
                        <h4>Forrest Gump</h4>
                        <p><span>&#9733;&#9733;&#9733;&#9733;&#9734; </span></p>
                        <h6>Action</h6>
                    </div>
                   <div class="btn2">
                       <a href="reservation.php">Réserver</a>
                   </div>
                </div>
                <div class="latest-inside">
                    <img src="images/horizantal/inception.jpg" alt="">
                    <div class="heading1">
                        <h4>Inception</h4>
                        <p><span>&#9733;&#9733;&#9733;&#9733;&#9734; </span></p>
                        <h6>Action</h6>
                    </div>
                   <div class="btn2">
                       <a href="reservation.php">Réserver</a>
                   </div>
                </div>

                <div class="latest-inside">
                    <img src="images/horizantal/john.jpg" alt="">
                    <div class="heading1">
                        <h4>John Wick</h4>
                        <p><span>&#9733;&#9733;&#9733;&#9733;&#9734; </span></p>
                        <h6>Action</h6>
                    </div>
                   <div class="btn2">
                       <a href="reservation.php">Réserver</a>
                   </div>
                </div>
            </div>
        </div>
     
        <!---Hollywood Movies-->
        <section>
         
        
        
        
        
        <div class="hollywood-movies" id="hollywood">
           
           
           
            <h1>Adventure</h1>
            <div class="hollywood-container">
                <div class="hollywood-inside">
                   
                   
                   
                   
                    <img src="images/hollywood/2.jpg" alt="">
                   
                    <h3>TENET</h3>
                    <div class="imdb">
                        <p>9.8</p>
                      
                    </div>
                </div>
                <div class="hollywood-inside">
                    <img src="images/hollywood/12.jpg" alt="">
                    <h3>WW 84</h3>
                    <div class="imdb">
                        <p>8.5</p>
                    </div>
                </div>
                <div class="hollywood-inside">
                    <img src="images/hollywood/13.jpg" alt="">
                    <h3>MONOCHROME</h3>
                    <div class="imdb">
                        <p>9.2</p>
                    </div>
                </div>
                <div class="hollywood-inside">
                    <img src="images/hollywood/14.jpg" alt="">
                    <h3>MORTAL</h3>
                    <div class="imdb">
                        <p>8.5</p>
                    </div>
                </div>
                <div class="hollywood-inside">
                    <img src="images/hollywood/15.jpg" alt="">
                    <h3>DONT LOOK BACK</h3>
                    <div class="imdb">
                        <p>8.9</p>
                    </div>
                </div>
                <div class="hollywood-inside">
                    <img src="images/hollywood/3.jpg" alt="">
                    <h3>BLOOD HOUND</h3>
                    <div class="imdb">
                        <p>8.5</p>
                    </div>
                </div>
                <div class="hollywood-inside">
                    <img src="images/hollywood/1.jpg" alt="">
                    <h3>REUNION</h3>
                    <div class="imdb">
                        <p>9.5</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="more1">
            <a href="">View More</a>
        </div>
    </section>
    <!------------->

            <!---tollywood Movies-->
            <section>
                <div class="tollywood-movies" id="tollywood">
                    <h1>Mysterie</h1>
                    <div class="tollywood-container">
                        <div class="tollywood-inside">
                            <img src="images/telugumovies/a.jpg" alt="">
                            <h3>BHEESHMA</h3>
                            <div class="imdb">
                                <p>9.8</p>
                            </div>
                        </div>
                        <div class="tollywood-inside">
                            <img src="images/telugumovies/16.jpg" alt="">
                            <h3>BIMBISARA</h3>
                            <div class="imdb">
                                <p>8.5</p>
                            </div>
                        </div>
                        <div class="tollywood-inside">
                            <img src="images/telugumovies/19.jpg" alt="">
                            <h3>CITIMAR</h3>
                            <div class="imdb">
                                <p>9.2</p>
                            </div>
                        </div>
                        <div class="tollywood-inside">
                            <img src="images/telugumovies/15.jpg" alt="">
                            <h3>RAMA RAO</h3>
                            <div class="imdb">
                                <p>8.5</p>
                            </div>
                        </div>
                        <div class="tollywood-inside">
                            <img src="images/telugumovies/27.jpg" alt="">
                            <h3>VAKEEL SAB</h3>
                            <div class="imdb">
                                <p>8.9</p>
                            </div>
                        </div>
                        <div class="tollywood-inside">
                            <img src="images/telugumovies/e.jpg    " alt="">
                            <h3>SRI KARAM</h3>
                            <div class="imdb">
                                <p>8.5</p>
                            </div>
                        </div>
                        <div class="tollywood-inside">
                            <img src="images/telugumovies/26.jpg" alt="">
                            <h3>JERSEY</h3>
                            <div class="imdb">
                                <p>9.5</p>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="more2">
                   <a href="">View More</a>
               </div>
            </section>
            <!------------->


              <!---collywood Movies-->
  <section>
    <div class="collywood-movies">
        <h1>Drama</h1>
        <div class="collywood-container">
            <div class="collywood-inside">
                <img src="images/malayalam/1.jpg" alt="">
                <h3>DHRISYAM 2</h3>
                <div class="imdb">
                    <p>9.8</p>
                </div>
            </div>
            <div class="collywood-inside">
                <img src="images/malayalam/2.jpg" alt="">
                <h3>A and K</h3> 
                <div class="imdb">
                    <p>7.5</p>
                </div>
            </div>
            <div class="collywood-inside">
                <img src="images/malayalam/3.jpg" alt="">
                <h3>MIDNIGHT</h3>
                <div class="imdb">
                    <p>8.0</p>
                </div>
            </div>
            <div class="collywood-inside">
                <img src="images/malayalam/5.jpg" alt="">
                <h3>CIA</h3>
                <div class="imdb">
                    <p>8.5</p>
                </div>
            </div>
            <div class="collywood-inside">
                <img src="images/malayalam/4.jpg" alt="">
                <h3>JOHNNY</h3>
                <div class="imdb">
                    <p>9.0</p>
                </div>
            </div>
            <div class="collywood-inside">
                <img src="images/malayalam/6.jpg   " alt="">
                <h3>DRIVING LICENCE</h3>
                <div class="imdb">
                    <p>9.2</p>
                </div>
            </div>
            <div class="collywood-inside">
                <img src="images/malayalam/7.jpg" alt="">
                <h3>1971</h3>
                <div class="imdb">
                    <p>9.5</p>
                </div>
            </div>
        </div>
    </div>
    <div class="more3">
        <a href="">View More</a>
    </div>
        </section>




   




<!---Footer-->
    <div class="footer" style="position: absolute;
    margin-top: 2336px;    height: 22%;">
        <div class="inside-footer">
            <div class="footer-container">
                <div class="logopart">
                    <h1>VoirFilm </h1>
                    <img src="images/logo/e.png" alt="">
                </div>
                <div class="copyright">
                    <p>copyright &copy <span>TareK Chebbi</span>,All Rights Reserved-2023.</p>
                </div>
                <div class="socials">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest"></i>                    
                </div>
                <div class="btn4">
                    <a href="">Subscribe Now</a>
                </div>
            </div>
        </div>
    </div>

<!------>

<!--Goto button-->
<div class="scroll">
    <a href=""><i class="fas fa-arrow-up"></i></a>
</div>
</body>
</html>