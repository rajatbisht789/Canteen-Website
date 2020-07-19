<!DOCTYPE html>
<html>
    <head>
        <title>Place Order</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!--Main CSS-->
        <link rel="stylesheet" href="dashboard.css" type="text/css">

        <!--Additional CSS-->
        <link rel="stylesheet" href="global_css.css" type="text/css">
        <link rel="stylesheet" href="common.css" type="text/css">
        <link rel="stylesheet" href="global_colors.css" type="text/css">
        <link rel="stylesheet" href="global_fonts.css" type="text/css">

        <!--Linking Login Page CSS-->
        <link rel="stylesheet" href="login.css" type="text/css" />

        <link rel="stylesheet" href="place_order.css" type="text/css" />

        <!--Linking Google Fonts-->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,600,700,800&display=swap');
        </style>

        <script src="place_order.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </head>

    <body> 

        <!--Login Form-->
        <div id="id01" class="modal">
            <form class="modal-content-login animate" method="post" onsubmit="javascript:document.getElementById('id01').style.display='none';">
                <div class="container">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancel-button">&#10799;</button>
                    <h1 class="heading" align=center>Login to Big Fat Belly</h1>

                    <div class="label-center">
                        <label class="smaller light" align=center for="description">- USING EMAIL ONLY -</label>
                    </div>
                    <input class="textfield-top" type="email" placeholder="Email ID" name="username" id="username" pattern="^[A-Za-z]+\.?[A-Za-z\d]+@[A-Za-z]+\.[A-Za-z]{2,}$" title="Please enter a valid email." required>
                    <input class="textfield-bottom" type="password" placeholder="Enter Password" name="password" id="password" pattern="^[A-Za-z\d]{8,16}$" title="Password must be between 8 and 16 character" required>

                    <button type="submit" name="login" class="login-button">LOGIN</button><br>

                    <div class="equal-spacing-content">
                        <a align=center href=""><p id="forgot-password">Forgot password?</p></a>
                        <p class="smaller" align=center>New user? <span class="sign-up"><a href="javascript:closeLogin()">Sign up</a></span></p>
                    </div>
                </div>
            </form>
        </div>

        <!--Signup Form-->
        <div id="id02" class="modal">

            <form class="modal-content-signup animate" method="post" onsubmit="javascript:document.getElementById('id02').style.display='none';">

                <div class="container">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancel-button">&#10799;</button>
                    <h1 class="heading" align=center>Signup for Big Fat Belly</h1>

                    <div class="label-center">
                        <label class="smaller light red" align=center for="uname">All Fields are mandatory.</label>
                    </div>
                    <input class="textfield-top" type="text" placeholder="Your Full Name" name="user_name" pattern="^[A-Za-z\s]+$" title="Name cannot have digits." required>
                    <input class="textfield-middle" type="email" placeholder="Your Email Address" name="user-email" pattern="^[A-Za-z]+\.?[A-Za-z\d]+@[A-Za-z]+\.[A-Za-z]{2,}\.?[A-Za-z]?$" title="Please enter a valid email." required>
                    <input class="textfield-middle" type="password" placeholder="Choose Password" name="password" pattern="^.{8,16}$" title="Password must be between 8 and 16 character" required>

                    <input class="textfield-middle" type="tel" placeholder="Mobile Number" name="mobile" pattern="^[56789]\d{9}$" title="Enter a valid mobile number" maxlength="10" required>

                    <div class="textfield-bottom" id="gender">
                        <p class="light">I am</p>
                        <input type=radio value="male" name="gender" required><label class="margin-left-label">Male</label>
                        <input type=radio value="female" name="gender"><label class="margin-left-label">Female</label>
                    </div>

                    <button type="submit" name="register" class="login-button">REGISTER</button><br>

                    <p class="smaller" align=center><span>Already a user? </span><span class="sign-up"><a href="javascript:closeSignup()">Login</a></span></p>
                </div>
            </form>
        </div>

        <!--CARD Form-->
        <div id="id04" class="modal">
            <form class="modal-content-CARD animate" method="post">

                <div class="container">
                    <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancel-button">&#10799;</button>

                    <h1 class="heading" align=center>Credit/Debit Card Detail</h1>

                    <div class="label-center">
                        <label class="smaller light red" align=center for="uname">All Fields are mandatory.</label>
                    </div>

                    <input class="textfield-top" type="tel" placeholder="Card Number" id="card-number" name="card-number" required>

                    <input class="textfield-middle" type="text" placeholder="Card Holder Name" id="card-holder" name="card-holder" pattern="^[a-zA-Z\s]{3,}$" title="Please enter a valid name." required>

                    <input class="textfield-middle" type="password" placeholder="CVV" id="cvv" name="cvv" pattern="^[0-9]{3}$" title="Only digits are allowed" maxlength="3" required>

                    <div class="textfield-bottom" id="gender">
                        <p class="light">Expiry Date</p>

                        <div class="equal-spacing center_align">
                            <label>Month</label>
                            <select id="months" class="margin-left-label width-s" required></select>

                            <label class="margin-left-label">Year</label>
                            <select id="years" class="width-l" required></select>
                        </div>
                    </div>

                    <button type="submit" class="login-button">Proceed</button>

                    <div id="alert_box"></div>

                    <script type="text/javascript">
                        $("form").submit(function(e) {

                            e.preventDefault();
                            var error = "";

                            if (!((/^[0-9]{16}$/).test($("#card-number").val()))) {
                                error += "Please enter a valid card number.<br>"
                            }

                            if (error != "") {
                                $("#alert_box").html('<div class="alert alert-danger" role="alert"><p><strong>Error:</strong></p>' + error + '</div>');
                            } else {
                                location.href = 'successful.php';
                            }

                        });
                    </script>
                </div>
            </form>
        </div>

        <!--Top Bar Container-->
        <div id="topbar-container">
            <!--Top Bar-->
            <div id="topbar">
                <div id="back-button">
                    <span id="back-button-container">
                        <!--Logo Image-->
                        <a href="index.php"><img id="logo-image" src="images/logo-white1.png" alt="Logo" /></a>
                    </span>
                </div>

                <!--Heading Title bar-->
                <div id="name-container">
                    <h1>Complete your order!</h1>
                </div>
            </div>
        </div>

        <!--Clear All Float-->
        <div id="clear"></div>

        <div id="main">
            <div id="left-side">
                <!-- Login Container -->
                <div class="pop_container" onclick="func(0)">
                    <p><span class="glow">1</span>Account <br>
                        <span class="caption">To place your order now, log in to your existing account or sign up.</span>
                    </p>
                    <div class="popup">
                        <!--Sign Up Button-->
                        <button onclick="document.getElementById('id02').style.display='block'" id="sign-up-button" class="margin-right">Sign Up</button>

                        <!--Login Up Button-->
                        <button onclick="document.getElementById('id01').style.display='block'" id="login-button">Login</button>
                    </div>
                </div>

                <!-- Address Container -->
                <div class="pop_container" id="addrs" onclick="func(1)">
                    <p class="addrs"><span class="glow">2</span>Delivery address<br>
                        <span class="caption">Enter your home address or other address.</span>
                    </p>

                    <div id="addrsMain">
                        <div class="form-container">
                            <button type="button" onclick="show()" class="cancel-button">&#10799;</button>
                            <h1 class="heading" align=center>Add Delivery Address</h1>

                            <input class="text_room_number" id="text_room_number" type="text" placeholder="Room Number"  required>

                            <button type="submit" class="addrs-button" onclick="add_address();return false;">Save Address &amp; Proceed</button><br>
                        </div>
                    </div>

                    <div class="addrs" id="addrs">
                        <div class="address_parent" id="address_parent">

                        </div>

                        <div class="popup" id="popup">
                            <p>Add Address
                                <span id="addAdrs" onclick="addAddress()">+</span>
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Payment Container -->
                <div class="pop_container" onclick="func(2)">
                    <p><span class="glow">3</span>Payment mode<br> 
                        <span class="caption">Choose payment mode according to your wish.</span>
                    </p>

                    <div class="popup">
                        <!--Cash on delivery Button-->
                        <button onclick="funCODBtn()" id="COD-button" class="margin-right">COD</button>

                        <!--Card Button-->
                        <button onclick="funCardBtn()" id="CARD-button">Card</button>

                    </div>
                </div>
            </div>

            <div id="right-side">
                <div id="price-container">
                    <h4>Cart </h4>
                    <p>Item 1  <span class="price">15 RS</span></p>
                    <p>Item 2  <span class="price">5 RS</span></p>
                    <p>Item 3  <span class="price">8 RS</span></p>
                    <hr>
                    <p>Total  <span class="price" ><b>28 RS</b></span></p>
                </div>

                <!-- Promo Code -->
                <div id="cod-container" style="position: absolute;"></div>
                <div id="promo">
                    <input type="text" id="add-promo" placeholder="Add Promo Code" required>
                    <button class="promo-code" id="promo-code" onclick="promoMsg()">Apply</button><br>
                    <p id="promo-msg"></p>
                </div>

                <!--COD DIV-->
                <div id="cod-container">
                    <div id="cod">
                        <button class="cod-proceed" id="cod-proceed" onclick="location.href='successful.php'">Complete Order</button>
                        <button class="card-proceed" id="card-proceed" type="submit">Proceed to Pay</button>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>