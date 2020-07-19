<?php
if ($_POST) {
    if ($_POST['login'] == 'LOGIN') {
        header("Location: menu.php");
    } else {
        header("Location: menu.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Big Fat Belly</title>

        <!--Meta Tag-->
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!--Linking Front Page CSS-->
        <link rel="stylesheet" href="index.css" type="text/css" />

        <!--Linking Login Page CSS-->
        <link rel="stylesheet" href="login.css" type="text/css" />

        <!--Linking Global CSS-->
        <link rel="stylesheet" href="global_css.css" type="text/css" />
        <link rel="stylesheet" href="global_colors.css" type="text/css" />

        <!--Linking Google Fonts-->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,600,700,800&display=swap');
        </style>

        <!--Javascript to Close and open the Login and Signup Form-->
        <script>
            function closeLogin() {
                document.getElementById('id01').style.display='none';
                document.getElementById('id02').style.display='block';
            }

            function closeSignup() {
                document.getElementById('id02').style.display='none';
                document.getElementById('id01').style.display='block';
            }
        </script>
    </head>
    <body>
        <!--Login Form-->
        <div id="id01" class="modal">
            <form class="modal-content-login animate" method="post">
                <div class="container">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancel-button">&#10799;</button>
                    <h1 class="heading" align=center>Login to Big Fat Belly</h1>

                    <div class="label-center">
                        <label class="smaller light" align=center for="description">- USING EMAIL ONLY -</label>
                    </div>
                    <input class="textfield-top" type="email" placeholder="Email ID" name="username" id="username" pattern="^[A-Za-z]+\.?[A-Za-z\d]+@[A-Za-z]+\.[A-Za-z]{2,}$" title="Please enter a valid email." required>
                    <input class="textfield-bottom" type="password" placeholder="Enter Password" name="password" id="password" pattern="^[A-Za-z\d]{8,16}$" title="Password must be between 8 and 16 character" required>

                    <input type="submit" name="login" class="login-button" value="LOGIN"><br>

                    <div class="equal-spacing-content">
                        <a align=center href=""><p id="forgot-password">Forgot password?</p></a>
                        <p class="smaller" align=center>New user? <span class="sign-up"><a href="javascript:closeLogin()">Sign up</a></span></p>
                    </div>
                </div>
            </form>
        </div>

        <!--Signup Form-->
        <div id="id02" class="modal">

            <form class="modal-content-signup animate" method="post">

                <div class="container">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancel-button">&#10799;</button>
                    <h1 class="heading" align=center>Signup for Big Fat Belly</h1>

                    <div class="label-center">
                        <label class="smaller light red" align=center for="uname">All Fields are mandatory.</label>
                    </div>
                    <input class="textfield-top" type="text" placeholder="Your Full Name" name="user_name" pattern="^[A-Za-z\s]$" title="Name cannot have digits." required>
                    <input class="textfield-middle" type="email" placeholder="Your Email Address" name="user-email" pattern="^[A-Za-z]+\.?[A-Za-z\d]+@[A-Za-z]+\.[A-Za-z]{2,}\.?[A-Za-z]?$" title="Please enter a valid email." required>
                    <input class="textfield-middle" type="password" placeholder="Choose Password" name="password" pattern="^.{8,16}$" title="Password must be between 8 and 16 character" required>

                    <input class="textfield-middle" type="tel" placeholder="Mobile Number" name="mobile" pattern="^[56789]\d{9}$" title="Enter a valid mobile number" required>

                    <div class="textfield-bottom" id="gender">
                        <p class="light">I am</p><br>
                        <input type=radio value="male" name="gender" required><label class="margin-left-label">Male</label>
                        <input type=radio value="female" name="gender"><label class="margin-left-label">Female</label>
                    </div>

                    <input type="submit" name="register" class="login-button" value="REGISTER"><br>

                    <p class="smaller" align=center><span>Already a user? </span><span class="sign-up"><a href="javascript:closeSignup()">Login</a></span></p>
                </div>
            </form>
        </div>

        <!--Top Container-->
        <div id="top-container">
            <!--Sign Up Login Container-->
            <div id="registration-container">
                <div id="center-content">
                    <!--Logo-->
                    <img id="logo-image" src="images/logo.png" alt="logo" />

                    <!--Sign Up Button-->
                    <button onclick="document.getElementById('id02').style.display='block'" id="sign-up-button" class="margin-right">Sign Up</button>

                    <!--Login Up Button-->
                    <button onclick="document.getElementById('id01').style.display='block'" id="login-button">Login</button>

                    <!--Clearing Float-->
                    <div class="clear"></div>

                    <!--Caption-->
                    <h1 id="changing-text">Hungry?</h1>
                    <h3 id="descriptive-text">Order food at anytime.</h3>

                    <form method="post">
                        <!--Text Box-->
                        <input id="block-textbox" type="text" name="block" placeholder="Enter your block name" required>

                        <!--Search Button-->
                        <button type="submit" id="search-button" name="search">FIND FOOD</button>
                    </form>

                    <div id="information">
                        <a href="#about-us-container"><p class="hyper-links">About Us</p></a>
                        <a href="#contact-us-container"><p class="hyper-links">Contact Us</p></a>
                    </div>
                </div>
            </div>

            <!--Food Item Image-->
            <img id="food-item-image" src="images/foodItems.jpg" alt="Food Items" />
        </div>

        <!--Clearing Float-->
        <div class="clear"></div>

        <div id="background">

            <!--Middle Container For Three Images-->
            <div id="image-container" class="middle-container">
                <div class="center equal-spacing-content">
                    <img id="image-one" class="description-image" src="images/noMinimum.png" alt="No Minimum Cost Image" />
                    <img id="image-two" class="description-image" src="images/fastDelivery.png" alt="No Minimum Cost Image" />
                    <img id="image-three" class="description-image" src="images/liveTracking.png" alt="No Minimum Cost Image" />
                </div>
            </div>

            <!--Clearing Float-->
            <div class="clear"></div>

            <!--Middle Container For Three Header Text-->
            <div id="text-container" class="middle-container">
                <div class="center equal-spacing-content">
                    <h2 id="text-one" class="text-styling">No Minimum Order</h2>
                    <h2 class="text-styling">Lightning-Fast Delivery</h2>
                    <h2 id="text-two" class="text-styling">Live Order Tracking</h2>
                </div>
            </div>

            <!--Clearing Float-->
            <div class="clear"></div>

            <!--Middle Container For Three Description Text-->
            <div id="description-container" class="middle-container">
                <div class="center equal-spacing-content">
                    <p id="description-one" class="description-styling">Order in for yourself or for the group,<br> with no restrictions on order value</p>
                    <p class="description-styling">Experience our superfast delivery<br> for food delivered fresh &amp; on time</p>
                    <p id="description-two" class="description-styling">Know where your order is at all times,<br> from the restaurant to your doorstep.</p>
                </div>
            </div>

        </div>

        <!--About Us Container-->
        <div id="about-us-container">
            <div class="center equal-spacing-content">
                <div id="image-holder">
                    <img id="about-image" src="images/about-us.jpg" alt="About Us" />
                </div>

                <div id="about-us-content">
                    <h1 id="about-heading">Where the flavour<br> inebriates you!</h1>
                    <p id="about-description">Big City Variety at Small Town Price is directly served from our kitchen to your plates at a speed that you can't imagine. Our fresh and delicious food will make you visit us again and again. We are delivering happiness since 2010 and will continue to ooze your taste buds.</p>
                </div>
            </div>
        </div>

        <!--Contact Us Container-->
        <div id="contact-us-container">
            <div id="contact-us" class="center equal-spacing-content">
                <div id="address" class="equal-spacing-content">
                    <div class="float-left">
                        <p id="get-in-touch">Get in touch</p>
                    </div>

                    <div class="float-left">

                        <p id="name">Big Fat Belly</p>
                        <address>
                            <p class="address-text">VIT University</p>
                            <p class="address-text">Vellore, Tamil Nadu - 632014</p>
                            <p class="address-text">bigfatbelly.vit@gmail.com</p>
                            <p class="address-text">+91 9849558855</p>
                        </address>
                    </div>
                </div>

                <img id="location-image" src="images/location.png" alt="Location" />
            </div>
        </div>

        <!--Footer Container-->
        <div class="footer-container">
            <div class="center equal-spacing-content">
                <img id="logo-image-bottom" src="images/logo-white1.png" alt="Logo" />

                <span id="copyright">&copy; 2020 | Big Fat Belly</span>

                <div id="social-media">
                    <a href="">
                        <img class="media-image" src="images/facebook.png" alt="instagram" />
                    </a>
                    <a href="">
                        <img class="media-image" src="images/instagram.png" alt="instagram" />
                    </a>
                    <a href="">
                        <img class="media-image" src="images/twitter.png" alt="instagram" />
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>