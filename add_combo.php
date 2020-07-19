<?php

$error = ""; $successMessage = "";

if ($_POST) {

    if (!preg_match('/^.{6,}$/', $_POST["combo-name"])) {
        $error .= "Please enter the name of combo atleast 6 character long.<br>";
    }
    
    if (!preg_match('/^\d+$/', $_POST["combo-price"])) {
        $error .= "Price cannot have any character other than digits.<br>";
    }

    if ($error != "") {
        $error = '<div class="alert alert-danger" role="alert"><p><strong>Error:</strong></p>' . $error . '</div>';
    } else {
        $successMessage = '<div class="alert alert-success" role="alert">Combo Added Sucessfully!</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Combo</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!--Main CSS-->
        <link rel="stylesheet" href="dashboard.css" type="text/css">

        <!--Additional CSS-->
        <link rel="stylesheet" href="common.css" type="text/css">

        <!--Global CSS-->
        <link rel="stylesheet" href="global_css.css" type="text/css">
        <link rel="stylesheet" href="global_colors.css" type="text/css">
        <link rel="stylesheet" href="global_fonts.css" type="text/css">

        <script src="allData.js"></script>
        <script src="add_combo.js"></script>

        <script>
            function goBack() {
                window.location.href="admin.php";
            }
        </script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

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
                    <h1>Add New Combo</h1>
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
                <!-- Error Div -->
                <div id="alert_box">
                    <?
                    echo $error.$successMessage;
                    $successMessage = "";

                    echo '<script type="text/javascript">
                            setTimeout(function() { $(".alert-success").remove(); }, 2000);
                        </script>';
                    ?>
                </div>

                <!--Title Header-->
                <div id="search-bar-header">
                    <p id="all-item-text">ALL ITEM LIST</p>
                    <div>
                        <span id="select-label">Search Item or Cuisine: </span>
                        <input type="text" id="search-items" name="search" oninput="resetAllItem()" placeholder="Eg. Butter Paneer Masala">
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
                        <form method="post">
                            <p id="all-item-text" class="combo-font">COMBO DETAILS</p>

                            <div id="combo-desc">
                                <!--Input For Combo Price-->
                                <div class="textfield-container">
                                    <span class="textfield-header">COMBO NAME</span>
                                    <input id="combo-name" class="combo-name-style" type="text" name="combo-name" placeholder="Enter Combo Name..." required>
                                </div>

                                <!--Input For Combo Price-->
                                <div class="textfield-container">
                                    <span class="textfield-header">SET COMBO PRICE</span>
                                    <input id="combo-price" class="combo-name-style rupee" type="text" name="combo-price" placeholder="Enter Price..." required>
                                </div>

                                <!--Selected Item List Container-->
                                <section id="selected-item">
                                    <span class="textfield-header left-space">ITEMS</span>

                                    <div id="error">
                                        No Item Added
                                    </div>
                                    <article id="added-items">
                                        <!--Javascript Addition-->
                                    </article>
                                </section>

                                <div id="total-amount">
                                    <p class="bold light-black">NORMAL PRICE (TOTAL)</p>
                                    <span id="total-price" class="bold extra-large">&#8377; 0</span>
                                </div>
                                <input type="submit" name="add-combo-button" id="add-combo-button" class="side-bar-add-button" value="Make Combo">
                            </div>
                        </form>
                        
                        <script type="text/javascript">
                        $("form").submit(function(e) {

                            e.preventDefault();
                            var error = "";

                            if (!((/^.{6,}$/).test($("#combo-name").val()))) {
                                error += "Please enter the name of combo atleast 6 character long.<br>"
                            }
                            
                            if (!((/^\d+$/).test($("#combo-price").val()))) {
                                error += "Price cannot have any character other than digits.<br>"
                            }

                            if (error != "") {
                                $("#alert_box").html('<div class="alert alert-danger" role="alert"><p><strong>Error:</strong></p>' + error + '</div>');
                            } else {
                                $("form").unbind("submit").submit();
                            }

                        });
                    </script>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
