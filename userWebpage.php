<!DOCTYPE html>
<!--
This is the page that will be populated using php with the users data that has
been stored on our sql database. 
One page filled dynamically that millions of people can use. 
Each page will have a unique url that can be shared with anyone. To access the 
page all a person would have to do is enter the url in their browser. 
This page also is 100% responsive and works on all major browsers.
-->
<html lang="en">
<!--{LOAD CSS & GOOGLE FONTS}............................................... -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/userThemeOne.css" rel="stylesheet" media="all">
        <link href='http://fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Limelight' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
        <title>Home</title>
    </head>
    <body>
<!--{END CSS & GOOGLE FONTS}................................................ -->
        
<!--{GLOBAL PHP}............................................................ -->
    <?php
        // put your code here
    ?>
<!--{END PHP}............................................................... -->

<!--{NAVIGATION}............................................................ -->
        <div class="navbar navbar-inverse ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">get<i>N</i>OTICED</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Experience</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
<!--{End NAVIGATION}........................................................ -->

<!--{MAIN CONTENT}.......................................................... -->
        <div class="container"><!-- main wrapper -->
            <div class="header"><!-- header wrapper -->
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="nameFont">Your Name</h1>
                        <p class="titleFont">Your Title</p>
                    </div>
                    <div class="col-md-4">
                        <div class="social">
                            <img src="img/github.png" alt="" class="pLeft">
                            <img src="img/linkedin.png" alt="" class="">
                            <img src="img/facebook.png" alt="" class="">
                        </div>
                    </div>
                </div>
            </div><!-- end header wrapper -->
            <div class="container innerCore"><!-- inner content wrapper -->
                <div class="row">
                    <div class="col-md-4"><!-- exp section -->
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
                    </div><!-- end exp section -->
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
                </div><!--{end contact section}-->
                </div>
                
            </div><!-- end inner content wrapper -->
        </div><!-- end main wrapper -->
        <div class="footer"><!--{FOOTER SECTION}-->
            <p class="text-center footerText"> &copy; get<i>N</i>OTICED all rights reserved</p>  
        </div><!--{END FOOTER SECTION}-->

<!--{END MAIN CONTENT}...................................................... -->

<!--{lOAD JAVASCRIPT}....................................................... -->
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>  
<!--{END JAVASCRIPT}........................................................ -->        
    </body>
</html>
