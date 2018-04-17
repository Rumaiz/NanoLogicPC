<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - NanoLogic PC</title>
    <link rel="shortcut icon" href="http://www.favicon.cc/logo3d/147736.png" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
</head>

<body class="pageTemplate">
    <!-- ----------------------------------------------------------------------------------------- BANNER -->
    <div class="navigationBar">
        <ul id="banner">
            <li id="bannerItem">
                <a id="bannerItemText" href="index.html">Home</a>
            </li>
            <li id="bannerItem">
                <a id="bannerItemText" href="services.html">Services</a>
            </li>
            <li id="bannerItem">
                <a id="bannerItemText" href="support.html">Support</a>
            </li>
            <li id="bannerItem">
                <a id="bannerItemText" href="about-us.html">About Us</a>
            </li>
            <li id="bannerItem">
                <a id="bannerItemText" href="contact.html">Contact</a>
            </li>
            <li id="loginItem">
                <a id="bannerItemText" href="login.php">Log In</a>
            </li>
            <li id="loginItem">
                <a id="bannerItemText" href="login.php">Sign Up</a>
            </li>
        </ul>
    </div>

    <!-- ----------------------------------------------------------------------------------------- IMAGE -->
    <div class="container">
        <!-- <form action="php/action_page.php" method="POST">
            <div class="logInWindow">
                <h1>Log In</h1>
                <hr>

                <br>
                <label for="email">
                    <b>Email</b>
                </label>
                <br>
                <input type="text" placeholder="Enter Email" name="email" required>
                <br>
                <br>
                <label for="psw">
                    <b>Password</b>
                </label>
                <br>
                <input type="password" placeholder="Enter Password" name="pass" required>
                <br>
                <br>
                <input type="submit" value="Submit">
            </div>
        </form> -->

        <div class="form-wrap">
            <div class="tabs">
                <h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
                <h3 class="login-tab"><a href="#login-tab-content">Login</a></h3>
            </div><!--.tabs-->
    
            <div class="tabs-content">
                <div id="signup-tab-content" class="active">
                    <form class="signup-form" action="php/action_page.php" method="POST">
                        <input type="text" class="input" id="first_name" name="first_name" placeholder="First Name">
                        <input type="text" class="input" id="last_name" name="last_name" placeholder="Last Name">
                        <input type="email" class="input" id="user_email" name="email" placeholder="Email">
                        <input type="password" class="input" id="user_pass" name="pass" placeholder="Password">
                        <input type="submit" class="button" value="Submit">
                    </form><!--.login-form-->

                    <div class="help-text">
                        <p>By signing up, you agree to our</p>
                        <p>Terms of service <br>(Laywers Not Hired Yet)</p>
                    </div><!--.help-text-->
                </div><!--.signup-tab-content-->
    
                <div id="login-tab-content">
                    <form class="login-form" action="php/action_page.php" method="POST">
                        <input type="text" class="input" id="user_login" autocomplete="off" placeholder="Email">
                        <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
                        <!-- <input type="checkbox" class="checkbox" id="remember_me">
                        <label for="remember_me">Remember me</label> -->
    
                        <input type="submit" class="button" value="Login">
                    </form><!--.login-form-->
                    <div class="help-text">
                        <p><a href="#">Forget your password?</a></p>
                    </div><!--.help-text-->
                </div><!--.login-tab-content-->
            </div><!--.tabs-content-->
        </div><!--.form-wrap-->
    <?php
        // $_SESSION['user'] = $first_name;
    ?>
    </div>

    <!-- ----------------------------------------------------------------------------------------- Footer -->
    <div>
        <footer class="foot">
            <p class="font-34 text-center font-bold font-white margin-zero">NanoLogic PC</p>

            <a class="email" href="mailto:rrrumaiz@gmail.com">rrrumaiz@gmail.com</a>
            <br>
            <a href="tel:0000000000">(503) 000-0000</a>
            <br>
          
            <br>
            <ul id="banner">
                <li id="bannerItem">
                    <a id="bannerItemText" href="index.html">Home</a>
                </li>
                <li id="bannerItem">
                    <a id="bannerItemText" href="services.html">Services</a>
                </li>
                <li id="bannerItem">
                    <a id="bannerItemText" href="support.html">Support</a>
                </li>
                <li id="bannerItem">
                    <a id="bannerItemText" href="about-us.html">About Us</a>
                </li>
                <li id="bannerItem">
                    <a id="bannerItemText" href="contact.html">Contact</a>
                </li>
                <li id="loginItem">
                    <a id="bannerItemText">Copyright &copy; 2018 - NanologicPC - All rights reserved.</a>
                </li>
            </ul>
        </footer>
    </div>

</body>


</html>