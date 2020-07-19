<?php

$error = ""; $successMessage = "";

if ($_POST) {

    if (!preg_match('/^[A-Za-z]+\.?[A-Za-z\d]+@[A-Za-z]+\.[A-Za-z]{2,}\.?[A-Za-z]?$/', $_POST["email_field"])) {
        $error .= "Please enter a valid Email ID.<br>";
    }
    
    if (!preg_match('/^.{8,16}$/', $_POST["password_field"])) {
        $error .= "Password must be between 8 and 16 character.<br>";
    }

    if ($error != "") {
        $error = '<div class="alert alert-danger" role="alert"><p><strong>Error:</strong></p>' . $error . '</div>';
    } else {
        header("Location: admin.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Login</title>
        
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
        <link rel="stylesheet" href="admin_login.css" type="text/css">
        <link rel="stylesheet" href="global_colors.css" type="text/css">
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <div id="container">
            <div id="login-form">
                <img src="images/logo.png" alt="Logo" id="logo">
                <h2 id="heading">Admin Login</h2><hr>
                <form method="post">
                    <input id="email_field" type="email" name="email_field" placeholder="Email Id" required><br>
                    <input id="password_field" type="password" name="password_field" placeholder="Password" required><br>
                    <input id="login-button" type="submit" name="login" value="Login">
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

                            if (!((/^[A-Za-z]+\.?[A-Za-z\d]+@[A-Za-z]+\.[A-Za-z]{2,}\.?[A-Za-z]?$/).test($("#email_field").val()))) {
                                error += "Please enter a valid Email ID.<br>"
                            }
                            
                            if (!((/^.{8,16}$/).test($("#password_field").val()))) {
                                error += "Password must be between 8 and 16 character.<br>"
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
    </body>
</html>