<?php
require 'dbconfig/config.php';
session_start();
?>


<?php

                if (isset($_POST['login'])) {
                    $Username = $_POST['Username'];
                    $password = $_POST['password'];
                    $encrypted_password = md5($password);

                    $query = "select* from user WHERE Username='$Username' AND password='$encrypted_password'";
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        /*valid*/
                        
                            if(isset($_POST['rememberme'])){
                               
                                setcookie('Usernamecookie',$Username,time()+86400);
                                setcookie('passwordcookie',$password,time()+86400);
                                header('location:loginhome.php');
                            }else{
                                header('location:loginhome.php');
                            }
                            
                        $_SESSION['Username'] = $Username;
                        header('location:loginhome.php');  /*give access to a specific page*/
                    } else {
                        /*invalid*/
                        echo '<script type="text/javascript"> alert("invalid credentials")</script>';
                    }
                }

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
        <div class="row content ">
            <div class="col-md-6 mb-3 " style="display: flex; justify-content:center;">
                <img src="img/Artboard 1@4x 1.png" class="img-fluid" alt="image">
            </div>
            <div class="col-md-6 ">

                <form action="login.php" method="post">
                    <div class="form-group" style="margin-top: 3%">
                        <label for="Username">Username</label>
                        <input type="text" name="Username" class="form-control" value="<?php  if(isset($_COOKIE['Usernamecookie'])){ echo $_COOKIE['Usernamecookie']; } ?>" required>
                    </div>
                    <div class="form-group" style="margin-top: 3%">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" value="<?php  if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie']; } ?>" required>
                    </div>
                    <div class="form-group form-check" style="margin-top: 3%">
                        <input type="checkbox" class="form-check-input" id="checkbox" name="rememberme">
                        <label class="form-check-label" for="checkbox">Remamber Me</label>
                    </div>

                    <div style="margin-top: 7%">
                        <input name="login" type="submit" class="btn btn-class" value="login">
                    </div>
                    <br></br>
                    <h7>Forgot your <a href="recover_username.php">Username</a> or <a href="recover_email.php"> password</a> ?</h7>
                    <div class="signup-text">
                        <h7>Don't have an account? <a href="SignUp.php">Sign Up</a></h7>
                    </div>
                </form>

                

            </div>
        </div>


    </div>
    </div>


    <script src="bootstrap/js/bootstrap.bundle.min"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>




</body>

</html>