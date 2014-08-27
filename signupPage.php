<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="en">
<!--{LOAD CSS & GOOGLE FONTS}............................................... -->    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/loginSignupStyle.css" rel="stylesheet" media="all">
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <title>getNOTICED</title>
    </head>
    <body>
<!--{END CSS & GOOGLE FONTS}................................................ -->

<!--{GLOBAL PHP}............................................................ -->
    <?php
        
        $member = new UserSignUp();  
         
         if ( Util::isPostRequest() ) {
             
              $memberModel = new UserSignUpModel(filter_input_array(INPUT_POST));
              $_SESSION['userID'] = $member->createMember($memberModel);
              
              if ( null !== $_SESSION['userID'] ) {  
                  $_SESSION['login'] = true;
                  echo '<p>User Created</p>';
                  //Util::redirect('userWebpage');
              } else {
                  echo '<p>User could not be created</p>';
              }
          }
          
    ?>
<!--{End PHP}............................................................... -->

<!--{Main Navigation}....................................................... -->          
 
        
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
                    <li><a href="loginPage.php">login</a></li>
                    <li><a href="signupPage.php">Help</a></li> 
                </ul>
            </div>                  
            </div>              
        </nav>
<!--{END NAVIGATION}........................................................ -->

<!--{MAIN CONTENT}.......................................................... -->
        <div class="container"><!--{main wrapper}-->
            <form class="frmLogin center-block" method="post">
                <div class="frmHeader">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="profile-img" src="img/signUp_img.png" alt="">
                        </div>
                        <div class="col-md-6">
                            <h2 class="text-center">Free Membership</h2>
                        </div>
                    </div>
                    <hr/>
                </div>
                <div class="frmCore">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input id="email" type="email" name="email" class="form-control" placeholder="Email" required="true">
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" name="password" class="form-control" placeholder="Password" required="true">                   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="frmFooter">
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">Submit</button>                 
                            <a class="btn btn-lg btn-primary btn-block" href="loginPage.php">Already a member?</a> 
                        </div>
                    </div>
                </div>            
            </form>
        </div><!--{end main wrapper}-->
<!--{END MAIN CONTENT}...................................................... -->

<!--{lOAD JAVASCRIPT}....................................................... -->
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>         
<!--{END JAVASCRIPT}........................................................ -->  
    </body>
</html>