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
<head><!--{LOAD CSS & GOOGLE FONTS}##########################################-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/adminStyle.css" rel="stylesheet" media="all">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>getNOTICED</title>
</head>
<body><!--{END CSS & GOOGLE FONTS}###########################################-->
<?php
/* {Global PHP}############################################################## */
/* {End Global PHP}########################################################## */    
?>
    <nav class="navbar navbar-inverse" role="navigation"><!--{NAVIGATION}####-->
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
                <li><a href="adminDashboard.php"><span class="glyphicon glyphicon-home"></span> Dashboard </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-wrench"></span> Admin Tools <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-table fa-fw"></i>Tables</a></li>
                        <li><a href="#"><i class="fa fa-edit fa-fw"></i> Forms</a></li>
                    </ul>
                </li>
                <li><a href="signupPage.php">Logout</a></li>
            </ul>
        </div>                  
        </div>              
    </nav><!--{END NAVIGATION}###############################################-->
    <div class="container"><!--{MAIN WRAPPER}################################-->
        <!--{Section contains 2 rows 3 panels per row}-->
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="panel panelPictonBlue">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-9">
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                    
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="panel panelShamrock">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9">
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                    
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="panel panelRed">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-trash-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9">
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="panel panelLightningYello">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9">
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                    
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="panel panelOrange">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                
                            </div>
                            <div class="col-xs-9">
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                    
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="panel panelStudio">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                
                            </div>
                            <div class="col-xs-9">
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                    
                    </div>
                </div>
            </div>
        </div>
    </div><!--{END MAIN WRAPPER}#############################################-->
<!--{lOAD JAVASCRIPT}########################################################-->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.js"></script> 
<script src="js/pageScroll.js"></script>
<!--{END JAVASCRIPT}#########################################################-->        
</body>
</html>
