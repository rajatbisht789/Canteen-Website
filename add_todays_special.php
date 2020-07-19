<html>
    <head>
        <title>Add Today's Special</title>

        <!--Main CSS-->
        <link rel="stylesheet" href="dashboard.css" type="text/css">

        <!--Additional CSS-->
        <link rel="stylesheet" href="common.css" type="text/css">
        
        <!--Global CSS-->
        <link rel="stylesheet" href="global_css.css" type="text/css">
        <link rel="stylesheet" href="global_colors.css" type="text/css">
        <link rel="stylesheet" href="global_fonts.css" type="text/css">
        
        <script src="add_todays_special.js"></script>
        <script src="allData.js"></script>
        
        <script>
            function goBack() {
                window.location.href="admin.php";
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
                            <span>Dashboard</span>
                        </div>
                    </span>
                </div>

                <!--Name and search bar-->
                <div id="name-container">
                    <h1>Add Today's Special</h1>
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
                    <p id="all-item-text">ALL ITEM LIST</p>
                    <div>
                        <span id="select-label">Search Item or Cuisine: </span>
                        <input type="text" id="search-items" name="search" oninput="getItemData()" placeholder="Eg. Butter Paneer Masala">
                        <button id="search" onclick="">Search</button>
                    </div>
                </div>

                <!--Item List View-->
                <div id="items-view-container">
                    <!--All Item View Container-->
                    <div id="item-view">
                        <!--Javascript Addition-->
                        
                    </div>

                    <!--Side Bar To Add Combo Items-->
                    <div id="combo-sidebar">
                        <p id="all-item-text" class="todays-special-font">TODAY'S SPECIAL ITEMS</p>

                        <div id="combo-desc">
                            

                            <!--Selected Item List Container-->
                            <section id="selected-item" class="todays-special-items">
                                <span class="textfield-header left-space">ITEMS</span>

                                <article id="added-items">
                                    <!--Javascript Addition-->
                                </article>
                            </section>

                            <!-- Working as a space between items and button -->
                            <div id="total-amount" class="height">
                            </div>
                            
                            <button id="add-special-today-button" class="side-bar-add-button">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
