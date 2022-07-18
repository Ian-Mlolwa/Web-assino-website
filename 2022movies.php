<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<html Document!>
    <head>
        <!--screen size settings-->
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BasketBall Game</title>
        <link rel="stylesheet" href="style.css" media="screen">
    </head>

    <body>
        <div class="nav-container">
            <nav class="navbar">
                <h1 id="navbar-logo">BAKEY</h1>
                <div class="menu-toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="nav-bar">
                    <!-- <img src="images/logo.jpeg" width="100px" height="100px"> -->
                    <li><a href="index.php">Home <ion-icon name="home-outline"></ion-icon></a></li>
                    <li><a href="2022movies.php">2022 Movies</a></li>
                    <li>                
                    <div class="dropdown">
                        <a>Franchise
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="marvel.php">Marvel Movies</a>
                            <a href="dc.php">DC Movies</a>
                            <a href="marveltv.php">Marvel TV Shows</a>
                            <a href="dctv.php">DC TV Shows</a>
                            <a href="disney.php">Disney World</a>
                        </div>
                    </div>
                    </li>

                    <li>
                    <div class="dropdown">
                        <a>
                            <?php echo $user_data['user_name']; ?><ion-icon name="person-outline"></ion-icon>
                        </a>
                        <div class="dropdown-content">
                        <a onclick="myFunction()" href="logout.php">Log Out</a>
                        </div>
                    </div>
                </a></li>
                </ul>
            <!--
                <ion-icon name="menu-outline" class="menu-icon" onclick="menutoggle()"></ion-icon>
            -->
            </nav>
        </div>

        <!--BODY-->
        <div class="body">
            <form class="nosubmit">
                <input class="nosubmit" type="search" placeholder="Search...">
                <!--<button type="submit">Search</button>-->
            </form>
            <h1> 2022 Movies</h1>
            <div class="row">
                <div class="overlay">
                    <img class="image" src="images/spider-man no way home.jpg">
                    <div class="note">Spider-Man No Way Home</div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/hotel transolvania 3.jpg">
                    <div class="note">Hotel Transylvania Transfomania</div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/spin.jpg">
                    <div class="note">Spin</div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/dog.jpg">
                    <div class="note">Dog</div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/cinderella story.jpg">
                    <div class="note">Cinderella Story</div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/witch hunt.jpg">
                    <div class="note">Witch Hunt</div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/fairy tale.jpg">
                    <div class="note">Fairy Tale</div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/eternals.jpg">
                    <div class="note">Eternals</div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/demon slayer: kimetsu no yiba.jpg">
                    <div class="note"><p>Demo Slayer: Kimetsu No Yiba</p></div>
                </div>
            </div>

    
        </div>

        <!--footer-->
        <div class="footer-container">
            <div class="footer">
                <div class="footer-heading footer-1">
                    <h2>Abous Us</h2>
                    <a href="about.php">Info</a>
                    <a href="#">Demo</a>
                    <a href="#">Customers</a>
                    <a href="#">Terms of Services</a>
                </div>
                <div class="footer-heading footer-2">
                    <h2>Contact Us</h2>
                    <a href="#">Supports</a>
                    <a href="#">Contact</a>
                </div>
                <div class="footer-heading footer-3">
                    <h2>Social Media</h2>
                    <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="https://www.youtube.com/"><ion-icon name="logo-youtube"></ion-icon></a>
                    <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                </div>
                <div class="footer-email-form">
                    <h2>Join our newsletter</h2>
                    <input type="email" placeholder="Enter sour email address" id="footer-email">
                    <input type="submit" value="Submit" id="footer-email-btn">
                </div>
            </div>
        </div>

    <script src="script.js"></script> 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>