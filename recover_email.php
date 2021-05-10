<?php
require 'dbconfig/config.php';
 //session_start();
 ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email recovery</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/style2.css">
</head>

<body>

    <div class="container">
        <div class="row content">
            <div class="col-md-6 mb-3" style="display: flex; justify-content:center;">
                <img src="img/Artboard 1@4x 1.png" class="img-fluid" alt="image">
            </div>
            <div class="col-md-6 ">

                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="form-group" style="margin-top: 3%">
                        <label for="Username" style="margin-bottom: 2%;">Enter your email</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>


                    <div style="margin-top: 7%">
                        <input name="submit" type="submit" class="btn btn-class" value="Send link">
                    </div>
                    <br></br>

                    <div class="signup-text">
                        <h7>Don't have an account? <a href="SignUp.php">Sign Up</a></h7>
                    </div>
                </form>

                <?php
                if (isset($_POST['submit'])) {

                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $emailquery = " select * from user where email= '$email' ";
                    $query = mysqli_query($con, $emailquery);
                    $emailcount = mysqli_num_rows($query);

                    if ($emailcount) {

                        $userdata = mysqli_fetch_array($query);

                        $Username = $userdata['Username'];
                        $token = $userdata['token'];

                        $subject = "Password Reset";
                        $body = "Hi, $Username. Click here too reset your password http://localhost/AIC-MFIE_reg_page/reset_password.php?token=$token ";
                        $sender_email = "From: kenway.ac1721@gmail.com";

                        if (mail($email, $subject, $body, $sender_email)) {
                            
                             header('location:login.php');

                            echo "email sent";
                        } else {

                            echo "Email sending failed...";
                        }
                    }
                }
                ?>

            </div>
        </div>


    </div>
    </div>


    <script src="bootstrap/js/bootstrap.bundle.min"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>




</body>

</html>