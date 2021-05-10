<?php
require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset password</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/style2.css">
</head>

<body>

    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3">
                <img src="img/Artboard 1@4x 1.png" class="  img-fluid" alt="image">
            </div>
            <div class="col-md-6">

                <form method="post">


                    <div class="form-group" style="margin-top: 3%">
                        <label for="Username" style="margin-bottom: 2%;">New Password</label>
                        <input type="password" name="new_password" class="form-control" required>
                    </div>
                    <div class="form-group" style="margin-top: 3%">
                        <label for="password" style="margin-bottom: 2%;">Confirm new password</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>

                    <input name="submit" type="submit" class="btn btn-class" value="Update password" style="margin-top: 5%">


                    <br></br>

                    <h7>Go to login page?<a href="login.php"> Log in</a></h7>
                </form>

                <?php
                if (isset($_POST['submit'])) {

                    if (isset($_GET['token'])) {

                        $token = $_GET['token'];

                        $new_password = $_POST['new_password'];
                        $confirm_password = $_POST['confirm_password'];
                        $encrypted_password = md5($new_password);


                        if ($new_password == $confirm_password) {
                            $updatequery = " update user set password = '$encrypted_password' where token='$token' ";
                            $iquery = mysqli_query($con, $updatequery);

                            if ($iquery) {
                                echo '<script type="text/javascript"> alert("your password has been updated")</script>';
                                header('location:login.php');
                            } else {
                                header('location:reset_password.php');
                                echo '<script type="text/javascript"> alert("error! try again")</script>';
                            }
                        } else {
                            echo '<script type="text/javascript"> alert("Password not matching")</script>';
                            header('location:reset_password.php');
                        }
                    } else {
                        echo '<script type="text/javascript"> alert("No token found..")</script>';
                    }
                }
                ?>

            </div>
        </div>
    </div>


    <script src="bootstrap/js/bootstrap.bundle.min"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>