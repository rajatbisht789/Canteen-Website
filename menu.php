<!doctype html>
<html>
    <head>
        <title>Big Fat Belly</title>

        <!--Meta Tags-->
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!--Linking Main CSS-->
        <link rel="stylesheet" href="menu.css" type="text/css" />
        <link rel="stylesheet" href="common.css" type="text/css" />
        <link rel="stylesheet" href="all_item.css" type="text/css" />

        <!--Linking Global CSS-->
        <link rel="stylesheet" href="global_css.css" type="text/css" />
        <link rel="stylesheet" href="global_colors.css" type="text/css" />
        <link rel="stylesheet" href="global_fonts.css" type="text/css" />

        <!--Linking Gooogle Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito|Raleway:400,600&display=swap" rel="stylesheet">

        <script src="allData.js"></script>
        <script src="menu.js"></script>
    </head>
    <body>
        <!--Top Bar Container-->
        <div id="topbar-container">
            <!--Top Bar-->
            <div id="topbar">
                <!--Logo Image-->
                <a href="index.php"><img id="logo-image" src="images/logo-white1.png" alt="Logo" /></a>

                <!--Name and search bar-->
                <div id="name-container">
                    <h1>Big Fat Belly</h1>

                    <span id="price">30 minutes guarentee&emsp;|&emsp;&#x20B9; 300 for two</span>

                    <input id="search-box" type="text" name="searchBar" placeholder="Search for dishes..." />

                </div>

                <!--User Account Container-->
                <div id="user-account" class="dropdown">
                    <img id="user-image" src="images/user.png" alt="User Image" />
                    Username

                    <div class="dropdown-content">
                        <div class="links-container display-flex black" onclick="">
                            <img class="dropdown-icons" src="images/account.png">
                            <a href="user_account.php"> <span>Account</span> </a>
                        </div>

                        <div class="faded-line"></div>

                        <div class="links-container display-flex bold" onclick="">
                            <img class="dropdown-icons" src="images/logout.png">
                            <a href="index.php"> <span class="red">Logout</span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Clear All Float-->
        <div id="clear"></div>

        <!--Content Container-->
        <div id="content-container">
            <div id="content-div">

                <!--Menu List-->
                <div id="menu-list-sidebar">
                    <dl id="menu" align="right">
<!--
                        <dd><a href="#" class="dd-link active-link">Today's Special</a></dd>
                        <dd><a href="#" class="dd-link">Sandwiches</a></dd>
                        <dd><a href="#" class="dd-link">Chinese</a></dd>
                        <dd><a href="#" class="dd-link">Burgers</a></dd>
                        <dd><a href="#" class="dd-link">North Indian</a></dd>
                        <dd><a href="#" class="dd-link">South Indian</a></dd>
                        <dd><a href="#" class="dd-link">Sweet dishes</a></dd>
                        <dd><a href="#" class="dd-link">Beverages</a></dd>
-->
                    </dl>
                </div>

                <!--Menu Items-->
                <div id="menu-item-container">
                    <div id="items-view-container">
                        <!--All Item View Container-->
                        <div id="item-view">
                            <!--Javascript Addition-->
                            
                        </div>
                    </div>
                </div>

                <!--Cart Container-->
                <div id="cart-container">
                    <h2 id="cart-title">Cart Empty</h2>
                    <img id="cart-empty-image" src="images/emptyCart.png" alt="Cart Empty" />
                    
                    <div id="items-in-cart">
                        <article id="added-items">
                            <!--Javascript Addition-->
                            
                        </article>
                    </div>

                    <div id="total-amount">
                        <p class="bold light-black">TOTAL</p>
                        <span id="total-price" class="bold extra-large">&#8377; 346</span>
                    </div>
                    <button id="proceed-button" class="side-bar-add-button" onclick="window.location.href = 'place_order.php'">Proceed to Payment</button>
                </div>
            </div>

        </div>
    </body>
</html>