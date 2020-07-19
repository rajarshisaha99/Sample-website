<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        
            <a class="logo" href="#">
                <img src="img/logo.png" alt="icon">

            </a>

            <nav>

            <ul class="nav__links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            </nav>
            <div>
                <?php
                    if (isset($_SESSION['userId'])){
                        echo '<form action="includes/logout.inc.php" method="post">
                
                        <button class="cta" type="Submit" name="logout-submit">Logout</button>
                        </form>';
                        
                    }
                    else{
                        echo '<form action="includes/login.inc.php" method="post">
                        <input class ="txtbox1" type="text" name="mailuid" placeholder="Username/Email">
                        <input class ="txtbox1" type="password" name="pwd" placeholder="Password">
                        <button class="cta" type="Submit" name="login-submit">Login</button>
                        <a class="cta" href="signup.php">Signup</a></form>
                        ';

                    }
                ?>
                

            </div>
        
    </header>
    <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
            <a href="index.php">Home</a>
            <a href="#">About Us</a>
            <a href="#">Contact</a>
            </div>
        </div>
