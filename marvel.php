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
        <title>Movie Blog</title>
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
                                <a>Franchise</a>
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
                    </li>
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
            <h1>MARVEL</h1>
            <div class="row">
                <div class="overlay">
                    <img class="image" src="images/iron man.jpg">
                    <div class="note"><p>Iron Man</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/hulk.jpg">
                    <div class="note"><p>Hulk</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/iron man 2.jpg">
                    <div class="note"><p>Iron Man 2</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/thor.jpg">
                    <div class="note"><p>Thor</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/captain america.jpg">
                    <div class="note"><p>Captain America</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/avengers.jpg">
                    <div class="note"><p>Avengers</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/iron man 3.jpg">
                    <div class="note"><p>Iron Man 3</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/thor the dark world.jpg">
                    <div class="note"><p>Thor The Dark World</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/captain america the winter soldier.jpg">
                    <div class="note"><p>Captain America The Winter Soldier</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/guardians of the galaxy.jpg">
                    <div class="note"><p>Guardians Of The Galaxy</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/avengers age of ultron.jpg">
                    <div class="note"><p>Avengers Age Of Ultron</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/ant man.jpg">
                    <div class="note"><p>Ant-Man</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/captain america civil war.jpg">
                    <div class="note"><p>Captain America Civil War</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/doctor strange.jpg">
                    <div class="note"><p>Doctor Strange</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/guardians of the galaxy vol2.jpg">
                    <div class="note"><p>Guardians Of The Galaxy vol2</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/thor ragnarok.jpg">
                    <div class="note"><p>Thor Ragnarok</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/spider-man.jpg">
                    <div class="note"><p>Spider-Man</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/spider-man 2.jpg">
                    <div class="note"><p>Spider-Man 2</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/spider-man 3.jpg">
                    <div class="note"><p>Spider-Man 3</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/the amazing spider-man.jpg">
                    <div class="note"><p>The Amazing Spider-man</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/the amazing spider-man 2.jpg">
                    <div class="note"><p>The Amazing Spider-Man 2</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/spider-man homecoming.jpg">
                    <div class="note"><p>Spider-Man Homecoming</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/spider-man far from home.jpg">
                    <div class="note"><p>Spider-Man Far From Home</p></div>
                </div>
                <div class="overlay">
                    <img class="image" src="images/spider-man no way home.jpg">
                    <div class="note"><p>Spider-Man No Way Home</p>
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
                    <a href="contact.php">Contact</a>
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