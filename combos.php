<html>
    <head>
        <title>All Combo List</title>

        <!--Main CSS-->
        <link rel="stylesheet" href="dashboard.css" type="text/css">

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

            function getItemData() {
                var searchField = document.getElementById("search-items");
                if (searchField.value == "") {
                    console.log("Empty")
                }
            }
        </script>
        
        <script src="combos.js"></script>

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
                    <h1>All Combo List</h1>
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
                <div id="search-bar-header">
                    <p id="all-item-text">COMBO LIST</p>
                    <div>
                        <span id="select-label">Search Combo: </span>
                        <input type="text" id="search-items" name="search" oninput="getItemData()" placeholder="Eg. Burger with French Fries">
                        <button id="search" onclick="">Search</button>
                    </div>
                </div>
                
                <!--Item List View-->
                <div id="items-view-container">
                    <!--All Item View Container-->
                    <div id="combo-view">
                        <!--Javascript Addition-->

                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>