<!DOCTYPE html>
<html lang="en">
    <head>
        <title>All Customers</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--Main CSS-->
        <link rel="stylesheet" href="dashboard.css" type="text/css">
        <link rel="stylesheet" href="customers.css" type="text/css">

        <!--Additional CSS-->
        <link rel="stylesheet" href="common.css" type="text/css">

        <!--Global CSS-->
        <link rel="stylesheet" href="global_css.css" type="text/css">
        <link rel="stylesheet" href="global_colors.css" type="text/css">
        <link rel="stylesheet" href="global_fonts.css" type="text/css">

        <script>
            function goBack() {
                window.location.href="admin.php";
            }
            
            let getData = localStorage["comingFrom"];

            window.onload = function(){
                if (getData == "Customer")
                    showAllCustomers(1);
                else
                    showAllCustomers(2);
            }
        </script>

        <script src="customers.js"></script>

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
                            <span>Dashboard</span>
                        </div>
                    </span>
                </div>

                <!--Name and search bar-->
                <div id="name-container">
                    <h1 id="top_header">Customer Information</h1>
                </div>

                <!--Logo Image-->
                <a href="admin.php"><img id="logo-image" src="images/logo-white1.png" alt="Logo" /></a>
            </div>
        </div>

        <!--Clear All Float-->
        <div id="clear"></div>

        <!--Content Container-->
        <div id="content-container">
            <div id="content-div">

                <!--Title Header-->
                <div id="search-bar-header">
                    <p id="all-item-text">ALL CUSTOMER LIST</p>
                    <!--
<div>
<span id="select-label">Search a User: </span>
<input type="text" id="search-items" name="search" oninput="resetAllItem()" placeholder="Eg. Mukesh Sharma">
<button id="search" onclick="">Search</button>
</div>
-->
                </div>

                <!-- Customer View-->
                <div id="customer-view-container">
                    <!-- All Customer View Container-->
                    <div id="customer-view">
                        <!--Javascript Addition-->

                    </div>

                    <img id="arrow-image" src="images/arrow.png" alt="Back Button Image">

                    <!--Side Bar To Add Combo Items-->
                    <div id="cust_info-sidebar">
                        <div id="cust_info">
                            <div class="center_content">
                                <img src="images/man.png" id="user_image" alt="User Image">
                            </div>
                            <div class="center_content margin_top-25">
                                <label for="username" id="username">Dummy Name</label>
                            </div>
                            <div class="center_content margin_top">
                                <label for="email_id" id="email_id">dummyemail@example.com</label>
                            </div>

                            <div class="space-between margin_top-45">
                                <label for="labelMobile"><strong> Mobile </strong></label>
                                <label for="mobile" id="mobile">9876543210</label>
                            </div>
                            <div class="space-between margin_top-25">
                                <label for="labelGender"><strong> Gender </strong></label>
                                <label for="gender" id="gender">Male</label>
                            </div>
                            <div class="space-between margin_top-25">
                                <label for="labelSince"><strong id="label_since"> Customer Since </strong></label>
                                <label for="since" id="since">May 2019</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>