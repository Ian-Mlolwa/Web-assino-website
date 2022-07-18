<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //save to database
            $user_id = random_num(30);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        } else {

            echo "Please enter some valid information!";
        }
    }

?>

<html Document!>
    <head>
        <!--screen size settings-->
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BasketBall Game</title>
        <link rel="stylesheet" href="style.css" media="screen">
    </head>

    <body class="account">
        <div class="nav-container">
            <nav class="navbar">
                <h1 id="navbar-logo">BAKEY</h1>
                <div class="menu-toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            <!--
                <ion-icon name="menu-outline" class="menu-icon" onclick="menutoggle()"></ion-icon>
            -->
            </nav>
        </div>
        
        <div class="reg-form">
            <form name="regform" method="post">
                <p class="sign-head">SIGN UP</p>
                <ion-icon name="person-circle-outline"></ion-icon><input type="text" name="user_name" placeholder="User Name"><br>
                <ion-icon name="lock-closed-outline"></ion-icon><input type="password" name="password" placeholder="Password"><br>
                <ion-icon name="lock-closed-outline"></ion-icon><input type="email" name="email" placeholder="enter email"><br>
                <button onclick="register()" type="submit" class="btn-account">SIGN UP</button>
            </form>            
        </div>
  

    <script src="script.js"></script> 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>