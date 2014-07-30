<!DOCTYPE html>
<!--
Designed developed and managed by David landi, Terri Gaskell, and Justin Barreira.
2014 NEIT Capstone Project
-->
<html lang="en">
<!--{LOAD CSS & GOOGLE FONTS}............................................... -->    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/getNOTICED.css" rel="stylesheet" media="all">
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
        <title>Home</title>
    </head>
    <body>
<!--{END CSS & GOOGLE FONTS}................................................ -->

<!--{GLOBAL PHP}............................................................ -->
        <?php
            
        ?>
<!--{End PHP}............................................................... -->

<!--{Main Navigation}....................................................... -->          
        <div class="navbar navbar-inverse ">
            <div class="container">
                <div class="navbar-header">
                    <!-- When screen size in mobile nav becomes one btn with dropdown -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Portfolio Builder</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
<!--{End NAVIGATION}........................................................ -->

<!--{MAIN CONTENT}.......................................................... -->
        <div class="container shadow colorWhite">
            <div class="jumbotron text-center shadow marginTop logoSubFont">
                <h1 class="logoFont">DL Web Portfolio Builder</h1>
                <h3>Create your own signal page web portfolio to help set you apart from other candidates.</h3>
                <p>SignUp, Customize and Submit. 3 easy steps and your done.</p><br>
                <p><a class="btn  btn-success" href="signUp.php">Get Started!</a></p>
            </div>
            <div class="container mainFont"><!-- Start step1 container -->
                <div class="row">
                    <div class="col-md-6 col-xs-12 pull-left">
                        <h1 class="labelFont">Step 1</h1>
                        <p> Sign up.  Fill in the required form information including the name for your portfolio 
                            which will also be the name used for the domain if available.</p>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <a href="#">
                            <img src="img/signup-icon.png" alt="" class="img-responsive center-block imageIcon">
                        </a>
                    </div>
                </div>
                <hr>
            </div><!-- end step1 container -->
            <div class="container mainFont"><!-- start step2 container -->
                <div class="row">
                    <div class="col-md-6 col-xs-12 pull-left">
                        <h2 class="labelFont">Step 2</h2>
                        <p>Select from one of the 3 three available themes and then fill out the 
                           specified information.</p>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <!-- Slide Show -->
                        <div id="slideShow" class="carousel padR">
                            <ol class="carousel-indicators">
                                <li data-target="#slideShow" data-slide-to = "1"></li>
                                <li data-target="#slideShow" data-slide-to = "2"></li>
                                <li data-target="#slideShow" data-slide-to = "3"></li>
                            </ol>
                            <center>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="img/Theme1.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="img/Theme2.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="img/theme3.png" alt="" class="img-responsive">
                                    </div>
                                </div>
                            </center>
                            <a class="carousel-control left" href="#slideShow" data-slide="prev">
                            <span class="icon-prev"></span></a>
                            <a class="carousel-control right" href="#slideShow" data-slide="next"> 
                            <span class="icon-next"></span></a>
                        </div>
                        <!-- End Slide Show -->
                    </div>
                </div>
                <hr>
            </div><!-- end step2 container -->
            <div class="container mainFont"><!-- Start step3 container -->
                <div class="row">
                    <div class="col-md-6 col-xs-12 pull-left">
                        <h2 class="labelFont">Step 3</h2>
                        <p>After picking your theme and fill out all required sections just hit the submit button and your mobile 
                           friendly web portfolio will be instantly created.</p>
                        <p>You will be able to change your theme or the content of the page at any time in needed.</p>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <img src="img/success.png" alt="" class="img-responsive center-block">
                    </div>
                </div>
                <hr>
            </div><!-- end step3 container --> 
            <div class="container">
                <div class="row">
                    
                </div>
            </div>
            <div class="container text-center ">
                <div class="row marginBtm pull-left">
                    <div class="col-md-4 col-xs-12">
                        <h3><span class="label label-primary">Developer</span></h3>
                        <p>
                            David Landi<br/>
                            djlandi@email.neit.edu
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <h3><span class="label label-primary">Credits</span></h3>
                        <p>
                           <a href="http://getbootstrap.com/">Bootstrap Framework</a><br/>
                           <a href="http://www.html5rocks.com/en/">HTML5 Resource</a><br/>
                           <a href="http://www.php.net/">PHP Resource</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <h3><span class="label label-primary">About</span></h3>
                        <p>
                           This is a SaaS application that was developed for a final project for my PHP class at NEIT. 
                        </p>
                    </div>
                </div>
            </div>
        </div><!-- end Main Container -->       
<!--{END CONTENT}........................................................... -->

<!--{lOAD JAVASCRIPT}....................................................... -->
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script> 
        <script src="js/landi.js"></script>
<!--{END JAVASCRIPT}........................................................ -->        
    </body>
</html>
