<!DOCTYPE html>
<!--
The admin page will be access by users who have a flag setup in the sql
database that identifies them as admins. To get to the page a admin will click
on the sign in link in the navagation bar and enter in their login info just as a 
regular user would. If the login info matches a admin in our database the user 
will be redirected to adminPage.php.
This page will have tools such basic querys to view signup stats, member signup
dates. It will also offer access to the database to allow a admin to modify a 
customers data if they are having issues.
-->
<html lang="en">
<!--{LOAD CSS & GOOGLE FONTS}............................................... -->    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/adminStyle.css" rel="stylesheet" media="all">
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
  
<!--{END MAIN CONTENT}...................................................... -->

<!--{lOAD JAVASCRIPT}....................................................... -->
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script> 
        <script src="js/pageScroll.js"></script>
<!--{END JAVASCRIPT}........................................................ -->        
    </body>
</html>
