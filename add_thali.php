<?php

$error = ""; $successMessage = "";

if ($_POST) {

    if (!preg_match('/^[\w\s]{3,}$/', $_POST["thali_name"])) {
        $error .= "Thali name cannot have special character and must be 3 character long.<br>";
    }
    
    if (!preg_match('/^[A-Za-z\d\s,-]{10,}$/', $_POST["thali-description"])) {
        $error .= "Description must be 10 character long and cannot have special character other than ',' and '-'.<br>";
    }
    
    if (!preg_match('/^\d+$/', $_POST["thali_price"])) {
        $error .= "Price cannot have any character other than digits.<br>";
    }

    if ($error != "") {
        $error = '<div class="alert alert-danger" role="alert"><p><strong>Error:</strong></p>' . $error . '</div>';
    } else {
        $successMessage = '<div class="alert alert-success" role="alert">Thali Added Sucessfully!</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Thali</title>
        
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
                    <h1>Add New Thali</h1>
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
                <span id="description-items">Fill out the detail to add new thali. All fields are required.</span>
                <span id="error-veg-non">Please select Veg or Non-Veg.</span><br>
                <div id="form-container">
                    <form method="post">
                        <table id="thali-table">
                            <tbody>
                                <tr>
                                    <th>Thali Name:</th>
                                    <td><input type="text" name="thali_name" id="thali_name" required></td>
                                </tr>
                                <tr>
                                    <th id="label-desc">About Thali: </th>
                                    <td>
                                        <textarea name="thali-description" rows="3" id="thali-description" required></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Price: </th>
                                    <td><input type="text" name="thali_price" id="thali_price" required></td>
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
                                        <input type="submit" name="add-thali-button" value="Add Thali" id="add-thali-button">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    
                    <!-- Alert Box -->
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

                            if (!((/^[\w\s]{3,}$/).test($("#thali_name").val()))) {
                                error += "Thali name cannot have special character and must be 3 character long.<br>"
                            }
                            
                            if (!((/^[A-Za-z\d\s,-]{10,}$/).test($("#thali-description").val()))) {
                                error += "Description must be 10 character long and cannot have special character other than ',' and '-'.<br>"
                            }
                            
                            if (!((/^\d+$/).test($("#thali_price").val()))) {
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