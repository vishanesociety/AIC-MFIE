<?php

require 'dbconfig/config.php';

ob_start();

?>


<?php
require 'dbconfig/config.php';
session_start();
if (isset($_SESSION['Username'])) {
} else {
    echo '<script type="text/javascript"> alert("login to continue")</script>';
    header('location:login.php');
}


/*   if (isset($_POST['submit-application'])) {
        $Username = $_SESSION['Username'];
        $company_name = $_POST['company-name'];
        $company_url = $_POST['company-url'];
        $company_demo = $_POST['company-demo'];
        $company_description = $_POST['company-description'];
        $company_products = $_POST['company-products'];
        $company_currentlocation = $_POST['company-currentlocation'];
        $contact_email = $_POST['contact-email'];
        $contact_phone = $_POST['contact-phone'];
        $founders_url = $_POST['founders-url'];
        $founders_count = $_POST['founders-count'];
        $category_type = $_POST['category-type'];
        $progress_faralong = $_POST['progress-faralong'];
        $progress_working = $_POST['progress-working'];
        $progress_usingproduct = $_POST['progress-usingproduct'];
        $progress_revenue = $_POST['progress-revenue'];
        $progress_change = $_POST['progress-change'];
        $progress_committed = $_POST['progress-committed'];
        $idea_domainexpert = $_POST['idea-domainexpert'];
        $idea_new = $_POST['idea-new'];
        $idea_competitors = $_POST['idea-competitors'];
        $idea_understanding = $_POST['idea-understanding'];
        $idea_makemoney = $_POST['idea-makemoney'];
        $idea_users = $_POST['idea-users'];
        $equity_legalentity = $_POST['equity-legalentity'];
        $equity_investment = $_POST['equity-investment'];
        $equity_plan = $_POST['equity-plan'];
        $equity_structure = $_POST['equity-structure'];
        $legal_overlap = $_POST['legal-overlap'];
        $legal_codes = $_POST['legal-codes'];
        $legal_knowledge = $_POST['legal-knowledge'];
        $others_ideas = $_POST['others-ideas'];
        $others_surprising = $_POST['others-surprising'];
        $curious_apply = $_POST['curious-apply'];
        $curious_hear = $_POST['curious-hear'];


        $query = "insert into application values('$Username','$company_name','$company_url','$company_demo','$company_description',
                '$company_products','$company_currentlocation','$contact_email','$contact_phone','$founders_url',
                '$founders_count','$category_type',' $progress_faralong','$progress_working','$progress_usingproducts',
                '$progress_revenue',' $progress_change','$progress_committed','$idea_domainexpert','$idea_new',
                '$idea_competitors','$idea_understanding','$idea_makemoney','$idea_users','$equity_legalentity',
                '$equity_investment','$equity_plan','$equity_structure','$legal_overlap','$legal_codes','$legal_knowledge','$others_ideas','$others_surprising','$curious_apply',
                '$curious_hear')";
        $query_run = mysqli_query($con, $query);
        header("location:login.php");
    } */


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
            <h1 style="color:#000000;margin:3%;font-weight:bolder; color:#277D8C; margin-top:15%">Startup Application Form</h1>
        </div>






        <form action="reeditapplication.php" method="post">
            <div class="row" style="margin-top: 6%; margin-bottom:6%" ;>
                <div class="col-lg-3 col-sm-12 center-block text-center" style="display:grid; margin: auto; ">
                    <h3 style="background-color:  #FF725E; color: white; ">company</h3>
                </div>
                <div class="col-lg-9 col-sm-12 form-class" style="padding-left: 6%;">

                    <div class="form-item">
                        <label for="company-name">Company name:</label>
                        <input type="text" name="company-name" class="textbox-small" value="<?php echo $company_name; ?>">
                    </div>
                    <div class="form-item">
                        <label for="company-url">Company url, if any:</label>
                        <input type="text" name="company-url" class="textbox-long" class="textbox-long" value="<?php echo $company_url; ?>">
                    </div>
                    <div class="form-item">
                        <label for="company-demo">If you have a demo, what's the url? Demo can be anything that shows us how the product works. Usually that's a video or screen recording.</label>
                        <input type="text" name="company-demo" class="textbox-long" value="<?php echo $company_demo; ?>">
                    </div>
                    <div class="form-item">
                        <label for="company-description">Describe what your company does in 50 characters or less.</label>
                        <input type="text" name="company-description" class="textbox-small" value="<?php echo $company_description; ?>">
                    </div>
                    <div class="form-item">
                        <label for="company-products">What is your company going to make? Please describe your product and what it does or will do</label>
                        <textarea name="company-products" cols="30" rows="5" class="" placeholder=""><?php echo $company_products; ?></textarea>
                    </div>
                    <div class="form-item">
                        <label for="company-currentlocation">Where do you live now, and where would the company be based after YC?</label>
                        <input type="text" name="company-currentlocation" class="textbox-long" placeholder="(List as City A, Country A / City B, Country B.)" value="<?php echo $company_currentlocation; ?>">
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
                        <input type="text" name="contact-email" class="textbox-long" placeholder="Please enter an email address that you check often " value="<?php echo $contact_email; ?>">
                    </div>
                    <div class="form-item">
                        <label for="contact-phone">Phone number(s):</label>
                        <input type="text" name="contact-phone" class="textbox-small" placeholder="" value="<?php echo $contact_phone; ?>">
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
                        <input type="text" name="founders-url" class="textbox-long" placeholder="http://" value="<?php echo $founders_url; ?>">
                    </div>
                    <div class="form-item">
                        <label for="founders-count">How many founders are on the team?</label>
                        <select name="founders-count" id="cars" style="width: 20%; height:30px;">
                            <option value="$founders_count"><?php echo $founders_count; ?></option>
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>

                        </select>
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
                        <select name="category-type" style="width: 20%; height:30px;" class="select-item">
                            <option value="<?php$category_type;?>"><?php echo $category_type; ?></option>
                            <option value=""></option>
                            <option value="Adtech">Adtech</option>
                            <option value="Aerospace">Aerospace</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Analytics">Analytics</option>
                            <option value="Augmented Reality">Augmented Reality</option>
                            <option value="Biotech">Biotech</option>
                            <option value="Community">Community</option>
                            <option value="Construction">Construction</option>
                            <option value="Continuing Education">Continuing Education</option>
                            <option value="Crypto / Blockchain">Crypto / Blockchain</option>
                            <option value="Developer Tools">Developer Tools</option>
                            <option value="E-Sports">E-Sports</option>
                            <option value="K-12">K-12</option>
                            <option value="Energy">Energy</option>
                            <option value="Entertainment">Entertainment</option>
                            <option value="Financial Services">Financial Services</option>
                            <option value="Fitness / Wellness">Fitness / Wellness</option>
                            <option value="Food/Beverage">Food/Beverage</option>
                            <option value="Freight">Freight</option>
                            <option value="Gaming">Gaming</option>
                            <option value="Government">Government</option>
                            <option value="Hard Tech">Hard Tech</option>
                            <option value="Hardware">Hardware</option>
                            <option value="Healthcare">Healthcare</option>
                            <option value="Insurence">Insurence</option>
                            <option value="Language Learning">Language Learning</option>
                            <option value="Lending / Loan Management">Lending / Loan Management</option>
                            <option value="Marketplace">Marketplace</option>
                            <option value="Media">Media</option>
                            <option value="Public Transportation">Public Transportation</option>
                            <option value="Retail">Retail</option>
                            <option value="Recruiting / Talent">Recruiting / Talent</option>
                            <option value="10">Robotics</option>
                            <option value="Security">Security</option>
                            <option value="Sourcing / recruiting">Sourcing / recruiting</option>
                            <option value="Transportation">Transportation</option>
                            <option value="Travel/Tourism">Travel/Tourism</option>
                            <option value="Virtual Reality">Virtual Reality</option>
                            <option value="Others">Others</option>


                        </select>
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
                        <textarea name="progress-faralong" cols="30" rows="5" class="" placeholder=""><?php echo $progress_faralong; ?></textarea>
                    </div>
                    <div class="form-item">
                        <label for="progress-working">How long have each of you been working on this? How much of that has been full-time? Please explain.</label>
                        <textarea name="progress-working" cols="30" rows="5" class="" placeholder=""><?php echo $progress_working; ?></textarea>
                    </div>
                    <div class="form-item">
                        <label for="progress-usingproduct">Are people using your product?</label>
                        <select name="progress-usingproduct" id="cars" style="width: 20%; height:30px;" class="select-item">
                            <option value="<?php $progress_usingproduct; ?>"><?php echo $progress_usingproduct; ?></option>
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="progress-revenue">Do you have revenue?</label>
                        <select name="progress-revenue" id="cars" style="width: 20%; height:30px;" class="select-item">
                            <option value="<?php $progress_usingproduct; ?>"><?php echo $progress_usingproduct; ?></option>
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="progress-change">If you are applying with the same idea as last batch, did anything change? If you applied with a different idea, why did you pivot and what did you learn from the last idea?</label>
                        <textarea name="progress-change" cols="30" rows="5" class="" placeholder=""><?php echo $progress_change; ?></textarea>
                    </div>
                    <div class="form-item">
                        <label for="progress-committed">If you have already participated or committed to participate in an incubator, "accelerator" or "pre-accelerator" program, please tell us about it.</label>
                        <textarea name="progress-committed" cols="30" rows="5" class="" placeholder=""><?php echo $progress_committed; ?></textarea>
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
                        <textarea name="idea-domainexpert" cols="30" rows="5" class="" placeholder=""><?php echo $idea_domainexpert; ?></textarea>
                    </div>
                    <div class="form-item">
                        <label for="idea-new">What's new about what you're making? What substitutes do people resort to because it doesn't exist yet (or they don't know about it)?</label>
                        <textarea name="idea-new" cols="30" rows="5" class="" placeholder=""><?php echo $idea_new; ?></textarea>
                    </div>
                    <div class="form-item">
                        <label for="idea-competitors">Who are your competitors, and who might become competitors? Who do you fear most?</label>
                        <textarea name="idea-competitors" cols="30" rows="5" class="" placeholder=""><?php echo $idea_competitors; ?></textarea>
                    </div>
                    <div class="form-item">
                        <label for="idea-understanding">What do you understand about your business that other companies in it just don't get?</label>
                        <textarea name="idea-understanding" cols="30" rows="5" class="" placeholder=""><?php echo $idea_understanding; ?></textarea>
                    </div>
                    <div class="form-item">
                        <label for="idea-makemoney">How do or will you make money? How much could you make?</label>
                        <textarea name="idea-makemoney" cols="30" rows="5" class="" placeholder=""><?php echo $idea_makemoney; ?></textarea>
                    </div>
                    <div class="form-item">
                        <label for="idea-users">How will you get users? If your idea is the type that faces a chicken-and-egg problem in the sense that it won't be attractive to users till it has a lot of users (e.g. a marketplace, a dating site, an ad network), how will you overcome that?</label>
                        <textarea name="idea-users" cols="30" rows="5" class="" placeholder=""><?php echo $idea_domainexpert; ?></textarea>
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
                        <select name="equity-legalentity" id="cars" style="width: 20%; height:30px;" class=" select-item">
                            <option value="<?php $equity_legalentity; ?>"><?php echo $equity_legalentity; ?></option>
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="equity-investment">Have you taken any investment yet?</label>
                        <select name="equity-investment" id="cars" style="width: 20%; height:30px;" class="select-item">
                            <option value="<?php $equity_investment; ?>"><?php echo $equity_investment; ?></option>
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="equity-plan">If you have not formed the company yet, describe the planned equity ownership breakdown among the founders, employees and any other proposed stockholders. If there are multiple founders, be sure to give the proposed equity ownership of each founder.</label>
                        <textarea name="equity-plan" cols="30" rows="5" class="" placeholder=""><?php echo $equity_plan; ?></textarea>
                    </div>
                    <div class="form-item">
                        <label for="equity-structure">Please provide any other relevant information about the structure or formation of the company.</label>
                        <textarea name="equity-structure" cols="30" rows="5" class="" placeholder=""><?php echo $equity_structure; ?></textarea>
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
                        <textarea name="legal-overlap" cols="30" rows="5" class="" placeholder=""><?php echo $legal_overlap; ?></textarea>
                    </div>
                    <div class="form-item">
                        <label for="legal-codes">Who writes code, or does other technical work on your product? Was any of it done by a non-founder? Please explain.</label>
                        <textarea name="legal-codes" cols="30" rows="5" class="" placeholder=""><?php echo $legal_codes; ?></textarea>
                    </div>
                    <div class="form-item">
                        <label for="legal-knowledge">Is there anything else we should know about your company?</label>
                        <textarea name="legal-knowledge" cols="30" rows="5" class="" placeholder=""><?php echo $legal_knowledge; ?></textarea>
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
                        <textarea name="others-ideas" cols="30" rows="5" class="" placeholder=""><?php echo $others_ideas; ?></textarea>
                    </div>
                    <div class="form-item">
                        <label for="others-surprising">Please tell us something surprising or amusing that one of you has discovered.</label>
                        <textarea name="others-surprising" cols="30" rows="5" class="" placeholder=""><?php echo $others_surprising; ?></textarea>
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
                        <textarea name="curious-apply" cols="30" rows="5" class="" placeholder=""><?php echo $curious_apply; ?></textarea>
                    </div>
                    <div class="form-item">
                        <label for="curious-hear">How did you hear about AIC-MFIE?</label>
                        <input type="text" name="curious-hear" class="textbox-small" value="<?php echo $curious_hear ?>">
                    </div>

                    <div class="" style="margin-left:25%; margin-top: 6%; margin-bottom: 0%; padding:auto; ">
                        <input name="update-application" type="submit" class="btn btn-class" value="update">
                    </div>
        </form>

        <?php




        if (isset($_POST['update-application'])) {





            $uUsername = $_SESSION['Username'];
            $uUsername = str_replace("'", "\'", "$uUsername");

            $ucompany_name = $_POST['company-name'];
            $ucompany_name = str_replace("'", "\'", "$ucompany_name");

            $ucompany_url = $_POST['company-url'];
            $ucompany_url = str_replace("'", "\'", "$ucompany_url");

            $ucompany_demo = $_POST['company-demo'];
            $ucompany_demo = str_replace("'", "\'", "$ucompany_demo");

            $ucompany_description = $_POST['company-description'];
            $ucompany_description = str_replace("'", "\'", "$ucompany_description");

            $ucompany_products = $_POST['company-products'];
            $ucompany_products = str_replace("'", "\'", "$ucompany_products");

            $ucompany_currentlocation = $_POST['company-currentlocation'];
            $ucompany_currentlocation = str_replace("'", "\'", "$ucompany_currentlocation");

            $ucontact_email = $_POST['contact-email'];
            $ucontact_email = str_replace("'", "\'", "$ucontact_email");

            $ucontact_phone = $_POST['contact-phone'];
            $ucontact_phone = str_replace("'", "\'", "$ucontact_phone");

            $ufounders_url = $_POST['founders-url'];
            $ufounders_url = str_replace("'", "\'", "$ufounders_url");

            $ufounders_count = $_POST['founders-count'];
            $ufounders_count = str_replace("'", "\'", "$ufounders_count");

            $ucategory_type = $_POST['category-type'];
            $ucategory_type = str_replace("'", "\'", "$ucategory_type");

            $uprogress_faralong = $_POST['progress-faralong'];
            $uprogress_faralong = str_replace("'", "\'", "$uprogress_faralong");

            $uprogress_working = $_POST['progress-working'];
            $uprogress_working = str_replace("'", "\'", "$uprogress_working");

            $uprogress_usingproduct = $_POST['progress-usingproduct'];
            $uprogress_usingproduct = str_replace("'", "\'", "$uprogress_usingproduct");

            $uprogress_revenue = $_POST['progress-revenue'];
            $uprogress_revenue = str_replace("'", "\'", "$uprogress_revenue");

            $uprogress_change = $_POST['progress-change'];
            $uprogress_change = str_replace("'", "\'", "$uprogress_change");

            $uprogress_committed = $_POST['progress-committed'];
            $uprogress_committed = str_replace("'", "\'", "$uprogress_committed");

            $uidea_domainexpert = $_POST['idea-domainexpert'];
            $uidea_domainexpert = str_replace("'", "\'", "$uidea_domainexpert");

            $uidea_new = $_POST['idea-new'];
            $uidea_new = str_replace("'", "\'", "$uidea_new");

            $uidea_competitors = $_POST['idea-competitors'];
            $uidea_competitors = str_replace("'", "\'", "$uidea_competitors");

            $uidea_understanding = $_POST['idea-understanding'];
            $uidea_understanding = str_replace("'", "\'", "$uidea_understanding");

            $uidea_makemoney = $_POST['idea-makemoney'];
            $uidea_makemoney = str_replace("'", "\'", "$uidea_makemoney");

            $uidea_users = $_POST['idea-users'];
            $uidea_users = str_replace("'", "\'", "$uidea_users");

            $uequity_legalentity = $_POST['equity-legalentity'];
            $uequity_legalentity = str_replace("'", "\'", "$uequity_legalentity");

            $uequity_investment = $_POST['equity-investment'];
            $uequity_investment = str_replace("'", "\'", "$uequity_investment");

            $uequity_plan = $_POST['equity-plan'];
            $uequity_plan = str_replace("'", "\'", "$uequity_plan");

            $uequity_structure = $_POST['equity-structure'];
            $uequity_structure = str_replace("'", "\'", "$uequity_structure");

            $ulegal_overlap = $_POST['legal-overlap'];
            $ulegal_overlap = str_replace("'", "\'", "$ulegal_overlap");

            $ulegal_codes = $_POST['legal-codes'];
            $ulegal_codes = str_replace("'", "\'", "$ulegal_codes");

            $ulegal_knowledge = $_POST['legal-knowledge'];
            $ulegal_knowledge = str_replace("'", "\'", "$ulegal_knowledge");

            $uothers_ideas = $_POST['others-ideas'];
            $uothers_ideas = str_replace("'", "\'", "$uothers_ideas");

            $uothers_surprising = $_POST['others-surprising'];
            $uothers_surprising = str_replace("'", "\'", "$uothers_surprising");

            $ucurious_apply = $_POST['curious-apply'];
            $ucurious_apply = str_replace("'", "\'", "$ucurious_apply");

            $ucurious_hear = $_POST['curious-hear'];
            $ucurious_hear = str_replace("'", "\'", "$ucurious_hear");







            $updatequery = "update application set company_url = '$ucompany_url', company_demo = '$ucompany_demo', company_description = '$ucompany_description', company_name = '$ucompany_name', company_products = '$ucompany_products',
            company_currentlocation = '$ucompany_currentlocation', contact_email = '$ucontact_email', contact_phone = '$ucontact_phone', founders_url = '$ufounders_url', founders_count = '$ufounders_count', category_type = '$ucategory_type', progress_faralong = '$uprogress_faralong', progress_working = '$uprogress_working', progress_usingproduc = '$uprogress_usingproduct',
            progress_revenue = '$uprogress_revenue',  progress_change = '$uprogress_change', progress_committed = '$uprogress_committed', idea_domainexpert = '$uidea_domainexpert', idea_new = '$uidea_new', idea_competitors = '$uidea_competitors', idea_understanding = '$uidea_understanding',
            idea_makemoney = '$uidea_makemoney', idea_users = '$uidea_users',  equity_legalentity = '$uequity_legalentity',  equity_investment ='$uequity_investment', equity_plan ='$uequity_plan', equity_structure = '$uequity_structure', legal_overlap = '$ulegal_overlap', legal_codes = '$ulegal_codes',
            legal_knowledge = '$ulegal_knowledge', others_ideas = '$uothers_ideas', others_surprising = '$uothers_surprising', curious_apply = '$ucurious_apply', curious_hear = '$ucurious_hear' Where Username = '$uUsername'";










            $iquery = mysqli_query($con, $updatequery);

            if ($iquery) {
                echo '<script type="text/javascript"> alert("your application has been updated")</script>';
                header('location:loginhome.php');
                echo 'code ran';
            } else {
                echo '<script type="text/javascript"> alert("error........")</script>';
                echo "error" . mysqli_error($con);
            }
        }





        ?>


    </div>


    </div>

    <div class="row1" class="row" style="margin-top: 6%; margin-bottom: 0%; padding:auto; ">
        <p style="font-weight: bold; padding-left: 9%; padding-right: 9%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quis corrupti, enim numquam mollitia .</p>
    </div>

</body>

</html>