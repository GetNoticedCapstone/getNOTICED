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
        <link href="css/loginStyle.css" rel="stylesheet" media="all">
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <title>get<i>N</i>OTICED</title>
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
                    <a href="index.php" class="navbar-brand scrollTop">get<i>N</i>OTICED</a>
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
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <h1 class="text-center login-title">Welcome back!</h1>
                    <div class="account-wall">
                        <img class="profile-img" src="img/user-icon.png" alt="">
                        <form class="form-signin">
                            <input type="text" class="form-control" placeholder="Email" required="true" autofocus="true">
                            <input type="password" class="form-control" placeholder="Password" required="true">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                            <label class="checkbox pull-left">
                                <input type="checkbox" value="remember-me">Remember me</label>
                                <button class="text-center toggle pull-right">Create an account</button>
                        </form>                      
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="signup" hidden="true">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <h1 class="text-center login-title">Create your account!</h1>
                    <div class="account-wall">
                        <img class="profile-img" src="img/user-icon.png" alt="">
                        <form class="form-signin">
                            <input type="text" class="form-control" placeholder="Name" required="true" autofocus="true">
                            <input type="text" class="form-control" placeholder="Website" required="true">
                            <input type="email" class="form-control" placeholder="Email" required="true">
                            <input type="password" class="form-control" placeholder="Password" required="true">                            
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                            <label class="checkbox pull-left">
                            <input type="checkbox" value="remember-me">Remember me</label>
                            <button class="text-center toggle pull-right">Sign into existing account</button>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
<!--{END MAIN CONTENT}...................................................... -->

<!--{lOAD JAVASCRIPT}....................................................... -->
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script> 
        <script src="js/loginSwitch.js"></script>
<!--{END JAVASCRIPT}........................................................ -->        
    </body>
</html>



