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
        <link href="css/indexStyle.css" rel="stylesheet" media="all">
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
        <title>getNOTICED</title>
    </head>
    <body>
<!--{END CSS & GOOGLE FONTS}................................................ -->

<!--{GLOBAL PHP}............................................................ -->
        <?php
            
        ?>
<!--{End PHP}............................................................... -->

<!--{Main Navigation}....................................................... -->          
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
                            <span class="sr-only">Toggle</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand scrollTop">get<i>N</i>OTICED</a>
                    </div>
                    <div id="mainNav" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">                           
                            <li><a href="#" class="gnScroll" data-id="about">About</a></li>
                            <li><a href="#" class="gnScroll" data-id="team">Team</a></li>
                            <li><a href="#" class="gnScroll" data-id="contact">Contact</a></li>
                            <li><a href="#" class="gnScroll">Sign up</a></li>
                            <li><a href="#" class="gnScroll">Login</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
<!--{END NAVIGATION}........................................................ -->

<!--{MAIN CONTENT}.......................................................... -->
        <div id="landing" class="contentSection"><!--{Landing section}-->
            <div class="container text-center landSection">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">get<i>N</i>OTICED</h1>
                        <p class="introText">Create your own signal page mobile friendly web portfolio to help set you apart from other candidates.</p>
                        <p><a class="btn btnStarted  btn-success" href="signUp.php">Get Started!</a></p>
                        <a href="#" class="btn btnCircle gnScroll" data-id="about">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div><!--{end landing section}-->
        
        <div id="about" class="contentSection"><!--{about section}-->
            <div class="container aboutSection">
                <div class="row">
                    <div class="co-md-12">
                        <div class="transAboutBox center-block img-responsive">
                            <h2>About</h2>
                            <p>
                            Here at GetNOTICED 
                            we believe that paper resumes are a thing of the past and that a web based portfolios are the 
                            future. No more worrying about your resume getting lost on a potential employer’s desk. Sign 
                            up today and take charge of your career by providing employers with a centralized location 
                            where all of your qualification will easily be accessible with a simple mouse click. GetNOTICED 
                            today.
                            </p>
                            <p><a class="btn btnNext btn-success" href="#">Next Page</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div id="slideShow" class="carousel carouselSize">
                            <ol class="carousel-indicators">
                                <li data-target="#slideShow" data-slide-to = "1"></li>
                                <li data-target="#slideShow" data-slide-to = "2"></li>
                                <li data-target="#slideShow" data-slide-to = "3"></li>
                            </ol>
                            <center>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="img/theme1.png" alt="" class="img-responsive carouselSize ">
                                    </div>
                                    <div class="item">
                                        <img src="img/theme2.png" alt="" class="img-responsive carouselSize">
                                    </div>
                                    <div class="item">
                                        <img src="img/theme3.png" alt="" class="img-responsive carouselSize">
                                    </div>
                                </div>
                            </center>
                            <a class="carousel-control left" href="#slideShow" data-slide="prev">
                            <span class="icon-prev"></span></a>
                            <a class="carousel-control right" href="#slideShow" data-slide="next"> 
                            <span class="icon-next"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--{about section}-->
        
        <div id="team" class="contentSection"><!--{team section}-->
            <div class="container teamSection">
                <div class="row">
                    <div class="col-md-4 col-lg-4 extSpaceTop"><!--{justin bio}-->
                        <div class="center-block">
                            <img src="img/justin1.png" alt="" class="img-circle img-responsive">
                            <div class="captionBox text-center">
                                <h2 class="captionTitle">Justin Barreira</h2>
                                <h4 class="captionTitle">Lead PHP Developer</h4>
                                <p class="text-justify">As the lead PHP developer for this project, Justin's main responsibility was to
                                ensure the successful implementation of the driving force behind our sass application.
                                Some of the actions taken to accomplish this were to implement a design pattern, conduct 
                                PHP code reviews before any code was moved to production, and invested a solid amount of time
                                to research new ways to approve upon our PHP code. 
                                </p>
                                <br><br>
                            </div>                        
                        </div>
                    </div><!--{end justin bio}-->
                    <div class="col-md-4 col-lg-4 extSpaceTop"><!--{terry bio}-->
                        <div class="img-responsive center-block">
                            <img src="img/justin1.png" alt="" class="img-circle img-responsive">
                            <div class="captionBox text-center img-responsive">
                                <h2 class="captionTitle">Terri Gaskell</h2>
                                <h4 class="captionTitle">Project Manager & sql Developer</h4>
                                
                                <p class="text-justify">
                                As the Project Manager and lead sql developer for this project, Terri was responsible for
                                keeping the team on track in order to meet our deadlines and was also responsible for the
                                development of the sql database needed for our sass application. Terri implemented a number
                                of processes to both keep the team organized and create a culture where communication and 
                                collaboration were maintained at high levels throughout the project. 
                                </p>
                                <br>
                            </div> 
                        </div>
                    </div><!--{end terry bio}-->
                    <div class="col-md-4 col-lg-4 extSpaceTop"><!--{david bio}-->
                        <div class="img-responsive center-block">
                            <img src="img/david1.jpg" alt="" class="img-circle img-responsive">
                            <div class="captionBox text-center img-responsive">
                                <h2 class="captionTitle">David Landi</h2>
                                <h4 class="captionTitle">Lead Front-End Developer</h4>
                                <p class="text-justify">
                                As the lead Front-End developer for this project, David was responsible for the overall
                                design and functionality our web based sass application. Some of the actions taken to 
                                accomplish this were to conduct HTML, CSS, and javascript code reviews before any code 
                                was moved to production, utilized the Twitter Bootstrap framework, and focused on designing 
                                a customer centric application in order to ensure our product is easy on the eye and easy for
                                anyone to use.
                                </p>
                                <br>
                            </div> 
                        </div>
                    </div><!--{end david bio}-->
                </div><!--{end row}-->
            </div><!--{end container}-->
        </div><!--{end team section}-->
        <div id="contact" class="contentSection"><!--{contact section}-->
    
        </div><!--{contact about section}-->   
<!--{END MAIN CONTENT}........................................................... -->

<!--{lOAD JAVASCRIPT}....................................................... -->
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script> 
        <script src="js/pageScroll.js"></script>
<!--{END JAVASCRIPT}........................................................ -->        
    </body>
</html>
