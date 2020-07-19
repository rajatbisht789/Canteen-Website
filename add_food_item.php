<?php

$error = ""; $successMessage = ""; $message = "Item Added Sucessfully!";

if ($_POST) {

    if (!preg_match('/^[\w\s]{3,}$/', $_POST["item_name"])) {
        $error .= "Item name cannot have special character and must be 3 character long.<br>";
    }

    if (!preg_match('/^.{3,}$/', $_POST["cuisine"])) {
        $error .= "Please select 'Belongs To'.<br>";
    }

    if (!preg_match('/^\d+$/', $_POST["item_price"])) {
        $error .= "Price cannot have any character other than digits.<br>";
    }

    if ($error != "") {
        $error = '<div class="alert alert-danger" role="alert"><p><strong>Error:</strong></p>' . $error . '</div>';
    } else {
        $successMessage = '<div class="alert alert-success" role="alert">' . $message . '</div>';
        
        echo '<script>
            localStorage["itemName"] = ""; localStorage["price"] = ""; localStorage["heading"] = ""; 
            localStorage["isVeg"] = ""; localStorage["completed"] = "updated";
        </script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add New Food Item</title>

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

        <script>
            let comingFrom = localStorage["comingFrom"];

            if (comingFrom == "ItemList") {
                function goBack() {
                    window.location.href="items_list.php";
                }

                window.onload = function(){
                    document.getElementById("top_heading").innerHTML = "Update Food Item";
                    document.getElementById("back_to").innerHTML = "All Items &nbsp;";
                    document.getElementById("add-item-button").value = "Update";
                    document.title = "Update Food Item";
                    
                    document.getElementById("item_name").value = localStorage["itemName"];
                    document.getElementById("item_price").value = localStorage["price"];

                    let size = document.getElementById("cuisine").length;
                    for (i = 0; i < size; i++){
                        if (document.getElementById("cuisine").options[i].value == localStorage["heading"]) {
                            document.getElementById("cuisine").selectedIndex = i;
                            break;
                        }
                    }
                    
                    if (localStorage["isVeg"] == "Veg") {
                        document.getElementById("veg").checked = true;
                    } else if (localStorage["isVeg"] == "Non Veg") {
                        document.getElementById("nonveg").checked = true;
                    }
                    
                    if (localStorage["completed"] == "updated") {
                        setTimeout(function() { window.location = "items_list.php"; }, 2000);
                    }
                }
            } else {
                function goBack() {
                    window.location.href="admin.php";
                }
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
                            <span id="back_to">Dashboard</span>
                        </div>
                    </span>
                </div>

                <!--Name and search bar-->
                <div id="name-container">
                    <h1 id="top_heading">Add New Food Items</h1>
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
                <span id="description-items">Fill out the detail to add new food items. All fields are required.</span>
                <span id="error-veg-non">Please select Veg or Non-Veg.</span> <br>
                <div id="form-container">
                    <form method="post">
                        <table id="food-item-table">
                            <tbody>
                                <tr>
                                    <th>Item Name:</th>
                                    <td><input type="text" name="item_name" id="item_name" required></td>
                                </tr>
                                <tr>
                                    <th>Belongs To: </th>
                                    <td>
                                        <select id="cuisine" name="cuisine">
                                            <option value="">-- Select --</option>
                                            <option value="North Indian">North Indian</option>
                                            <option value="Chinese">Chinese</option>
                                            <option value="Sandwiches">Sandwiches</option>
                                            <option value="Italian">Italian</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Price: </th>
                                    <td><input type="text" name="item_price" id="item_price" required></td>
                                </tr>
                                <tr>
                                    <th>Select: </th>
                                    <td>
                                        <input type="radio" name="veg-nonveg" id="veg" required> Veg&ensp;&ensp;
                                        <input type="radio" name="veg-nonveg" id="nonveg"> Non-Veg
                                    </td>
                                </tr>
                                <td colspan="2"></td>
                                <tr>

                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" name="add-item-button" value="Add Item" id="add-item-button">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>

                    <div id="alert_box">
                        <?
                        echo $error.$successMessage;
                        $successMessage = "";

                        echo '<script type="text/javascript">
                            setTimeout(function() { $(".alert-success").remove(); }, 2000);
                        </script>';
                        ?>
                    </div>

                    <script type="text/javascript">
                        $("form").submit(function(e) {

                            e.preventDefault();
                            var error = "";

                            if (!((/^[\w\s]{3,}$/).test($("#item_name").val()))) {
                                error += "Item name cannot have special character and must be 3 character long.<br>"
                            }

                            if (!((/^.{3,}$/).test($("#cuisine").val()))) {
                                error += "Please select 'Belongs To'.<br>"
                            }

                            if (!((/^\d+$/).test($("#item_price").val()))) {
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
    </body>
</html>