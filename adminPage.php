<?php include 'dependency.php'; ?>

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

//    if ( $_SESSION['AdminID'] <= 0 ) {               
//                    session_destroy();
//                    header('Location: loginPage.php');
//                    exit;
//                }
//        logout::checkLogout();
//        logout::confirmAccess();
        
        $tables = new AdminTables();

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
                <li><a href="adminPage.php"><span class="glyphicon glyphicon-home"></span> Dashboard </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-wrench"></span> Admin Tools <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#tableListModal" role="button" data-toggle="modal"><i class="fa fa-table fa-fw"></i>Tables</a></li>
                        <li><a href="#"><i class="fa fa-edit fa-fw"></i>Forms</a></li>
                    </ul>
                </li>
                <li><a href="?logout=1">Log Out</a></li>
            </ul>
        </div>                  
        </div>              
    </nav><!--{END NAVIGATION}###############################################-->
    <div class="container "><!--{MAIN WRAPPER}###############################-->
        <div class="centerAll clearfix ">
        <!--{Section contains 2 rows 3 panels per row}-->
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="panel panelPictonBlue"><!--{new members}-->
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-9">
                                <div class="counter text-center">                                     
                                    <h1>
                                        <?php
                                        $countNew = $tables->countNewMembers();
                                        echo $countNew;
                                        ?> 
                                    </h1>                                                                 
                                </div>
                                <div class="boxTitle text-center">
                                    <p>New Members</p>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="#newMemberModal" role="button" data-toggle="modal">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--{end new members}-->
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="panel panelShamrock "><!--{Active members}-->
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9">
                                <div class="counter text-center">                                     
                                    <h1>
                                        <?php
                                            $countActive = $tables->countActiveMembers();
                                            echo $countActive;
                                        ?> 
                                    </h1>
                                 </div>
                                <div class="boxTitle text-center">
                                    <p>Active Members</p>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="#activeMemberModal" role="button" data-toggle="modal">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--{end Active members}-->
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="panel panelRed"><!--{Canceled members}-->
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-trash-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9">
                                <div class="counter text-center">                                     
                                    <h1>
                                        <?php
                                            $countCanceled = $tables->countCanceledMembers();
                                            echo $countCanceled;
                                        ?>
                                    </h1>
                                </div>
                                <div class="boxTitle text-center">
                                    <p>Canceled Members</p>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="#canceledMemberModal" role="button" data-toggle="modal">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--{end Canceled members}-->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="panel panelLightningYello marginTop"><!--{Registered Admins}-->
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9">
                                <div class="counter text-center">                                     
                                    <h1>
                                        <?php
                                            $countAdmin = $tables->countAdminMembers();
                                            echo $countAdmin;
                                        ?>
                                    </h1>                                                                 
                                </div>
                                <div class="boxTitle text-center">
                                    <p>Registered Admins</p>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="#registerdAdminModal" role="button" data-toggle="modal">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--{End Registered Admins}-->
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="panel panelOrange marginTop"><!--{member dates}-->
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                              <i class="fa fa-support fa-5x"></i>  
                            </div>
                            <div class="col-xs-9">
                                <div class="counter text-center">                                     
                                <h1>&nbsp </h1>
                                 </div>
                                <div class="boxTitle text-center">
                                   <p>Member Dates</p>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="#memberDatesModal" role="button" data-toggle="modal">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--{End member dates}-->
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="panel panelStudio marginTop"><!--{future use}-->
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                
                            </div>
                            <div class="col-xs-9">
                                <div class="counter text-center">                                     
                                    <h1>&nbsp</h1>
                                    <?php //enter php code here ?>                                                                  
                                </div>
                                <div class="boxTitle text-center">
                                    <p>Future Use</p>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-center">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--{future use}-->
            </div>
        </div>
        </div>
    </div><!--{END MAIN WRAPPER}#############################################-->
<!--{MODAL'S}################################################################-->
<div id="newMemberModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">New Members</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                            $tableNewMembers = $tables->newMemberTable();
                            echo $tableNewMembers;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="activeMemberModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">Active Members</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                            $tableActiveMembers = $tables->activeMemberTable();
                            echo $tableActiveMembers;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="canceledMemberModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">Canceled Members</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                    <?php 
                        $tableCanceledMembers = $tables->canceledMemberTable();
                        echo $tableCanceledMembers;
                    ?>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="registerdAdminModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">Registered Admins</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                     <?php 
                        $tableAdmin = $tables->adminTable();
                        echo $tableAdmin;
                    ?>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="memberDatesModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">Member Dates</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                    <?php 
                        $tableMemberDates = $tables->memberDatesTable();
                        echo $tableMemberDates;
                    ?>     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="tableListModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">Tables</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                    <?php    
                      $tableList = $tables->tableList();
                        echo $tableList;
                     ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="futureUseModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3 class="modal-title">Coming Soon</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--{END MODAL'S}############################################################-->
<!--{lOAD JAVASCRIPT}########################################################-->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.js"></script> 
<script src="js/pageScroll.js"></script>
<!--{END JAVASCRIPT}#########################################################-->        
</body>
</html>
