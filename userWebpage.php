<?php include 'dependency.php';?>
<!DOCTYPE html>
<!--
This is the page that will be populated using php with the users data that has
been stored on our sql database. 
One page filled dynamically that millions of people can use. 
Each page will have a unique url that can be shared with anyone. To access the 
page all a person would have to do is enter the url in their browser. 
This page also is 100% responsive and works on all major browsers.
-->
<?php
    if ( $_SESSION['userID'] <= 0 ) {               
                session_destroy();
                header('Location: loginPage.php');
                exit;
            }
    logout::checkLogout();
    logout::confirmAccess();
    
    $userContent = new UserContent();
    $userSignin = new UserSignUp();
    $memberInfo = $userContent->read($_SESSION['userID']);
    $memberSignin = $userSignin->read($_SESSION['userID']);
    
?>
<html lang="en">
<head><!--{LOAD CSS & GOOGLE FONTS}######################################### -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/userThemeOne.css" rel="stylesheet" media="all">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
    <title>Home</title>
</head><!--{END CSS & GOOGLE FONTS}##########################################-->
<body>
    <div class="navbar navbar-inverse"><!--{NAVIGATION}##################### -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="index.php">get<i>N</i>OTICED</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="userEditPage.php">Edit Page</a></li>
                    <li><a href="#expModal" role="button" data-toggle="modal">Experience</a></li>
                    <li><a href="#aboutModal" role="button" data-toggle="modal">About</a></li>
                    <li><a href="#contactModal" role="button" data-toggle="modal">Contact</a></li>                    
                    <li><a href="?logout=1">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div><!--{END NAVIGATION}############################################## -->
    <div class="container"><!--{MAIN WRAPPER}############################### -->
        <div id="header"><!--{HEADER SECTION}############################### -->
            <div class="row">
                <div class="col-md-8 col-xs-12 col-sm-12">
                    <div class="nameAndTitle pull-left">
                        <h1 class="shadow"><?php echo $memberInfo['FirstName'] . ' ' . $memberInfo['LastName'] ?></h1>
                        <p><?php echo $memberInfo['JobTitle'] ?></p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-12">
                    <div class="socialIcons">
                        <ul><!-- php add user url to href="" -->
                            <a href="<?php echo $memberInfo['GitHub'] ?>"  title="<?php echo $memberInfo['GitHub'] ?>"><img src="img/t3Git.png" class="iconResponsive" width="65" height="65" alt=""></a>
                            <a href="<?php echo $memberInfo['LinkedIn'] ?>" title="<?php echo $memberInfo['LinkedIn'] ?>"><img src="img/t3Linked.png" class="iconResponsive" width="65" height="65" alt=""></a>
                            <a href="<?php echo $memberInfo['Facebook'] ?>" title="<?php echo $memberInfo['Facebook'] ?>"><img src="img/t3Facebook.png" class="iconResponsive" width="65" height="65" alt=""></a>
                        </ul> 
                    </div>
                </div>
            </div>
        </div><!--{END HEADER SECTION}###################################### -->
        <div id="innerContent"><!--{CONTENT SECTION}######################## -->
            <div class="row">
                <div class="col-md-4"><!-- experience section -->
                    <div class="experienceIcon img-responsive text-center">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <h2>Experience</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <a href="#expModal" role="button" data-toggle="modal"><img class="innerIcon" src="img/skills.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div><!-- end experience section -->
                <div class="col-md-4"><!-- about section -->
                    <div class="aboutIcon img-responsive text-center">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <h2>About</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <a href="#aboutModal" role="button" data-toggle="modal"><img class="innerIcon" src="img/Contact.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div><!-- end about modal -->
                <div class="col-md-4"><!-- contact section -->
                    <div class="contactIcon img-responsive text-center">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <h2>Contact</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <a href="#contactModal" role="button" data-toggle="modal"><img class="innerIcon" src="img/VoIP.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div><!-- end contact section -->
            </div>
        </div><!--{END CONTENT SECTION}##################################### -->
        <!--{MODAL'S}########################################################-->
        <div id="expModal" class="modal fade"><!-- exp modal -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Qualifications</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo "School Name: " . $memberInfo['SchoolName']
                                       . "<br />Degree Program: " . $memberInfo['DegreeProgram']
                                       . "<br />Degree Type: " . $memberInfo['DegreeType'] 
                                       . "<br />Enter Date: " . $memberInfo['DegreeStart']
                                       . "<br />Finish Date: " . $memberInfo['DegreeFinish']
                                       . "<br />Degree Detail: " . $memberInfo['DegreeDetail'] ?></h4>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo "Skills: <br />" . $memberInfo['Skill1']
                                        . ", ". $memberInfo['Skill2']
                                        . ", ". $memberInfo['Skill3']?></h4>
                            </div>
                            <div class="col-md-6">

                            </div>                                            
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo "Most Recent Position: " . $memberInfo['MostRecentJob']
                                        . "<br />Start Date: ". $memberInfo['StartDate']
                                        . "<br />End Date: ". $memberInfo['EndDate']
                                        . "<br />Job Responsibilities: ". $memberInfo['JobResp']?></h4>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                </div>                               
            </div>
        </div><!-- end exp modal -->
        <div id="aboutModal" class="modal fade"><!-- about modal -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><?php echo $memberInfo['FirstName'] . ' ' . $memberInfo['LastName'] ?></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo "Objective: <br />" . $memberInfo['Objective'] ?></h4>                                
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo "Summary: <br />" . $memberInfo['Summary'] ?></h4>
                            </div>
                            <div class="col-md-6">

                            </div>                                          
                        </div>                                       
                    </div>
                </div>                              
            </div>
        </div><!-- end about modal -->
        <div id="contactModal" class="modal fade"><!-- contact modal -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Contact Information</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo "Phone: " . $memberInfo['Phone'] ?></h4>
                            </div>
                            <div class="col-md-6">                                               
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo "Email: " . $memberSignin['Email'] ?></h4>
                            </div>
                            <div class="col-md-6">   
                            </div>  
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php echo "Address: " . $memberInfo['Address'] ?></h4>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                </div>                         
            </div>
        </div><!-- end contact modal -->
        <!--{ END MODAL'S}###################################################-->
    </div><!--{END MAIN WRAPPER}############################################ -->
    <div id="footer"><!--{FOOTER SECTION}################################### -->
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <div class="container">
                        <p class="label label-danger pull-right">&COPY; 2014 get<i>N</i>OTICED. All rights reserved</p>
                    </div>                    
                </div>
            </div>
    </div><!--{END FOOTER SECTION}########################################## -->
<!--{lOAD JAVASCRIPT}####################################################### -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>  
<!--{END JAVASCRIPT}######################################################## -->        
</body>
</html>
