<html>
    <head>
        <title>All Orders Page</title>

        <!--Main CSS-->
        <link rel="stylesheet" href="dashboard.css" type="text/css">
        <link rel="stylesheet" href="all_orders.css" type="text/css">

        <!--Additional CSS-->
        <link rel="stylesheet" href="common.css" type="text/css">

        <!--Global CSS-->
        <link rel="stylesheet" href="global_css.css" type="text/css">
        <link rel="stylesheet" href="global_colors.css" type="text/css">
        <link rel="stylesheet" href="global_fonts.css" type="text/css">
        
        <link rel="stylesheet" href="all_order_detail.css" type="text/css">

        <script src="all_orders.js"></script>
        
        <script>
            function goBack() {
                window.location.href="admin.php";
            }
        </script>
        
    </head>
    <body>
        
        <div id="view_detail_popup" class="modal">
            <div class="modal-content animate">
                <div class="container">
                    <h1 align=center>Order Details</h1>
                    <table>
                        <tr><th>Order Number:</th> <td><span id="order_no">-</span></td></tr>
                        <tr><th>Order Date:</th> <td><span id="order_date">-</span></td></tr>
                        <tr><th>Order Time:</th> <td><span id="order_time">-</span></td></tr>
                        <tr><th>Payment Mode:</th> <td><span id="payment_mode" class="mode_of_payment">-</span></td></tr>
                        <tr><th>Status:</th> <td><span id="order_status">-</span></td></tr>
                        <tr><th>Name:</th> <td><span id="ordered_by">-</span></td></tr>
                        <tr><th>Address:</th> <td><span id="customer_address">-</span></td></tr>
                        <tr><th>Mobile Number:</th> <td><span id="order_mobile">-</span></td></tr>
                        <tr><th>Delivery Instruction:</th> <td><span id="instructions">-</span></td></tr>
                    </table>
                    <button class="button-color" onclick="document.getElementById('view_detail_popup').style.display='none'">Okay</button><br>
                </div>
            </div>
        </div>
        
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
                    <h1>All Orders Page</h1>
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
                    <p id="all-item-text">Orders for <span id="today-date" class="large"></span></p>
                    <div>
                        <span id="select-label">Search Order by date: </span>
                        <input type="text" id="search-items" name="search" oninput="resetAllItem()" placeholder="Select Date">
                        <button id="search" onclick="">Search</button>
                    </div>
                </div>

                <div id="orders-container">
                    <!--Order View-->
                    <div id="pending-orders" class="order_details-container">
                        <!--Javascript Addition-->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>