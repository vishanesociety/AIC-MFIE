<?php
require 'dbconfig/config.php';
session_start();
ob_start();

if (isset($_SESSION['Username'])) {
} else {
    echo '<script type="text/javascript"> alert("login to continue")</script>';
    header('location:login.php');
}



if (isset($_POST['submit-application'])) {



    $Username = $_SESSION['Username'];


    $company_name = $_POST['company-name'];
    $company_name = str_replace("'", "\'", "$company_name");

    $company_url = $_POST['company-url'];
    $company_url = str_replace("'", "\'", "$company_url");

    $company_demo = $_POST['company-demo'];
    $company_demo = str_replace("'", "\'", "$company_demo");

    $company_description = $_POST['company-description'];
    $company_description = str_replace("'", "\'", "$company_description");

    $company_products = $_POST['company-products'];
    $company_products = str_replace("'", "\'", "$company_products");

    $company_currentlocation = $_POST['company-currentlocation'];
    $company_currentlocation = str_replace("'", "\'", "$company_currentlocation");

    $contact_email = $_POST['contact-email'];
    $contact_email = str_replace("'", "\'", "$contact_email");

    $contact_phone = $_POST['contact-phone'];
    $contact_phone = str_replace("'", "\'", "$contact_phone");

    $founders_url = $_POST['founders-url'];
    $founders_url = str_replace("'", "\'", "$founders_url");

    $founders_count = $_POST['founders-count'];
    $founders_count = str_replace("'", "\'", "$founders_count");

    $category_type = $_POST['category-type'];
    $category_type = str_replace("'", "\'", "$category_type");

    $progress_faralong = $_POST['progress-faralong'];
    $progress_faralong = str_replace("'", "\'", "$progress_faralong");

    $progress_working = $_POST['progress-working'];
    $progress_working = str_replace("'", "\'", "$progress_working");

    $progress_usingproduct = $_POST['progress-usingproduct'];
    $progress_usingproduct = str_replace("'", "\'", "$progress_usingproduct");

    $progress_revenue = $_POST['progress-revenue'];
    $progress_revenue = str_replace("'", "\'", "$progress_revenue");

    $progress_change = $_POST['progress-change'];
    $progress_change = str_replace("'", "\'", "$progress_change");

    $progress_committed = $_POST['progress-committed'];
    $progress_committed = str_replace("'", "\'", "$progress_committed");

    $idea_domainexpert = $_POST['idea-domainexpert'];
    $idea_domainexpert = str_replace("'", "\'", "$idea_domainexpert");

    $idea_new = $_POST['idea-new'];
    $idea_new = str_replace("'", "\'", "$idea_new");

    $idea_competitors = $_POST['idea-competitors'];
    $idea_competitors = str_replace("'", "\'", "$idea_competitors");

    $idea_understanding = $_POST['idea-understanding'];
    $idea_understanding = str_replace("'", "\'", "$idea_understanding");

    $idea_makemoney = $_POST['idea-makemoney'];
    $idea_makemoney = str_replace("'", "\'", "$idea_makemoney");

    $idea_users = $_POST['idea-users'];
    $idea_users = str_replace("'", "\'", "$idea_users");

    $equity_legalentity = $_POST['equity-legalentity'];
    $equity_legalentity = str_replace("'", "\'", "$equity_legalentity");

    $equity_investment = $_POST['equity-investment'];
    $equity_investment = str_replace("'", "\'", "$equity_investment");

    $equity_plan = $_POST['equity-plan'];
    $equity_plan = str_replace("'", "\'", "$equity_plan");

    $equity_structure = $_POST['equity-structure'];
    $equity_structure = str_replace("'", "\'", "$equity_structure");

    $legal_overlap = $_POST['legal-overlap'];
    $legal_overlap = str_replace("'", "\'", "$legal_overlap");

    $legal_codes = $_POST['legal-codes'];
    $legal_codes = str_replace("'", "\'", "$legal_codes");

    $legal_knowledge = $_POST['legal-knowledge'];
    $legal_knowledge = str_replace("'", "\'", "$legal_knowledge");

    $others_ideas = $_POST['others-ideas'];
    $others_ideas = str_replace("'", "\'", "$others_ideas");

    $others_surprising = $_POST['others-surprising'];
    $others_surprising = str_replace("'", "\'", "$others_surprising");

    $curious_apply = $_POST['curious-apply'];
    $curious_apply = str_replace("'", "\'", "$curious_apply");

    $curious_hear = $_POST['curious-hear'];
    $curious_hear = str_replace("'", "\'", "$curious_hear");



    $query = "insert into application values('$Username','$company_name','$company_url','$company_demo','$company_description','$company_products','$company_currentlocation','$contact_email','$contact_phone','$founders_url','$founders_count','$category_type','$progress_faralong','$progress_working','$progress_usingproduct','$progress_revenue','$progress_change','$progress_committed','$idea_domainexpert','$idea_new','$idea_competitors','$idea_understanding','$idea_makemoney','$idea_users','$equity_legalentity','$equity_investment','$equity_plan','$equity_structure','$legal_overlap','$legal_codes','$legal_knowledge','$others_ideas','$others_surprising','$curious_apply','$curious_hear')";





    $query_run = mysqli_query($con, $query);


    if ($query_run) {
        echo '<script type="text/javascript"> alert("application_submited")</script>';
        header('location:loginhome.php');
    } else {

        echo '<script type="text/javascript"> alert("error!!... try again")</script>';
        echo "error" . mysqli_error($con);
    }
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
                        <a class="nav-link" href="logout.php"><?php echo $_SESSION['Username'] ?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="color: #FF725E;">Logout</a>
                    </li>






                </ul>


            </div>
        </nav>



        <div style="text-align: center; margin-top: 10%;">
            <h1 style="color:#000000;margin:3%;font-weight:bolder; color:#277D8C; margin-top:15%;">Startup Application Form</h1>
        </div>






        <form action="editapplication.php" method="post">
            <div class="row" style="margin-top: 6%; margin-bottom:6%" ;>
                <div class="col-lg-3 col-sm-12 center-block text-center" style="display:grid; margin: auto; ">
                    <h3 style="background-color:  #FF725E; color: white; ">company</h3>
                </div>
                <div class="col-lg-9 col-sm-12 form-class" style="padding-left: 6%;">

                    <div class="form-item">
                        <label for="company-name">Company name:</label>
                        <input type="text" name="company-name" class="textbox-small" placeholder="">
                    </div>
                    <div class="form-item">
                        <label for="company-url">Company url, if any:</label>
                        <input type="text" name="company-url" class="textbox-long" class="textbox-long" placeholder="http://">
                    </div>
                    <div class="form-item">
                        <label for="company-demo">If you have a demo, what's the url? Demo can be anything that shows us how the product works. Usually that's a video or screen recording.</label>
                        <input type="text" name="company-demo" class="textbox-long" placeholder="http://">
                    </div>
                    <div class="form-item">
                        <label for="company-description">Describe what your company does in 50 characters or less.</label>
                        <input type="text" name="company-description" class="textbox-small">
                    </div>
                    <div class="form-item">
                        <label for="company-products">What is your company going to make? Please describe your product and what it does or will do</label>
                        <textarea name="company-products" cols="30" rows="5" class="" placeholder=""></textarea>
                    </div>
                    <div class="form-item">
                        <label for="company-currentlocation">Where do you live now, and where would the company be based after YC?</label>
                        <input type="text" name="company-currentlocation" class="textbox-long" placeholder="(List as City A, Country A / City B, Country B.)">
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
                        <input type="text" name="contact-email" class="textbox-long" placeholder="Please enter an email address that you check often ">
                    </div>
                    <div class="form-item">
                        <label for="contact-phone">Phone number(s):</label>
                        <input type="text" name="contact-phone" class="textbox-small" placeholder="">
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
                        <input type="text" name="founders-url" class="textbox-long" placeholder="http://">
                    </div>
                    <div class="form-item">
                        <label for="founders-count">How many founders are on the team?</label>
                        <select name="founders-count" id="cars" style="width: 20%; height:30px;">

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
                        <textarea name="progress-faralong" cols="30" rows="5" class="" placeholder=""></textarea>
                    </div>
                    <div class="form-item">
                        <label for="progress-working">How long have each of you been working on this? How much of that has been full-time? Please explain.</label>
                        <textarea name="progress-working" cols="30" rows="5" class="" placeholder=""></textarea>
                    </div>
                    <div class="form-item">
                        <label for="progress-usingproduct">Are people using your product?</label>
                        <select name="progress-usingproduct" style="width: 20%; height:30px;" class="select-item">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="progress-revenue">Do you have revenue?</label>
                        <select name="progress-revenue" id="cars" style="width: 20%; height:30px;" class="select-item">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="progress-change">If you are applying with the same idea as last batch, did anything change? If you applied with a different idea, why did you pivot and what did you learn from the last idea?</label>
                        <textarea name="progress-change" cols="30" rows="5" class="" placeholder=""></textarea>
                    </div>
                    <div class="form-item">
                        <label for="progress-committed">If you have already participated or committed to participate in an incubator, "accelerator" or "pre-accelerator" program, please tell us about it.</label>
                        <textarea name="progress-committed" cols="30" rows="5" class="" placeholder=""></textarea>
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
                        <textarea name="idea-domainexpert" cols="30" rows="5" class="" placeholder=""></textarea>
                    </div>
                    <div class="form-item">
                        <label for="idea-new">What's new about what you're making? What substitutes do people resort to because it doesn't exist yet (or they don't know about it)?</label>
                        <textarea name="idea-new" cols="30" rows="5" class="" placeholder=""></textarea>
                    </div>
                    <div class="form-item">
                        <label for="idea-competitors">Who are your competitors, and who might become competitors? Who do you fear most?</label>
                        <textarea name="idea-competitors" cols="30" rows="5" class="" placeholder=""></textarea>
                    </div>
                    <div class="form-item">
                        <label for="idea-understanding">What do you understand about your business that other companies in it just don't get?</label>
                        <textarea name="idea-understanding" cols="30" rows="5" class="" placeholder=""></textarea>
                    </div>
                    <div class="form-item">
                        <label for="idea-makemoney">How do or will you make money? How much could you make?</label>
                        <textarea name="idea-makemoney" cols="30" rows="5" class="" placeholder=""></textarea>
                    </div>
                    <div class="form-item">
                        <label for="idea-users">How will you get users? If your idea is the type that faces a chicken-and-egg problem in the sense that it won't be attractive to users till it has a lot of users (e.g. a marketplace, a dating site, an ad network), how will you overcome that?</label>
                        <textarea name="idea-users" cols="30" rows="5" class="" placeholder=""></textarea>
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
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="equity-investment">Have you taken any investment yet?</label>
                        <select name="equity-investment" id="cars" style="width: 20%; height:30px;" class="select-item">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="equity-plan">If you have not formed the company yet, describe the planned equity ownership breakdown among the founders, employees and any other proposed stockholders. If there are multiple founders, be sure to give the proposed equity ownership of each founder.</label>
                        <textarea name="equity-plan" cols="30" rows="5" class="" placeholder=""></textarea>
                    </div>
                    <div class="form-item">
                        <label for="equity-structure">Please provide any other relevant information about the structure or formation of the company.</label>
                        <textarea name="equity-structure" cols="30" rows="5" class="" placeholder=""></textarea>
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
                        <textarea name="legal-overlap" cols="30" rows="5" class="" placeholder=""></textarea>
                    </div>
                    <div class="form-item">
                        <label for="legal-codes">Who writes code, or does other technical work on your product? Was any of it done by a non-founder? Please explain.</label>
                        <textarea name="legal-codes" cols="30" rows="5" class="" placeholder=""></textarea>
                    </div>
                    <div class="form-item">
                        <label for="legal-knowledge">Is there anything else we should know about your company?</label>
                        <textarea name="legal-knowledge" cols="30" rows="5" class="" placeholder=""></textarea>
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
                        <textarea name="others-ideas" cols="30" rows="5" class="" placeholder=""></textarea>
                    </div>
                    <div class="form-item">
                        <label for="others-surprising">Please tell us something surprising or amusing that one of you has discovered.</label>
                        <textarea name="others-surprising" cols="30" rows="5" class="" placeholder=""></textarea>
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
                        <textarea name="curious-apply" cols="30" rows="5" class="" placeholder=""></textarea>
                    </div>
                    <div class="form-item">
                        <label for="curious-hear">How did you hear about AIC-MFIE?</label>
                        <input type="text" name="curious-hear" class="textbox-small">
                    </div>

                    <div class="" style="margin-left:25%; margin-top: 6%; margin-bottom: 0%; padding:auto; ">
                        <input name="submit-application" type="submit" class="btn btn-class" value="submit">
                    </div>

        </form>




    </div>



    </div>

    <div class="row1" class="row" style="margin-top: 6%; margin-bottom: 0%; padding:auto; ">
        <p style="font-weight: bold; padding-left: 9%; padding-right: 9%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quis corrupti, enim numquam mollitia .</p>
    </div>

</body>

</html>