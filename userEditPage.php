<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
David Landi
6/14
Final PHP Project
Admin Page
-->
<html lang="en">
<!--{LOAD CSS & GOOGLE FONTS}..................................................................................... -->    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/editPageStyle.css" rel="stylesheet" media="all">
        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <title>Edit Content</title>
    </head>
    <body> 
<!--{END CSS & GOOGLE FONTS}...................................................................................... -->

<!--{GLOBAL PHP}.................................................................................................. -->
        <?php

        ?>
<!--{END PHP}..................................................................................................... -->

<!--{MAIN NAVIGATION}............................................................................................. --> 
<!--
INFO

-->
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#mainNav">
                    <span class="sr-only">Toggle</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">get<i>N</i>OTICED</a>
            </div>
            <div id="mainNav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">                                                 
                    <li><a href="signupPage.php">Inspiration</a></li>
                    <li><a href="signupPage.php">Help</a></li> 
                </ul>
            </div>                  
            </div>              
        </nav>
<!--{End NAVIGATION CONTAINER}.................................................................................... -->

<!--{INNER CONTAINER}............................................................................................. -->
        <div class="container"><!--{Main Wrapper}-->
            <div class="jumbotron text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title">get<i>N</i>OTICED</h1>
                        <p>Just fill in the required fields, click publish and your personal web portfolio will be instantly created!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="progress progress-striped active">
                            <div id="pBar" class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                                
                            </div>
                            
                        </div>
                        <p class="label label-warning text-center" id="pbText"></p>
                    </div>
                </div>
            </div>
            <form class="frmLogin center-block">
                <div id="screen1"><!--{1st form}-->
                    <div class="frmHeader text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Select a theme</h2>
                            </div>
                        </div>
                        <hr/>
                    </div>
                    <div class="frmCore">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="thumbnail center-block">
                                    <img class="img-responsive" src="http://placehold.it/250x250" alt="">
                                    <div class="caption">
                                        <h3>Theme 1</h3>
                                        <p>Created by David Landi</p>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="radio">
                                        </span>
                                        <input type="text" class="form-control" id="theme1">
                                    </div>
                                </div>                              
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail center-block">
                                    <img class="img-responsive" src="http://placehold.it/250x250" alt="">
                                    <div class="caption">
                                        <h3>Theme 2</h3>
                                        <p>Created by Justin Barreira</p>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="radio">
                                        </span>
                                        <input type="text" class="form-control" id="theme2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail center-block">
                                    <img class="img-responsive" src="http://placehold.it/250x250" alt="">
                                    <div class="caption">
                                        <h3>Theme 3</h3>
                                        <p>Created by Terri Gaskell</p>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="radio">
                                        </span>
                                        <input type="text" class="form-control" id="theme2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="frmFooter">
                    <div class="row">
                        <div class="col-md-offset-9 col-md-3">                   
                            <a href="#"><div class="btn1 btn btn-success center-block">Next Section</a></div>                           
                        </div>
                    </div>
                </div>  
                </div><!--{end 1st form}-->
                <div id="screen2"><!--{2nd form}-->
                    <div class="frmHeader text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Contact Information</h2>
                            </div>
                        </div>
                        <hr/>
                    </div>
                    <div class="frmCore">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First & Last Name" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Job Title" required="true">                   
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone Number" required="true">                   
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" required="true">                   
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City" required="true">                   
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="State" required="true">                   
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                
                            </div>
                        </div>
                    </div>
                <div class="frmFooter">
                    <div class="row">
                        <div class="col-md-offset-9 col-md-3">                   
                            <a href="#"><div class="btn2 btn btn-success center-block">Next Section</a></div>                            
                        </div>
                    </div>
                </div>  
                </div><!--{end 2nd form}-->
                <div id="screen3"><!--{3rd form}-->
                    <div class="frmHeader text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Social Media</h2>
                            </div>
                        </div>
                        <hr/>
                    </div>
                    <div class="frmCore">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="thumbnail center-block">
                                    <img class="img-responsive" src="http://placehold.it/250x250" alt="">
                                    <div class="caption">
                                        <h3>GitHub</h3>
                                        <p>A great place to show off your work</p>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="radio">
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Url" id="gitHub">
                                    </div>
                                </div>                              
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail center-block">
                                    <img class="img-responsive" src="http://placehold.it/250x250" alt="">
                                    <div class="caption">
                                        <h3>Facebook</h3>
                                        <p>Be sure not to have content that you wouldnt want a employer to see</p>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="radio">
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Url" id="faceBook">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="thumbnail center-block">
                                    <img class="img-responsive" src="http://placehold.it/250x250" alt="">
                                    <div class="caption">
                                        <h3>LinkedIn</h3>
                                        <p>A great place to network and display qualifications</p>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <input type="radio">
                                        </span>
                                        <input type="text" class="form-control" placeholder="Enter Url" id="linkedIn">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="frmFooter">
                    <div class="row">
                        <div class="col-md-offset-9 col-md-3">                   
                            <a href="#"><div class="btn3 btn btn-success center-block">Next Section</a></div>                           
                        </div>
                    </div>
                </div>  
                </div><!--{end 3rd form}-->
                <div id="screen4"><!--{4th form}-->
                    <div class="frmHeader text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Qualifications</h2>
                            </div>
                        </div>
                        <hr/>
                    </div>
                    <div class="frmCore">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Skill One" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Skill Two" required="true">                   
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Skill Three" required="true">                   
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Most recent job title" required="true">                   
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="start date & end date " required="true">                   
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Breifly describe your job responsibilites" row="3" required="true"></textarea>                   
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <p>With in this section please enter your top 3 skills and most resent position.<br>
                                    We recommend entering content that relates to the type of position you are looking for.</p>
                            </div>
                        </div>
                    </div>
                <div class="frmFooter">
                    <div class="row">
                        <div class="col-md-offset-9 col-md-3">                   
                            <a href="#"><div class="btn4 btn btn-success center-block">Next Section</a></div>                           
                        </div>
                    </div>
                </div>  
                </div><!--{end 4th form}-->
                <div id="screen5"><!--{5th form}-->
                    <div class="frmHeader text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Summary & Objective</h2>
                            </div>
                        </div>
                        <hr/>
                    </div>
                    <div class="frmCore">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Objective" row="3" required="true"></textarea>                   
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Summary" row="3" required="true"></textarea>                   
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <p>With in the summary section provide a brief description about your professional background.<br>
                                   If you are still in school and have little experience this would be a good section for you to highlight 
                                   why you believe that you are a good candidate for any potential company's that may be viewing your webpage.</p>
                                <p>With in the objective section provide a brief explanation about the type of position you are looking for.</p>
                                <p>Please limit your text with in the Responsibilities section to 150 characters.</p>
                            </div>
                        </div>
                    </div>                 
                <div class="frmFooter">
                    <div class="row">
                        <div class="col-md-offset-9 col-md-3">
                            
                            <a href="#"><div class="btn5 btn btn-success center-block">Next Section</a>                        
                        </div>
                        </div>
                    </div>
                </div>  
                </div><!--{end 5th form}-->
                <div id="screen6"><!--{6th form}-->
                    <div class="frmHeader text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Education</h2>
                            </div>
                        </div>
                        <hr/>
                    </div>
                    <div class="frmCore">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="School Name" required="true">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Degree Program" required="true">                   
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Degree Type" required="true">                   
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Date of Attendence" required="true">                   
                                </div>
                                
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Additional Detail" row="3" required="true"></textarea>                   
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                
                                <p>Enter your education information.<br>
                                   With in the additional detail section you can enter major projects you have completed, 
                                   classes that you have taken, or you can leave it blank.<br>
                                   Please limit your text with in the Responsibilities section to 150 characters.</p>
                            </div>
                        </div>
                    </div>                 
                <div class="frmFooter">
                    <div class="row">
                        <div class="col-md-offset-9 col-md-3">                   
                            <a href="#"><div class="btn6 btn btn-success center-block">Next Section</a></div>                          
                        </div>
                    </div>
                </div>  
                </div><!--{end 6th form}-->
                <div id="screen7">
                    <div class="frmHeader text-center">
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Publish</h2>
                            </div>
                        </div>
                        <hr/>
                    </div>
                    <div class="frmCore">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                
                                <p>Enter your education information.<br>
                                   With in the additional detail section you can enter major projects you have completed, 
                                   classes that you have taken, or you can leave it blank.<br>
                                   Please limit your text with in the Responsibilities section to 150 characters.</p>
                            </div>
                        </div>
                    </div>                 
                <div class="frmFooter">
                    <div class="row">
                        <div class="col-md-offset-9 col-md-3">                   
                            <a href="#"><div class="btn7 btn btn-success center-block">Back</a></div>                          
                        </div>
                    </div>
                </div>
                </div>
            </form> 
        </div><!--{End Main Wrapper}-->
<!--{END INNER CONTAINER}......................................................................................... -->

<!--{lOAD JAVASCRIPT}............................................................................................. -->
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script> 
        <script src="js/landi.js"></script> 
        <script src="js/formSlider.js"></script>
<!--{END JAVASCRIPT}.............................................................................................. -->        
    </body>
</html>
