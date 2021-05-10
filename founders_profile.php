<?php

require 'dbconfig/config.php';

?>


<?php
require 'dbconfig/config.php';
session_start();


$Username = $_SESSION['Username'];
$dataquery = " select * from application where Username= '$Username' ";
$query = mysqli_query($con, $dataquery);

$resultcheck = mysqli_num_rows($query);






$userdata = mysqli_fetch_array($query);

$Username = $userdata['Username'];
$company_name = $userdata['company_name'];
$company_url = $userdata['company_url'];
$company_demo = $userdata['company_demo'];
$company_description = $userdata['company_description'];
$company_products = $userdata['company_products'];
$company_currentlocation = $userdata['company_currentlocation'];
$contact_email = $userdata['contact_email'];
$contact_phone = $userdata['contact_phone'];
$founders_url = $userdata['founders_url'];
$founders_count = $userdata['founders_count'];
$category_type = $userdata['category_type'];
$progress_faralong = $userdata['progress_faralong'];
$progress_working = $userdata['progress_working'];
$progress_usingproduct = $userdata['progress_usingproduc'];
$progress_revenue = $userdata['progress_revenue'];
$progress_change = $userdata['progress_change'];
$progress_committed = $userdata['progress_committed'];
$idea_domainexpert = $userdata['idea_domainexpert'];
$idea_new = $userdata['idea_new'];
$idea_competitors = $userdata['idea_competitors'];
$idea_understanding = $userdata['idea_understanding'];
$idea_makemoney = $userdata['idea_makemoney'];
$idea_users = $userdata['idea_users'];
$equity_legalentity = $userdata['equity_legalentity'];
$equity_investment = $userdata['equity_investment'];
$equity_plan = $userdata['equity_plan'];
$equity_structure = $userdata['equity_structure'];
$legal_overlap = $userdata['legal_overlap'];
$legal_codes = $userdata['legal_codes'];
$legal_knowledge = $userdata['legal_knowledge'];
$others_ideas = $userdata['others_ideas'];
$others_surprising = $userdata['others_surprising'];
$curious_apply = $userdata['curious_apply'];
$curious_hear = $userdata['curious_hear'];






if (isset($_POST['edit'])) {
    header('location:reeditapplication.php');
}






?>
<html>

