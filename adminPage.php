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
    //connection string to open database
    $db = new PDO(Config::DB_DNS, Config::DB_USER, Config::DB_PASSWORD);
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
                        <li><a href="#"><i class="fa fa-table fa-fw"></i>Tables</a></li>
                        <li><a href="#"><i class="fa fa-edit fa-fw"></i> Forms</a></li>
                    </ul>
                </li>
                <li><a href="signupPage.php">Logout</a></li>
            </ul>
        </div>                  
        </div>              
    </nav><!--{END NAVIGATION}###############################################-->
    <div class="container "><!--{MAIN WRAPPER}################################-->
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
                                            $dbnm = $db->prepare
                                                ('select * from memberstatus where StatusCode = "A" and DateNew = CURDATE()');
                                            $dbnm->execute();
                                            $resultsnm = $dbnm->rowCount();
                                            print_r($resultsnm);
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
                                <a href="#">View Details</a>
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
                                            $dbnm = $db->prepare
                                                ('select * from memberstatus where StatusCode = "A"');
                                            $dbnm->execute();
                                            $resultsnm = $dbnm->rowCount();
                                            print_r($resultsnm);
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
                                <a href="#">View Details</a>
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
                                            $dbnm = $db->prepare
                                                ('select * from memberstatus where StatusCode = "C"');
                                            $dbnm->execute();
                                            $resultsnm = $dbnm->rowCount();
                                            print_r($resultsnm);
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
                                <a href="#">View Details</a>
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
                                            $dbnm = $db->prepare
                                                ('select * from admin');
                                            $dbnm->execute();
                                            $resultsnm = $dbnm->rowCount();
                                            print_r($resultsnm);
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
                                <a href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--{End Registered Admins}-->
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="panel panelOrange marginTop"><!--{new members}-->
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                
                            </div>
                            <div class="col-xs-9">
                                <div class="counter text-center">                                     
                                    <h1>1</h1>
                                    <?php#print_r($resultsnm);?>                                                                  
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
                                <a href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--{new members}-->
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="panel panelStudio marginTop"><!--{new members}-->
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                
                            </div>
                            <div class="col-xs-9">
                                <div class="counter text-center">                                     
                                    <h1>1</h1>
                                    <?php#print_r($resultsnm);?>                                                                  
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
                                <a href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                </div><!--{new members}-->
            </div>
        </div>
        </div>
    </div><!--{END MAIN WRAPPER}#############################################-->
<?php
    //close the database
    $db = null;
?>
    
<!--{TABLES}#################################################################-->
<!-- Active Members Table -->
<?php        
    $activeMembers = new AdminTables();
    $activeMemberResults = $activeMembers->readActiveMembers();
?>        
<div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">Active Members</div>
        <!-- Table Data -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Website</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            foreach ($activeMemberResults as $key => $value) {
                               
                                 echo '<td>', $key ,'</td>';
                                 echo '<td>', $value['FirstName'] ,'</td>';
                                 echo '<td>', $value['LastName'] ,'</td>';
                                 echo '<td>', $value['City'] ,'</td>';
                                 echo '<td>', $value['State'] ,'</td>';          
                                 echo '<td>', $value['WebsiteURL'] ,'</td>';
                                 echo '<td>', $value['PrimaryPhone'] ,'</td>';
                                 //echo '<td><a href="updateaddress.php?id=', $value['id'] ,'">Edit</a> </td>';         
                                 //echo '<td><form name="mainform" action="updateaddress.php" method="get"><input name="id" type="hidden" value="', $value['id'] ,'" /><input type="submit" value="Edit" /></form> </td>';     
                            }
                        ?>
                 </tbody>
                </table>
            </div>
            <!--table-responsive -->
            
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>

<!-- New Members Table -->
<?php        
    $newMembers = new AdminTables();
    $newMemberResults = $newMembers->readNewMembers();
?>        
<div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">New Members</div>
        <!-- Table Data -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date New</th>
                            <th>Website</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            foreach ($newMemberResults as $key => $value) {
                               
                                 echo '<td>', $key ,'</td>';
                                 echo '<td>', $value['FirstName'] ,'</td>';
                                 echo '<td>', $value['LastName'] ,'</td>';
                                 echo '<td>', $value['DateNew'] ,'</td>';
                                 echo '<td>', $value['WebsiteURL'] ,'</td>';
                                 echo '<td>', $value['PrimaryPhone'] ,'</td>';
                                 //echo '<td><a href="updateaddress.php?id=', $value['id'] ,'">Edit</a> </td>';         
                                 //echo '<td><form name="mainform" action="updateaddress.php" method="get"><input name="id" type="hidden" value="', $value['id'] ,'" /><input type="submit" value="Edit" /></form> </td>';     
                            }
                        ?>
                 </tbody>
                </table>
            </div>
            <!--table-responsive -->
            
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!--{END TABLES}#################################################################-->

<!--{lOAD JAVASCRIPT}########################################################-->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.js"></script> 
<script src="js/pageScroll.js"></script>
<!--{END JAVASCRIPT}#########################################################-->        
</body>
</html>
