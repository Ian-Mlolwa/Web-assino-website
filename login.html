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

            //read from database
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] === $password)
                    {
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;        
                    }
                }
            }

            echo "wrong username or password!";
        } else
        {
            echo "wrong username or password!";
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
                <h1 href="index.php" id="navbar-logo">BAKEY</h1>
                <div class="menu-toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
        <div>
            <div class="login">
                <form name="loginform" method="post">
                    <p class="sign-head">SIGN IN</p>
                    <ion-icon name="person-circle-outline"></ion-icon><input type="text" name="user_name" placeholder="User name"><br>
                    <ion-icon name="lock-closed-outline"></ion-icon><input type="password" name="password" placeholder="Password"><br>
                    <a class="form" href="">forgot password?</a><br>
                    <button onclick="loginFunction()" type="submit" class="btn-account">SIGN IN</button><br>
                    <span style="color: blue;">Don't have an account?</span><br>
                    <a class="form-link" href="signup.php">SIGN UP</a>
                </form>
            </div>
        </div>
        <!--
        <script>
            function validateform(){
                var name = document.getElementById("name");
                var password = document.getElementById("password");

                if (name == null || name==""){
                    alert("Name can't be black");
                    return false;
                } else if (password.length<6){
                    alert("Password must atleast be of 6 characters")
                    return false;
                }
            }
        </script>
        -->


    <script src="script.js"></script> 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>