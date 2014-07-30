<!DOCTYPE html>
<!--
David Landi
5/14
Final PHP Project
Users Page
-->
<html lang="en">
<!--{LOAD CSS & GOOGLE FONTS}..................................................................................... -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/userThemeThree.css" rel="stylesheet" media="all">
        <link href='http://fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Limelight' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
        <title>Home</title>
    </head>
    <body>
<!--{END CSS & GOOGLE FONTS}...................................................................................... -->
        
<!--{GLOBAL PHP}.................................................................................................. -->
<!--
INFO

-->
        <?php
        // put your code here
        ?>
<!--{END PHP}..................................................................................................... -->

<!--{NAVIGATION CONTAINER}........................................................................................ -->
<!--
INFO

-->
        <div class="navbar navbar-inverse ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Portfolio Builder</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Experience</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
<!--{End NAVIGATION CONTAINER}.................................................................................... -->

<!--{INNER CONTAINER}............................................................................................. -->
<!--
INFO

-->
        <div class="container">
            <div class="row"><!--{HEADER SECTION}-->
                <div class="col-md-8 ">
                    <h1 class="nameFont">Your Name</h1>
                    <p class="titleFont">Your Title</p>
                </div>
                <div class="col-md-4 tPad">
                    <img src="img/github.png" alt="" class="pLeft ingrave">
                    <img src="img/linkedin.png" alt="" class="ingrave">
                    <img src="img/facebook.png" alt="" class="ingrave">
                </div>                
            </div><!--{END HEADER SECTION}-->
            <div class="row margTop"><!--{INNER CONTENT}-->
                <div class="col-md-4 "><!--{EXPERIENCE SECTION}-->
                    <div class="box img-responsive text-center tPad">
                        <h2 class="boxLable">EXPERIENCE</h2>
                        <a href="#expModal" role="button" data-toggle="modal"><img class="" src="img/skills.png" alt=""></a>
                        <div id="expModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Qualifications</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Education</h4>
                                            </div>
                                            <div class="col-md-6">
                                                
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Skills</h4>
                                            </div>
                                            <div class="col-md-6">
                                                
                                            </div>                                            
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Related Work History</h4>
                                            </div>
                                            <div class="col-md-6">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div><!--{END EXPERIENCE SECTION}-->
                <div class="col-md-4"><!--{ABOUT SECTION}-->
                    <div class="box img-responsive text-center tPad">
                        <h2 class="boxLable">ABOUT</h2>
                        <a href="#aboutModal" role="button" data-toggle="modal"><img class="" src="img/Contact.png" alt=""></a>
                        <div id="aboutModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Your Name</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>contact info</h4>
                                                <?php echo $email;?>
                                                <?php echo $address;?>
                                                <?php echo $phone;?>
                                                <?php echo $content; ?>
                                            </div>
                                            <div class="col-md-6">
                                                
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Objective</h4>
                                            </div>
                                            <div class="col-md-6">
                                                
                                            </div>                                          
                                        </div>                                       
                                    </div>
                                </div>                              
                            </div>
                        </div>                        
                    </div>
                </div><!--{END ABOUT SECTION}-->
                <div class="col-md-4"><!--{CONTACT SECTION}-->
                    <div class="box img-responsive text-center tPad">
                        <h2 class="boxLable">CONTACT</h2>
                        <a href="#contactModal" role="button" data-toggle="modal"><img class="" src="img/VoIP.png" alt=""></a>
                        <div id="contactModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Contact Information</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Phone</h4>
                                            </div>
                                            <div class="col-md-6">                                               
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Email</h4>
                                            </div>
                                            <div class="col-md-6">   
                                            </div>  
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4>Address</h4>
                                            </div>
                                            <div class="col-md-6">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>                         
                            </div>
                        </div>
                    </div>
                </div><!--{END CONTACT SECTION}-->
            </div><!--{END INNER CONTENT}-->
            <div class="row"><!--{FOOTER SECTION}-->
                <div class="col-md-12">
                    <p class="text-center footer">Created by DL WebPortfolio Builder</p>
                </div>
            </div><!--{END FOOTER SECTION}-->
        </div>
<!--{END INNER CONTAINER}.......................................................................................... -->

<!--{lOAD JAVASCRIPT}.............................................................................................. -->
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script> 
        <script src="js/landi.js"></script> 
<!--{END JAVASCRIPT}............................................................................................... -->        
    </body>
</html>
