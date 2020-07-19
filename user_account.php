<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Account</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--Main CSS-->
        <link rel="stylesheet" href="dashboard.css" type="text/css">
        <link rel="stylesheet" href="user_account.css" type="text/css">

        <!--Additional CSS-->
        <link rel="stylesheet" href="common.css" type="text/css">

        <!--Global CSS-->
        <link rel="stylesheet" href="global_css.css" type="text/css">
        <link rel="stylesheet" href="global_colors.css" type="text/css">
        <link rel="stylesheet" href="global_fonts.css" type="text/css">

        <script>
            function goBack() {
                window.location.href="menu.php";
            }

            window.onload = function(){
                initItems();
            }
        </script>

        <script src="user_account.js"></script>

    </head>
    <body>
        <!--Top Bar Container-->
        <div id="topbar-container">
            <!--Top Bar-->
            <div id="topbar">
                <div id="back-button">
                    <span id="back-button-container">
                        <div id="go-back" onclick="goBack()">
                            <img id="back-image" src="images/back.png" alt="Back Button Image">
                            <span>Go back&nbsp;&nbsp;</span>
                        </div>
                    </span>
                </div>

                <!--Name and search bar-->
                <div id="name-container">
                    <h1 id="top_header">Account Settings</h1>
                </div>

                <!--Logo Image-->
                <a href="menu.php"><img id="logo-image" src="images/logo-white1.png" alt="Logo" /></a>
            </div>
        </div>

        <!--Clear All Float-->
        <div id="clear"></div>

        <!--Content Container-->
        <div id="content-container">
            <div id="content-div">
                <!-- Customer View-->
                <div id="customer-view-container">
                    <!-- All Customer View Container-->
                    <div id="customer-view">
                        <article class="display-flex">
                            <img id="image" title="Edit" src="images/man.png" width="120px" height="120px" alt="User Image">
                            <section class="name-email">
                                <div class="name-flex">
                                    <p id="name">Dean Winchester</p>
                                    <img id="edit-image" title="Edit Name" src="images/edit.png" width="20px" height="20px" alt="Edit Image">
                                </div>
                                <p id="email">deanwinchester@gmail.com</p>
                            </section>
                        </article>

                        <article class="order-history" id="order-history-container">
                            <div class="heading-history">
                                ORDER HISTORY
                            </div>

<!--
                            <section class="single-history-view">
                                <div class="sno" id="num">
                                    1
                                </div>

                                <div class="order-info">
                                    <div class="item-n-price">
                                        <p>6 Items</p>
                                        <p>&#8377;545</p>
                                    </div>
                                    
                                    <p class="small">Ordered On: <span class="time"> 12 Apr, 2020 at 2:14 PM</span></p>
                                    
                                    <div class="buttons">
                                        <p class="bold green">LIVE</p>
                                        
                                        <div class="two-buttons">
                                            <button class="track">Track</button>
                                            <button class="show-details">Show Details</button>
                                        </div>
                                    </div>
                                </div>

                            </section>
-->
                        </article>

                    </div>

                    <img id="arrow-image" src="images/arrow.png" alt="Back Button Image">

                    <!--Side Bar To Add Combo Items-->
                    <div id="cust_info-sidebar">
                        <div id="show-hide">
                            <p id="tracking-title">TRACKING STATUS</p>
                            
                            <div class="horiz-bar">
                                <p class="bold font-style">Time</p>
                                <p class="dynamic" id="time-left">18 minutes left</p>
                            </div>
                            
                            <div class="horiz-bar">
                                <p class="bold font-style">Status</p>
                                <p class="dynamic" id="time-left">Sent For Delivery</p>
                            </div>
                            
                            <div class="contact-us">
                                <p class="bold font-style">Contact Us</p>
                            </div>
                            <div class="contact-num">
                                <p>Call Us @9876543210</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>