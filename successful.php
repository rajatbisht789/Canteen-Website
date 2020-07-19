<?php

$successMessage = '<div class="alert alert-success" role="alert"><strong><p>Thank you for your order.</p></strong><br><p>Your order has been placed successfully</p></div>';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Place Order</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!--Main CSS-->
        <link rel="stylesheet" href="dashboard.css" type="text/css">

        <!--Additional CSS-->
        <link rel="stylesheet" href="global_css.css" type="text/css">
        <link rel="stylesheet" href="common.css" type="text/css">
        <link rel="stylesheet" href="global_colors.css" type="text/css">
        <link rel="stylesheet" href="global_fonts.css" type="text/css">

        <!--Linking Google Fonts-->
        <style>
            @import url('https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,600,700,800&display=swap');
        </style>

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
                        <!--Logo Image-->
                        <a href="admin.php"><img id="logo-image" src="images/logo-white1.png" alt="Logo" /></a>
                    </span>
                </div>

                <!--Name and search bar-->
                <div id="name-container">
                    <h1>Order Successful!</h1>
                </div>
            </div>
        </div>

        <!--Clear All Float-->
        <div id="clear"></div>

        <!--Content Container-->
        <div class="white_back" id="content-container">
            <div id="content-div">
                <div id="success">
                    <?
                    echo $successMessage;
                    ?>
                </div>
                
                <div>
                    <p align="center" class="extra-large">Go back to Big Fat Belly.</p>
                    <div class="align_center">
                        <button class="back_to_main_page_button" onclick="location.href='menu.php'">Go Back</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>