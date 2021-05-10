<?php
session_start();
require 'dbconfig/config.php';
ob_start();

if (isset($_POST['submit'])) {
    $Username = $_SESSION['Username'];
    $query = "select * from application WHERE Username='$Username'";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
        echo '<script type="text/javascript"> alert("application already submitted")</script>';
    } else {
        header('location:editapplication.php');
    }
}


if (isset($_POST['founders_profile'])) {
    $Username = $_SESSION['username'];
    header('location:founders_profile.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>AIC-MFIE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.0/js/jquery.min.js"></script>
    <script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.0/js/popper.min.js"></script>
    <script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.0/js/bootstrap.min.js"></script>
    <script src="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.19.0/js/mdb.min.js"></script>
    <script src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/bundles/4.19.0/compiled-addons.min.js"></script>
    <script></script>
    <div class="hiddendiv common"></div>
    </body>

</html>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">



<style>
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: .9rem;
        padding-left: .9rem;
        color: white;
    }

    #heroimg {
        height: 35rem;
    }

    #main_btn {
        background-color: white;
        color: #FF725E;
        padding: 0.7%;
        width: 8rem;
        height: 5%;
        font-size: 1.2rem;
        margin-top: 2%;
        font-weight: bold;
        text-align: center;
        border-color: #FF725E;
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    li {
        text-align: center;
    }

    .nav-item {
        padding: 0.2%;
        width: 9.2rem;
        height: 5%;
        margin-right: 2px;
        color: white;
        font-size: 1.2rem;
        text-align: center;
    }

    .navbar-brand {
        font-weight: bold;
        font-size: 2rem;
        margin-left: 1em;
    }

    html,
    body {
        max-width: 100%;
        font-family: rubik;
        overflow-x: hidden;
        height: 100%;
        background-color: #f6f6ef;
    }

    h1,
    h2 {
        color: #277D8C;
        text-align: center;
        font-weight: bolder;
    }

    h4 {
        margin-bottom: 1.2em;
        font-weight: bolder;
    }

    .card-body {
        padding: 2.4em;
    }

    .card-text {
        color: white;
    }

    .card-title {
        color: white;
    }

    #heroimg1 {
        align-items: center;
        margin-left: 24em;
    }

    .row1 {
        background-color: #277D8C;
        width: 100%;

    }

    .row1 p {
        padding: 4%;
        text-align: center;
        color: white;
    }

    figcaption {
        text-align: center;
    }

    @media screen and (min-width: 768px) {
        .one {
            border-right: 1px solid #C4C4C4;
        }
    }

    @media screen and (max-width: 768px) {
        .two {
            border-top: 1px solid #C4C4C4;
        }
    }

    .application-btn {

        background-color: #FF725E;
        border: none;
        color: white;
        padding: 20px 40px;
        text-align: center;
        font-size: 16px;
        margin: 4px 2px;
        opacity: 0.6;
        transition: 0.3s;
        display: inline-block;
        text-decoration: none;
        cursor: pointer;
        border-radius: 10px;

    }

    .application-btn:hover {
        opacity: 1;

    }

    .btn-class {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 5%;

    }

    a {
        text-decoration: none;
        color: white;
    }

    a:hover {

        text-decoration: none;
        color: white;

    }
</style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #277D8C">
            
        <a href="index.html"><img src="img/headerlogo.png" id="header-logo" style="height: 5rem;  text-align: left;" alt=""></a>
        
        <!-- <div>
                <a href="index.html"><img src="img/NITI AIM Logo_supported by.png" style="height: 4rem; " alt=""></a>
                <a href="index.html"><img src="img/Artboard 1@4x 24_2.png" style="height: 4rem;  " alt=""></a>
            </div> -->

            <!-- <a class="navbar-brand" href="d_1.html">
                AIC-MFIE
            </a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">


                <ul class="navbar-nav ml-auto">


                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $_SESSION['Username'] ?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" name="logout" href="logout.php" style="color: #eb596e;">Logout</a>
                    </li>






                </ul>
            </div>
        </nav>

        <div class="row" style="margin-top:8%">
            <div class="col-lg-6 col-sm-12 btn-class" style="margin-top: 5%">

                <form method="post" style="margin: inherit;">
                    <div style="margin-top: 10%">
                        <input type="submit" class="application-btn btn-big" name="founders_profile" value="     Profile     ">
                    </div>

                    <div style="margin-top: 10%">

                        <input type="submit" class="application-btn btn-big" name="submit" value="Application">
                </form>
            </div>

        </div>
        <div class="col-lg-6 col-sm-12" style="margin-top: 5%">
            <h2 style="font-weight:bold; margin-top:3%">Application</h2>
            <div style="margin-top: 2%">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscin</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscin</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscin</li>
                </ul>
            </div>
            <div>
                <h2 style="font-weight:bold; margin-top:3%">Founders</h2>
                <ul style="margin-top: 2%">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscin</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscin</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscin</li>
                </ul>
            </div>

        </div>






    </div>
    </div>
    <div class="row1" class="row" style="margin-top: 6%; margin-bottom: 6%; padding:auto; ">
        <p style="font-weight: bold; padding-left: 9%; padding-right: 9%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quis corrupti, enim numquam mollitia .</p>
    </div>
</body>

</html>