<html>
    <head>
        <title>Order View</title>

        <!--Main CSS-->
        <link rel="stylesheet" href="dashboard.css" type="text/css">
        <link rel="stylesheet" href="single_order_view.css" type="text/css">

        <!--Additional CSS-->
        <link rel="stylesheet" href="common.css" type="text/css">

        <!--Global CSS-->
        <link rel="stylesheet" href="global_css.css" type="text/css">
        <link rel="stylesheet" href="global_colors.css" type="text/css">
        <link rel="stylesheet" href="global_fonts.css" type="text/css">

        <script src="single_order_view.js"></script>

        <script>
            let comingFrom = localStorage["comingFrom"];

            function goBack() {
                if (comingFrom == "Account") {
                    window.location.href="user_account.php";
                } else {
                    window.location.href="admin.php";
                }
            }

            window.onload = function(){
                showItemsInCart();

                if (comingFrom == "Account") {
                    document.getElementById("back-to").innerHTML = "Account&nbsp;";
                }
            }

        </script>
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
                            <span id="back-to">Dashboard</span>
                        </div>
                    </span>
                </div>

                <!--Name and search bar-->
                <div id="name-container">
                    <h1>Order No.: - order001</h1>
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
                <div id="user-info">
                    <div id="order-detail">
                        <article class="equal-spacing margin_btm">
                            <section class="equal-spacing fifty">
                                <div class="height-fifty width-short">
                                    Order No. : -
                                </div>

                                <div class="height-fifty width-long">
                                    <span id="order_number">
                                        order001
                                    </span>
                                </div>
                            </section>

                            <section class="equal-spacing fifty">
                                <div class="height-fifty width-short">
                                    Order Date : -
                                </div>

                                <div class="height-fifty width-long">
                                    <span id="order_date">
                                        Apr 23, 2020
                                    </span>
                                </div>
                            </section>
                        </article>

                        <article class="equal-spacing margin_btm">
                            <section class="equal-spacing fifty">
                                <div class="height-fifty width-short">
                                    Ordered By : -
                                </div>

                                <div class="height-fifty width-long">
                                    <span id="order_by">
                                        Prateek Malpani
                                    </span>
                                </div>
                            </section>

                            <section class="equal-spacing fifty">
                                <div class="height-fifty width-short">
                                    Order Time : -
                                </div>

                                <div class="height-fifty width-long">
                                    <span id="order_time">
                                        8:05 PM
                                    </span>
                                </div>
                            </section>
                        </article>

                        <article class="equal-spacing margin_btm">
                            <section class="equal-spacing fifty">
                                <div class="height-fifty width-short">
                                    Delivery Time : -
                                </div>

                                <div class="height-fifty width-long">
                                    <span id="delivery_time">
                                        -
                                    </span>
                                </div>
                            </section>

                            <section class="equal-spacing fifty">
                                <div class="height-fifty width-short">
                                    Delivered By : -
                                </div>

                                <div class="height-fifty width-long">
                                    <span id="delivered_by">
                                        -
                                    </span>
                                </div>
                            </section>
                        </article>
                    </div>

                    <div id="address">
                        <article class="equal-spacing margin_btm">
                            <section class="equal-spacing fifty">
                                <div class="height-fifty width-short">
                                    Mobile No. : -
                                </div>

                                <div class="height-fifty width-long">
                                    <span id="mobile_number">
                                        9876543210
                                    </span>
                                </div>
                            </section>
                        </article>

                        <article class="equal-spacing margin_btm">
                            <div class="height-fifty width-short">
                                Address : -
                            </div>
                            <div id="address-content">
                                Room No.: - 345<br>
                                Q Block, Sir Nelson Mandela
                            </div>
                        </article>
                    </div>

                    <div id="total">
                        <article class="equal-spacing margin_btm">
                            <section class="equal-spacing">
                                <div class="height-fifty width-large">
                                    Delivery Instruction : -
                                </div>

                                <div class="height-fifty width-larger">
                                    <span id="delivery_instruc">
                                        Call before delivery.
                                    </span>
                                </div>
                            </section>
                        </article>

                        <article class="equal-spacing margin_btm">
                            <section class="equal-spacing">
                                <div class="height-fifty width-large">
                                    Payment Mode : -
                                </div>

                                <div class="height-fifty width-larger">
                                    <span id="payment_mode">
                                        Cash
                                    </span>
                                </div>
                            </section>
                        </article>

                        <article class="equal-spacing margin_btm">
                            <section class="equal-spacing">
                                <div class="height-fifty width-large">
                                    Transaction Number : -
                                </div>

                                <div class="height-fifty width-larger">
                                    <span id="transaction_number">
                                        -
                                    </span>
                                </div>
                            </section>
                        </article>

                        <article class="equal-spacing margin_btm">
                            <section class="equal-spacing">
                                <div class="height-fifty width-large extra-larger">
                                    TOTAL
                                </div>

                                <div class="height-fifty width-larger flex-end">
                                    <span id="total_amount" class="bold black">
                                        &#8377; 234
                                    </span>
                                </div>
                            </section>
                        </article>
                    </div>
                </div>

                <div id="items-container">
                    <p id="all-item-text" class="todays-special-font">ITEMS ORDERED</p>

                    <div id="combo-desc">
                        <!--Selected Item List Container-->
                        <section id="selected-item" class="items_ordered">
                            <span class="textfield-header left-space">ITEMS</span>

                            <article id="added-items">
                                <!--Javascript Addition-->

                            </article>
                        </section>

                        <!-- Working as a space between items and button -->
                        <div id="total-amount" class="height">
                        </div>

                        <button id="add-special-today-button" class="print_summary_button">Print Summary</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>