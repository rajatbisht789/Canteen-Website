<?php

$error = ""; $successMessage = "";

if ($_POST) {

    if (!preg_match('/^[A-Za-z\s]{3,}$/', $_POST["agent_name"])) {
        $error .= "Name cannot have digits.<br>";
    }

    if (!preg_match('/^[\w\s\.,-]{12,}$/', $_POST["agent_address"])) {
        $error .= "Address must be 12 character long and cannot have special character other than , . -.<br>";
    }

    if (!preg_match('/^[56789]\d{9}$/', $_POST["mobile-number"])) {
        $error .= "Please enter a valid mobile number.<br>";
    }

    if ($error != "") {
        $error = '<div class="alert alert-danger" role="alert"><p><strong>Error:</strong></p>' . $error . '</div>';
    } else {
        $successMessage = '<div class="alert alert-success" role="alert">Agent Added Sucessfully!</div>';
        
        echo '<script>
            localStorage["name"] = ""; localStorage["address"] = ""; localStorage["mobile"] = ""; 
            localStorage["completed"] = "updated";
        </script>';
    }
}

?>
<html>
    <head>
        <title>Add Agent</title>

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
            let getData = localStorage["comingFrom"];

            window.onload = function(){
                if (getData == "Agent") {
                    document.getElementById("add-agent-button").value = "Update";
                    document.getElementById("header_title").innerHTML = "Update Agent";
                    document.getElementById("back_to").innerHTML = "All Agents";
                    document.title = "Update Agent";
                    
                    document.getElementById("agent_name").value = localStorage["name"];
                    document.getElementById("agent_address").value = localStorage["address"];
                    document.getElementById("mobile-number").value = localStorage["mobile"];
                    
                    let size = document.getElementById("gender").length;
                    for (i = 0; i < size; i++){
                        if (document.getElementById("gender").options[i].value == localStorage["gender"]) {
                            document.getElementById("gender").selectedIndex = i;
                            break;
                        }
                    }
                    
                    if (localStorage["completed"] == "updated") {
                        setTimeout(function() { window.location = "customers.php"; }, 2000);
                    }
                }
            }

            function goBack() {
                if (getData == "Agent") {
                    window.location.href="customers.php";
                } else {
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
                    <h1 id="header_title">Add Agent</h1>
                </div>

                <!--Logo Image-->
                <a href="admin.php"><img id="logo-image" src="images/logo-white1.png" alt="Logo" /></a>
            </div>
        </div>

        <!--Clear All Float-->
        <div id="clear"></div>

        <!--Content Container-->
        <div id="content-container" class="height-agent">
            <div id="content-div">
                <span id="description-items">Fill out the detail to add new agent. All fields are required.</span><br>
                <div id="form-container">
                    <form method="post">
                        <table id="thali-table">
                            <tbody>
                                <tr>
                                    <th>Agent Name:</th>
                                    <td><input type="text" name="agent_name" id="agent_name" required></td>
                                </tr>
                                <tr>
                                    <th id="label-address">Agent Address: </th>
                                    <td>
                                        <textarea name="agent_address" rows="3" id="agent_address" required></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Mobile Number: </th>
                                    <td><input type="text" name="mobile-number" id="mobile-number" required></td>
                                </tr>
                                <tr>
                                    <th>Gender: </th>
                                    <td>
                                        <select id="gender" name="gender" required>
                                            <option value="">-- Select --</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </td>
                                </tr>

                                <td colspan="2"></td>
                                <tr>

                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" name="add-agent-button" value="Add Agent" id="add-agent-button">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>

                    <!-- Alert and Success Box -->
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

                            if (!((/^[A-Za-z\s]{3,}$/).test($("#agent_name").val()))) {
                                error += "Name cannot have digits.<br>"
                            }

                            if (!((/^[\w\s\.,-]{12,}$/).test($("#agent_address").val()))) {
                                error += "Address must be 12 character long and cannot have special character other than , . -.<br>"
                            }

                            if (!((/^[56789]\d{9}$/).test($("#mobile-number").val()))) {
                                error += "Please enter a valid mobile number.<br>"
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