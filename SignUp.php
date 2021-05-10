<?php
require 'dbconfig/config.php';
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/style2.css">
</head>

<body>

    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3" style="display: flex; justify-content:center;">
                <img src="img/Artboard 1@4x 1.png" class="  img-fluid" alt="image">
            </div>
            <div class="col-md-6">

                <form action="" method="post">
                    <div class="fl-namecontainer" style="margin-top: 3%">
                        <div class="form-group fl-name">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" class="form-control" required>
                        </div>
                        <div class="form-group fl-name">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 3%">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group" style="margin-top: 3%">
                        <label for="Username">Username</label>
                        <input type="text" name="Username" class="form-control" required>
                    </div>
                    <div class="form-group" style="margin-top: 3%">
                        <label for="password">Password</label>

                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <input name="submit" type="submit" class="btn btn-class" value="Sign Up" style="margin-top: 5%">


                    <br></br>

                    <h7>Already have an account?<a href="login.php"> Log in</a></h7>
                </form>

                <?php
                if (isset($_POST['submit'])) {
                    

                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $Username = $_POST['Username'];
                    $password = $_POST['password'];

                    $token = bin2hex(random_bytes(15));
                    $encrypted_password = md5($password);
                    /* without confirm password field the two line below will be executed*/
                    //$query = "insert into user values('$fname','$lname','$email','$Username','$encrypted_password','$token')";
                    //$query_run = mysqli_query($con,$query);

                    /* if confirm password componen is applied*/


                    $query = "select * from user WHERE Username='$Username'";
                    $query_run = mysqli_query($con, $query);

                    if (mysqli_num_rows($query_run) > 0) {
                       
                        echo '<script type="text/javascript"> alert("User already exists, try onother user name")</script>';
                    } else {
                        //insert the data in database
                        $query = "insert into user values('$fname','$lname','$email','$Username','$encrypted_password','$token')";
                        $query_run = mysqli_query($con, $query);
                        $_SESSION['Username'] = $Username;
                        header('location:loginhome.php');
                        if ($query_run) {
                            echo '<script type="text/javascript"> alert("User Registered.. go to login page to login")</script>';
                        } else {
                            echo "error" . mysqli_error($con);
                        }
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