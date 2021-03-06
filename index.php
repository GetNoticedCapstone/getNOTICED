<!DOCTYPE html>
<!--
Designed developed and managed by David landi, Terri Gaskell, and Justin Barreira.
2014 NEIT Capstone Project
-->
<html lang="en">  
<head><!--{LOAD CSS & GOOGLE FONTS}######################################### -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/indexStyle.css" rel="stylesheet"media="all">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>      
    <title>getNOTICED</title>
</head><!--{END CSS & GOOGLE FONTS}##########################################-->
<body>          
    <div class="header"><!--{NAVIGATION}#####################################-->
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand scrollTop"><span class="glyphicon glyphicon-home"></span> get<i>N</i>OTICED</a>
                </div>
                <div id="mainNav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">                           
                        <li><a href="#" class="gnScroll" data-id="about">About</a></li>
                        <li><a href="#" class="gnScroll" data-id="team">Team</a></li>
                        <li><a href="#" class="gnScroll" data-id="contact">Contact</a></li>
                        <li><a href="signupPage.php">Sign up</a></li>
                        <li><a href="loginPage.php">Login</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div><!--{END NAVIGATION}############################################## -->
        <div id="landing" class="contentSection"><!--{Landing section}#######-->
            <div class="container text-center landSection">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">get<i>N</i>OTICED</h1>
                        <p class="introText">Create your own single page mobile friendly web portfolio to help set you apart from other candidates.</p>
                        <p><a class="btn btnStarted  btn-success" href="signupPage.php">Get Started!</a></p>
                        <a href="#" class="btn btnCircle gnScroll" data-id="about">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div><!--{end landing section}######################################-->        
        <div id="about" class="contentSection"><!--{about section}###########-->
            <div class="container aboutSection">
                <div class="row">
                    <div id="screen1" class="co-md-12">
                        <div class="transAboutBox center-block img-responsive aboutFontSize">
                            <h2>About</h2>
                            <p>
                            Here at GetNOTICED 
                            we believe that paper resumes are a thing of the past and that a web based portfolios are the 
                            future. No more worrying about your resume getting lost on a potential employer’s desk. Sign 
                            up today and take charge of your career by providing employers with a centralized location 
                            where all of your qualification will easily be accessible with a simple mouse click. GetNOTICED 
                            today.
                            </p>                                                                     
                            <h2>Design and functionality</h2>
                            <p>
                            Our entire web based saas application incorporates responsive design making it mobile friendly 
                            on all devises. In order to accomplish this we will be using the Twitter Bootstrap framework which 
                            has the development philosophy of mobile first design, emphasizing responsive design by default. This 
                            framework will allow us to rapidly develop our application because it offers a robust set of css classes 
                            that can be easily modified to fit our style and it incorporates a column and row structure which is easy 
                            to understand and easy to implement throughout out our entire site. Every page of this site will be 
                            developed and designed by our team, no templates, no huge sections of copy & pasted code, so we feel 
                            strongly that you will not find another site that functions or looks like ours. 
                            During the development of our application we will be be focusing on creating a user friendly 
                            application that looks great and performs even better. Custom javaScript & PHP solutions will be 
                            developed to make the features we are looking to have in our application work. Some of these features 
                            are content filtering, Image Verification, signal page scrolling effects, form validation, and content 
                            sliders. We also will be developing a database that will do more than just store data. While developing 
                            this database our focus will be on creating features for a admin to get all the statics and data they will 
                            need as efficiently as possible. Successful implementation of the features, design and a useful database 
                            that have been specified will result a great product.
                            </p>                                             
                            <h2>PHP Summary</h2>
                            <p>
                            The visual aesthetics of the front-end will be the first thing the user see’s and we will be
                            focused on making that an appealing sight. But the visually inviting and responsive front-end needs an 
                            efficient back-end to really make it a web application the user will want to continually return to use. 
                            When designing the php for the getNOTICED application, efficient and effective code will be the main 
                            goal. We will be using object oriented programming methodologies to make this happen. Each part of 
                            the interaction with the server-side database will be divided up into smaller tasks. These tasks will have 
                            one purpose and keep the code simple and easy to understand.By using object oriented programming, the application will be easy to maintain and ensure it 
                            provides a good user experience. Chunking out each piece of the application will make it easier to 
                            expand by creating new themes, designs and features for the user. Each part of the php will be designed 
                            specifically for the getNOTICED web application guaranteeing it fits into and works how it’s supposed
                            to.
                            </p>
                            <h2>Sql Summary</h2>
                            <p>
                            We will be utilizing MySql for the database. The database will be in third normal form with
                            primary and foreign keys to establish relationships within the database. This will be based upon the 
                            established EER diagram.
                            </p>                       
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div id="slideShow" class="carousel carouselSize center-block">
                            <ol class="carousel-indicators">
                                <li data-target="#slideShow" data-slide-to = "1"></li>
                                <li data-target="#slideShow" data-slide-to = "2"></li>
                                <li data-target="#slideShow" data-slide-to = "3"></li>
                            </ol>
                            <center>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="img/themeOnePic.jpg" alt="" class="img-responsive carouselSize ">
                                    </div>
                                    <div class="item">
                                        <img src="img/theme2.jpg" alt="" class="img-responsive carouselSize">
                                    </div>
                                    <div class="item">
                                        <img src="img/theme3.jpg" alt="" class="img-responsive carouselSize">
                                    </div>
                                </div>
                            </center>
                            <a class="carousel-control left" href="#slideShow" data-slide="prev">
                            <span class="icon-prev"></span></a>
                            <a class="carousel-control right" href="#slideShow" data-slide="next"> 
                            <span class="icon-next"></span></a>
                        </div>
                       
                        
                        <a href="#" class="btn btnCircle gnScroll center-block rdHide" data-id="team">
                            <i class="fa fa-angle-double-down animated rdHide "></i>
                        </a>
                    </div>
                </div>            
            </div>
        </div><!--{about section}############################################-->     
        <div id="team" class="contentSection"><!--{team section}#############-->
            <div class="container teamSection">
                <div class="row">
                    <div class="col-md-4 col-lg-4"><!--{justin bio}-->
                        <div class="img-responsive center-block extSpaceTop">
                            <img src="img/justin1.png" width="300" height="300" alt="" class="img-circle img-responsive imgSize">
                        </div>
                        <div class="captionBox text-center">
                            <h2 class="captionTitle">Justin Barreira</h2>
                            <h4 class="captionTitle">Lead PHP Developer</h4>
                            <p class="text-justify">
                                As the lead PHP developer for this project, Justin's main responsibility was to
                                ensure the successful development and implementation of the PHP solution that makes 
                                this product work. The PHP solution needed for this project is pretty complex, but 
                                Justin worked it out and deserves allot of credit for making this application actually work. 
                            </p>
                            
                        </div>                        
                    </div><!--{end justin bio}-->
                    <div class="col-md-4 col-lg-4"><!--{terry bio}-->
                        <div class="img-responsive center-block extSpaceTop">
                            <img src="img/terri.png" alt="" width="298" height="298" class="img-circle img-responsive imgSize">
                        </div>
                        <div class="captionBox text-center img-responsive adjSize">
                            <h2 class="captionTitle">Terri Gaskell</h2>
                            <h4 class="captionTitle">Project Manager & sql Developer</h4>                               
                            <p class="text-justify">
                                As the lead sql developer for this project, Terri was responsible for the
                                development of the sql database needed for our application.  Along with the 
                                development of the database she also created administrative tools for the admin page 
                                that allow a admin to manage the data contained within our application. 
                            </p>
                            
                        </div>                       
                    </div><!--{end terry bio}-->
                    <div class="col-md-4 col-lg-4 extSpaceTop"><!--{david bio}-->
                        <div class="img-responsive center-block">
                            <img src="img/david1.jpg" width="300" height="300" alt="" class="img-circle img-responsive imgSize">
                        </div>
                        <div class="captionBox text-center img-responsive">
                            <h2 class="captionTitle">David Landi</h2>
                            <h4 class="captionTitle">Lead Front-End Developer</h4>
                            <p class="text-justify">
                                As the lead Front-End developer for this project, David was responsible for the overall
                                design and functionality of our web application. This included the HTML, Javascript and Css 
                                development needed for this project to be mobile friendly, user friendly and visually appealing.
                                He devoted a great deal of time designing something that looks great and utilizes modern web development. 
                            </p>                         
                        </div>                        
                    </div><!--{end david bio}-->
                </div><!--{end row}-->
                <a href="#" class="btn btnCircle gnScroll center-block rdHide" data-id="contact">
                    <i class="fa fa-angle-double-down animated rdHide"></i>
                </a>
            </div><!--{end container}-->
        </div><!--{end team section}#########################################-->
        <div id="contact" class="contentSection"><!--{contact section}#######-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="img-responsive captionBox center-block ctBxTop">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="img/contactUS.jpg" alt="" class="img-circle img-responsive ctImgSize">
                                </div>
                                <div class="col-md-6">
                                    <h1 class="text-center contactText">Contact Information</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row">                       
                        <div class="col-md-12">
                            <div class="img-responsive captionBox ctBxSize center-block">
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <h2 class="ciSize">David Landi</h2>                                       
                                        <p>
                                            <a href="https://github.com/davidlandi" target="_blank" title=""><img src="img/githubIcon.png" alt="" title="gitHub" class="ghSize"></a>
                                            <a href="https://linkedin.com/pub/david-landi/51/838/b4b/" target="_blank" title=""><img src="img/linkedinIcon.png" alt="" title="LinkedIn" class="liSize"></a>
                                        </p>
                                        
                                        <h2 class="ciSize">Terri Gaskell</h2>
                                        
                                        <p>
                                            <a href="https://github.com/JustinBarreira" target="_blank" title=""><img src="img/githubIcon.png" alt="" title="gitHub" class="ghSize"></a>
                                            <a href="#" target="_blank" title=""><img src="img/linkedinIcon.png" alt="" title="LinkedIn" class="liSize"></a>
                                        </p>
                                        <h2 class="ciSize">Justin Barreira</h2>
                                        
                                        <p>
                                            <a href="https://github.com/TGaskell" target="_blank" title=""><img src="img/githubIcon.png" alt="" title="gitHub" class="ghSize"></a>
                                            <img src="img/linkedinIcon.png" alt="" title="LinkedIn" class="liSize">
                                        </p>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                              
                                        <div id="googleMap">
                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                <hr/>
                <div class="row">
                    <div class="col-md-12">
                        <footer>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <p class="ftLeftText">
                                        <span class="ftTitle">School Information</span><br/>
                                        New England Tech<br/>
                                       AS, Software Engineering<br/>
                                        Capstone Project 2014
                                    </p>
                                </div>
                                 <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                     <p class="ftMidText">
                                         <span class="ftTitle">Technical Resources</span><br/>
                                         <a href="http://getbootstrap.com/components/">Twitter Bootstrap Framework</a><br/>
                                         <a href="http://php.net/">php</a><br/>
                                         <a href="http://www.w3schools.com/js/">JavaScript</a>  
                                     </p>
                                </div>                               
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <p class="copyRight ftRightText">&COPY; 2014 get<i>N</i>OTICED. All rights reserved</p>
                                </div>                             
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div><!--{contact about section}####################################-->  
<!--{lOAD JAVASCRIPT}########################################################-->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="js/bootstrap.js"></script> 
<script src="js/pageScroll.js"></script>
<script src="js/googleMaps.js"></script>

<!--{END JAVASCRIPT}#########################################################-->        
</body>
</html>
