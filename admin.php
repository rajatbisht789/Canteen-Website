<html>
    <head>
        <title>Admin Panel</title>
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--Linking Style Sheet-->
        <link rel="stylesheet" href="admin.css" type="text/css">
        <link rel="stylesheet" href="common.css" type="text/css" />

        <link rel="stylesheet" href="global_css.css" type="text/css">
        <link rel="stylesheet" href="global_colors.css" type="text/css">
        <link rel="stylesheet" href="global_fonts.css" type="text/css">

        <link rel="stylesheet" href="all_order_detail.css" type="text/css">

        <!--Linking Gooogle Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito|Raleway:400,600&display=swap" rel="stylesheet">

        <script src="orders.js"></script>
        
        <script>
            function openAddItems() {
                localStorage["comingFrom"] = "Admin";
                window.location = "add_food_item.php";
            }
            
            function openAddAgent() {
                localStorage["comingFrom"] = "Admin";
                window.location = "add_agent.php";
            }
            
            function openAgent() {
                localStorage["comingFrom"] = "Agent";
                window.location = "customers.php";
            }
            
            function openCustomer() {
                localStorage["comingFrom"] = "Customer";
                window.location = "customers.php";
            }
            
            function openSingleOrderView() {
                localStorage["comingFrom"] = "Admin";
                window.open('single_order_view.php', '_blank');
            }
        </script>
    </head>
    <body>

        <div id="view_detail_popup" class="modal">
            <div class="modal-content animate">
                <div class="container">
                    <h1 align=center>Order Details</h1>
                    <table>
                        <tr><th>Order Number:</th> <td><span id="order_no" onclick="javascript:openSingleOrderView()">-</span></td></tr>
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


        <div id="delivery_popup" class="modal">
            <div class="modal-content animate">
                <div class="container">
                    <h1 align=center>Assign Agent</h1>
                    <table>
                        <tr>
                            <th>Agent Name</th> 
                            <td><select id="agent-list">
                                <option>Rakesh</option>
                                <option>Elvin</option>
                                <option>Kishsor</option>
                                <option>Raju</option>
                                <option>Harish</option>
                                <option>Vignesh</option>
                                <option>Suraj</option>
                                <option>Pathan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Delivery Instruction</th> 
                            <td><span id="delivery_instruction">-</span></td>
                        </tr>
                        <tr>
                            <th>User Instruction</th> 
                            <td><span id="user_instruction">-</span></td>
                        </tr>

                        <tr>
                            <th>
                                <button id="cancel" onclick="document.getElementById('delivery_popup').style.display='none'" >Cancel</button>
                            </th> 
                            <td id="assign-button">
                                <!--Assign Button-->
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!--Top Bar Container-->
        <div id="topbar-container">
            <!--Top Bar-->
            <div id="topbar">
                <!--Logo Image-->
                <a href="admin.php"><img id="logo-image" src="images/logo-white1.png" alt="Logo" /></a>

                <!--Name and search bar-->
                <div id="name-container">
                    <h1>Big Fat Belly</h1>
                    <h2>Admin Panel</h2>
                </div>

                <!--User Account Container-->
                <div id="user-account" class="dropdown">
                    <img id="user-image" src="images/user.png" alt="User Image" />
                    Username

                    <div class="dropdown-content">
                        <div class="links-container display-flex bold" onclick="location.href='admin_login.php'"><img class="dropdown-icons" src="images/logout.png"><span class="red">Logout</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!--Clear All Float-->
        <div id="clear"></div>

        <!--Content Container-->
        <div id="content-container">
            <div id="content-div">
                <div id="sidebar">

                    <p class="side-header"><strong>MAIN &nbsp;&nbsp;MENU</strong></p>

                    <ul>
                        <li class="side-links"><a href="add_cuisine.php">Add Cusine</a></li>
                        <li class="side-links"><a href="javascript:openAddItems()">Add Item</a></li>
                        <li class="side-links"><a href="add_thali.php">Add Thali</a></li>
                    </ul>

                    <p class="side-header margin-top"><strong>ITEM &nbsp;&nbsp;COMBO'S</strong></p>

                    <ul>
                        <li class="side-links"><a href="add_combo.php">Add Combo</a></li>
                        <li class="side-links"><a href="combos.php">Show All Combo's</a></li>
                    </ul>

                    <p class="side-header margin-top"><strong>TODAY's &nbsp;&nbsp;SPECIAL</strong></p>

                    <ul>
                        <li class="side-links"><a href="add_todays_special.php">Add/ Show Items</a></li>
                    </ul>

                    <p class="side-header margin-top"><strong>MISCELLANEOUS</strong></p>

                    <ul>
                        <li class="side-links"><a href="javascript:openAddAgent()" >Add Agent</a></li>
                        <li class="side-links"><a href="javascript:openAgent();" >Show All Agent(s)</a></li>
                    </ul>
                </div>

                <!--Activity Container-->
                <div id="avtivity-container">

                    <!--Welcome Header-->
                    <div id="welcome-header">
                        <h3>Welcome to Admin Dashboard</h3>
                        <p id="desc-text">add, delete or update items here.</p>
                    </div>

                    <!--Statistics View-->
                    <div id="updates-container">
                        <div class="updates show_hover" onclick="location.href='all_orders.php'">
                            <div class="image-back orders">
                                <img class="icons" src="images/orders.png" alt="Orders Image">
                            </div>
                            <span class="number">542</span> <span class="title">Order(s)</span><br>
                            <span class="sub-title">till today</span>
                        </div>

                        <div class="updates show_hover" onclick="location.href='items_list.php'">
                            <div class="image-back items">
                                <img class="icons" src="images/items.png" alt="Orders Image">
                            </div>
                            <span class="number">64</span> <span class="title">Item(s)</span><br>
                            <span class="sub-title">total 6 cusines</span>
                        </div>

                        <div class="updates show_hover" onclick="openCustomer()">
                            <div class="image-back users">
                                <img class="icons" src="images/users.png" alt="Orders Image">
                            </div>
                            <span class="number">234</span> <span class="title">Customer(s)</span><br>
                            <span class="sub-title">total number of customers</span>
                        </div>
                    </div>

                    <!--Heading-->
                    <p class="title_order">Orders <span id="desc_order">(for today)</span></p>

                    <!--Live Orders-->
                    <div id="live-order-container">
                        <div class="live-order">
                            <img id="pending-image" class="title-image" src="images/pending.png" alt="Pening Image">
                            <p class="title_order margin-bottom margin-left">Pending Orders</p>

                            <!--Clearing Float-->
                            <div class="clear"></div>

                            <!--Order View-->
                            <div id="pending-orders" class="order_details-container">
                                <!--Javascript Addition-->
                            </div>
                        </div>

                        <div class="live-order">
                            <img id="delivered-image" class="title-image" src="images/delivered.png" alt="Delivered Image">
                            <p class="title_order margin-bottom margin-left">Orders Delivered</p>

                            <!--Clearing Float-->
                            <div class="clear"></div>

                            <!--Order View-->
                            <div id="delivered-orders" class="order_details-container">
                                <!--Javascript Addition-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>