<!DOCTYPE html>
<html lang="en">
    <head>
        <title>All Items List</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--Main CSS-->
        <link rel="stylesheet" href="dashboard.css" type="text/css">
        <link rel="stylesheet" href="items_list.css" type="text/css">

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
        </script>
        
        <script src="item_list.js"></script>

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
                    <h1>All Items List</h1>
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
                        <span id="select-label">Search Item: </span>
                        <input type="text" id="search-items" name="search" oninput="resetAllItem()" placeholder="Eg. Butter Paneer Masala">
                        <button id="search" onclick="">Search</button>
                    </div>
                </div>

                <!--Item List View-->
                <div id="cuisine-view-container">
                    <!--All Item View Container-->
                    <div id="cuisine-view">
                        <!--Javascript Addition-->
                        <!--Menu List-->
                <div id="menu-list-sidebar">
                    <dl id="menu" align="right">
                        <!--Javascript Addition-->
                    </dl>
                </div>
                    </div>

                    <!--Side Bar To Add Combo Items-->
                    <div id="items-sidebar">
                        <!--Javascript Addition-->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>