<head>
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
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
<style>
    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: .9rem;
        padding-left: .9rem;
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
        text-align: center;
        margin-left: 1em;
    }

    .nav-item {
        padding: 0.2%;
        width: 9.2rem;
        height: 5%;
        margin-top: 2%;
        color: white;
        font-size: 1.2rem;
        text-align: center;
    }

    .navbar-brand {
        font-weight: bold;
        font-size: 2rem;
        margin-left: 1em;
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

    html,
    body {
        max-width: 100%;
        font-family: Rubik;
        overflow-x: hidden;
        background-color: #f6f6ef;
    }

    h2 {
        font-weight: bolder;
    }

    h4,
    h5 {
        margin-bottom: 1.2em;
        font-weight: bolder;
    }

    .card-body {
        padding: 2.4em;
        margin-left: -1em;
        margin-right: -1em;
        max-height: 12em;
        margin-top: 1%;
        padding: 2em;
        align-items: center;
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

    .form-item {
        display: flex;
        flex-direction: column;
        margin: 3%;
    }

    .textbox-small {

        width: 50%;
        height: 35px;
    }

    .textbox-long {
        width: 100%;
        height: 35px;
    }


    .btn-class {
        border-color: #00ac96;
        color: #00ac96;
        width: 20%;
    }

    .btn-class:hover {
        background-color: #FF725E;
        color: #fff;
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
                        <a class="nav-link"><?php echo $_SESSION['Username'] ?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="color: #FF725E;">Logout</a>
                    </li>






                </ul>


            </div>
        </nav>



        <div style="text-align: center; margin-top: 10%;">
            <h1 style="color:#000000;margin:3%;font-weight:bolder; color:#277D8C; margin-top: 15%;">Startup Application Form</h1>
        </div>






        <form action="" method="post">
            <div class="row" style="margin-top: 6%; margin-bottom:6%" ;>
                <div class="col-lg-3 col-sm-12 center-block text-center" style="display:grid; margin: auto; ">
                    <h3 style="background-color:  #FF725E; color: white; ">company</h3>
                </div>
                <div class="col-lg-9 col-sm-12 form-class" style="padding-left: 6%;">

                    <div class="form-item">
                        <label for="company-name">Company name:</label>

                        <h7 style="color: red;"><?php echo $company_name; ?></h7>

                    </div>
                    <div class="form-item">
                        <label for="company-url">Company url, if any:</label>
                        <h7 style="color: red;"><?php echo $company_url; ?></h7>

                    </div>
                    <div class="form-item">
                        <label for="company-demo">If you have a demo, what's the url? Demo can be anything that shows us how the product works. Usually that's a video or screen recording.</label>
                        <h7 style="color: red;"><?php echo $company_demo; ?></h7>

                    </div>
                    <div class="form-item">
                        <label for="company-description">Describe what your company does in 50 characters or less.</label>
                        <h7 style="color: red;"><?php echo $company_description; ?></h7>

                    </div>
                    <div class="form-item">
                        <label for="company-products">What is your company going to make? Please describe your product and what it does or will do</label>
                        <h7 style="color: red;"><?php echo $company_products; ?></h7>

                    </div>
                    <div class="form-item">
                        <label for="company-currentlocation">Where do you live now, and where would the company be based after YC?</label>
                        <h7 style="color: red;"><?php echo $company_currentlocation; ?></h7>

                    </div>

                </div>

            </div>

            <hr style="height:2px;border-width:0;color:gray;background-color:gray">

            <div class="row" style="margin-top: 6%; margin-bottom:6%" ;>
                <div class="col-lg-3 col-sm-12 center-block text-center" style="display:grid; margin: auto; ">
                    <h3 style="background-color:  #FF725E;color: white;">contact</h3>
                </div>
                <div class="col-lg-9 col-sm-12" style="padding-left: 6%;">

                    <div class="form-item">
                        <label for="contact-email">Personal email address of the founder who is filling out this application:</label>
                        <h7 style="color: red;"><?php echo $contact_email; ?></h7>

                    </div>
                    <div class="form-item">
                        <label for="contact-phone">Phone number(s):</label>
                        <h7 style="color: red;"><?php echo $contact_phone; ?></h7>

                    </div>


                </div>

            </div>


            <hr style="height:2px;border-width:0;color:gray;background-color:gray">

            <div class="row" style="margin-top: 6%; margin-bottom:6%" ;>
                <div class="col-lg-3 col-sm-12 center-block text-center" style="display:grid; margin: auto; ">
                    <h3 style="background-color:  #FF725E;color: white;">Founders</h3>
                </div>
                <div class="col-lg-9 col-sm-12" style="padding-left: 6%;">

                    <div class="form-item">
                        <label for="founders-url">Please enter the url of a 1 minute unlisted (not private) YouTube or Youku video introducing the founder(s). This video is an important part of the application. (Follow the Video Guidelines.)</label>
                        <h7 style="color: red;"><?php echo $founders_url; ?></h7>
                    </div>
                    <div class="form-item">
                        <label for="founders-count">How many founders are on the team?</label>
                        <h7 style="color: red;"><?php echo $founders_count; ?></h7>

                    </div>


                </div>

            </div>


            <hr style="height:2px;border-width:0;color:gray;background-color:gray">

            <div class="row" style="margin-top: 6%; margin-bottom:6%" ;>
                <div class="col-lg-3 col-sm-12 center-block text-center" style="display:grid; margin: auto; ">
                    <h3 style="background-color:  #FF725E;color: white;">Catagory</h3>
                </div>
                <div class="col-lg-9 col-sm-12" style="padding-left: 6%;">

                    <div class="form-item">
                        <label for="category-type">Which category best applies to your company?</label>
                        <h7 style="color: red;"><?php echo $category_type; ?></h7>

                    </div>


                </div>

            </div>


            <hr style="height:2px;border-width:0;color:gray;background-color:gray">

            <div class="row" style="margin-top: 6%; margin-bottom:6%" ;>
                <div class="col-lg-3 col-sm-12 center-block text-center" style="display:grid; margin: auto; ">
                    <h3 style="background-color:  #FF725E;color: white;">PROGRESS</h3>
                </div>
                <div class="col-lg-9 col-sm-12" style="padding-left: 6%;">

                    <div class="form-item">
                        <label for="progress-faralong">How far along are you?</label>
                        <h7 style="color: red;"><?php echo $progress_faralong; ?></h7>
                    </div>
                    <div class="form-item">
                        <label for="progress-working">How long have each of you been working on this? How much of that has been full-time? Please explain.</label>
                        <h7 style="color: red;"><?php echo $progress_working; ?></h7>
                    </div>
                    <div class="form-item">
                        <label for="progress-usingproduct">Are people using your product?</label>
                        <h7 style="color: red;"><?php echo $progress_usingproduct; ?></h7>

                    </div>
                    <div class="form-item">
                        <label for="progress-revenue">Do you have revenue?</label>
                        <h7 style="color: red;"><?php echo $progress_revenue; ?></h7>

                    </div>
                    <div class="form-item">
                        <label for="progress-change">If you are applying with the same idea as last batch, did anything change? If you applied with a different idea, why did you pivot and what did you learn from the last idea?</label>
                        <h7 style="color: red;"><?php echo $progress_change; ?></h7>
                    </div>
                    <div class="form-item">
                        <label for="progress-committed">If you have already participated or committed to participate in an incubator, "accelerator" or "pre-accelerator" program, please tell us about it.</label>
                        <h7 style="color: red;"><?php echo $progress_committed; ?></h7>
                    </div>

                </div>

            </div>

            <hr style="height:2px;border-width:0;color:gray;background-color:gray">

            <div class="row" style="margin-top: 6%; margin-bottom:6%" ;>
                <div class="col-lg-3 col-sm-12 center-block text-center" style="display:grid; margin: auto; ">
                    <h3 style="background-color:  #FF725E;color: white;">IDEA</h3>
                </div>
                <div class="col-lg-9 col-sm-12" style="padding-left: 6%;">

                    <div class="form-item">
                        <label for="idea-domainexpert">Why did you pick this idea to work on? Do you have domain expertise in this area? How do you know people need what you're making?</label>
                        <h7 style="color: red;"><?php echo $idea_domainexpert; ?></h7>
                    </div>
                    <div class="form-item">
                        <label for="idea-new">What's new about what you're making? What substitutes do people resort to because it doesn't exist yet (or they don't know about it)?</label>
                        <h7 style="color: red;"><?php echo $idea_new; ?></h7>
                    </div>
                    <div class="form-item">
                        <label for="idea-competitors">Who are your competitors, and who might become competitors? Who do you fear most?</label>
                        <h7 style="color: red;"><?php echo $idea_competitors; ?></h7>
                    </div>
                    <div class="form-item">
                        <label for="idea-understanding">What do you understand about your business that other companies in it just don't get?</label>
                        <h7 style="color: red;"><?php echo $idea_understanding; ?></h7>
                    </div>
                    <div class="form-item">
                        <label for="idea-makemoney">How do or will you make money? How much could you make?</label>
                        <h7 style="color: red;"><?php echo $idea_makemoney; ?></h7>
                    </div>
                    <div class="form-item">
                        <label for="idea-users">How will you get users? If your idea is the type that faces a chicken-and-egg problem in the sense that it won't be attractive to users till it has a lot of users (e.g. a marketplace, a dating site, an ad network), how will you overcome that?</label>
                        <h7 style="color: red;"><?php echo $idea_users; ?></h7>
                    </div>

                </div>

            </div>

            <hr style="height:2px;border-width:0;color:gray;background-color:gray">

            <div class="row" style="margin-top: 6%; margin-bottom:6%" ;>
                <div class="col-lg-3 col-sm-12 center-block text-center" style="display:grid; margin: auto; ">
                    <h3 style="background-color:  #FF725E;color: white;">EQUITY</h3>
                </div>
                <div class="col-lg-9 col-sm-12" style="padding-left: 6%;">

                    <div class="form-item">
                        <label for="equity-legalentity">Have you incorporated, or formed any legal entity (like an LLC) yet?</label>
                        <h7 style="color: red;"><?php echo $equity_legalentity; ?></h7>

                    </div>
                    <div class="form-item">
                        <label for="equity-investment">Have you taken any investment yet?</label>
                        <h7 style="color: red;"><?php echo $equity_investment; ?></h7>

                    </div>
                    <div class="form-item">
                        <label for="equity-plan">If you have not formed the company yet, describe the planned equity ownership breakdown among the founders, employees and any other proposed stockholders. If there are multiple founders, be sure to give the proposed equity ownership of each founder.</label>
                        <h7 style="color: red;"><?php echo $equity_plan; ?></h7>
                    </div>
                    <div class="form-item">
                        <label for="equity-structure">Please provide any other relevant information about the structure or formation of the company.</label>
                        <h7 style="color: red;"><?php echo $equity_structure; ?></h7>
                    </div>



                </div>

            </div>


            <hr style="height:2px;border-width:0;color:gray;background-color:gray">


            <div class="row" style="margin-top: 6%; margin-bottom:6%" ;>
                <div class="col-lg-3 col-sm-12 center-block text-center" style="display:grid; margin: auto; ">
                    <h3 style="background-color:  #FF725E;color: white;">LEGAL</h3>
                </div>
                <div class="col-lg-9 col-sm-12" style="padding-left: 6%;">

                    <div class="form-item">
                        <label for="legal-overlap">Are any of the founders covered by noncompetes or intellectual property agreements that overlap with your project? If so, please explain.</label>
                        <h7 style="color: red;"><?php echo $legal_overlap; ?></h7>
                    </div>
                    <div class="form-item">
                        <label for="legal-codes">Who writes code, or does other technical work on your product? Was any of it done by a non-founder? Please explain.</label>
                        <h7 style="color: red;"><?php echo $legal_codes; ?></h7>
                    </div>
                    <div class="form-item">
                        <label for="legal-knowledge">Is there anything else we should know about your company?</label>
                        <h7 style="color: red;"><?php echo $legal_knowledge; ?></h7>
                    </div>




                </div>

            </div>


            <hr style="height:2px;border-width:0;color:gray;background-color:gray">


            <div class="row" style="margin-top: 6%; margin-bottom:6%" ;>
                <div class="col-lg-3 col-sm-12 center-block text-center" style="display:grid; margin: auto; ">
                    <h3 style="background-color:  #FF725E;color: white;">OTHERS</h3>
                </div>
                <div class="col-lg-9 col-sm-12" style="padding-left: 6%;">

                    <div class="form-item">
                        <label for="others-ideas">If you had any other ideas you considered applying with, please list them. One may be something we've been waiting for. Often when we fund people it's to do something they list here and not in the main application.</label>
                        <h7 style="color: red;"><?php echo $others_ideas; ?></h7>
                    </div>
                    <div class="form-item">
                        <label for="others-surprising">Please tell us something surprising or amusing that one of you has discovered.</label>
                        <h7 style="color: red;"><?php echo $others_surprising; ?></h7>
                    </div>



                </div>

            </div>



            <hr style="height:2px;border-width:0;color:gray;background-color:gray">


            <div class="row" style="margin-top: 6%; margin-bottom:6%" ;>
                <div class="col-lg-3 col-sm-12 center-block text-center" style="display:grid; margin: auto; ">
                    <h3 style="background-color:  #FF725E;color: white;">CURIOUS</h3>
                </div>
                <div class="col-lg-9 col-sm-12" style="padding-left: 6%;">

                    <div class="form-item">
                        <label for="curious-apply">What convinced you to apply to AIC-MFIE? Did someone encourage you to apply?</label>
                        <h7 style="color: red;"><?php echo $curious_apply; ?></h7>
                    </div>
                    <div class="form-item">
                        <label for="curious-hear">How did you hear about AIC-MFIE?</label>
                        <h7 style="color: red;"><?php echo $curious_hear; ?></h7>
                    </div>

        </form>

        <div class="" style="margin-left:25%; margin-top: 6%; margin-bottom: 0%; padding:auto; ">
            <input name="edit" type="submit" class="btn btn-class" value="edit">
        </div>


    </div>

    <?php







    ?>

    </div>

    <div class="row1" class="row" style="margin-top: 6%; margin-bottom: 0%; padding:auto; ">
        <p style="font-weight: bold; padding-left: 9%; padding-right: 9%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quis corrupti, enim numquam mollitia .</p>
    </div>

</body>

</html>