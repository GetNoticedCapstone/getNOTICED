<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
This is the main page where users can add and edit personal info that will build their sites
-->
<html lang="en">
<head><!--{LOAD CSS & GOOGLE FONTS}##########################################-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/editPageStyle.css" rel="stylesheet" media="all">
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <title>Edit Content</title>
</head><!--{END CSS & GOOGLE FONTS}##########################################-->
<body> 
<?php
/* {Global PHP}############################################################## */
var_dump($_SESSION['userID']);
$userContent = new UserContent();
$userSignIn = new UserSignUp();
$userInfo = $userContent->read($_SESSION['userID']);
$signinInfo = $userSignIn->read($_SESSION['userID']);

if ( Util::isPostRequest() ) {

$userContentModel = new UserContentModel(filter_input_array(INPUT_POST));
$userContentModel->memberID = $_SESSION['userID'];

    if ( null !== $_SESSION['userID'] && $userContent->updateMember($userContentModel) ) {
        echo '<p>Member Updated</p>';
        Util::redirect('userWebpage');
    } else {
        echo '<p>User could not be updated</p>';
    }
}
/* {End Global PHP}########################################################## */
?>
    <nav class="navbar navbar-inverse" role="navigation"><!--{NAVIGATION}### -->
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
                <li><a href="userWebpage.php">View Page</a></li>
                <li><a href="signupPage.php">Inspiration</a></li>
                <li><a href="signupPage.php">Help</a></li> 
            </ul>
        </div>                  
        </div>              
    </nav><!--{END NAVIGATION}############################################## -->
    <div class="container centerAll"><!--{MAIN WRAPPER}##################### -->
        <div class="page-header text-center">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title">get<i>N</i>OTICED</h1>

                    <p class="mes">Just fill in the required fields, click publish and your personal web portfolio will be instantly created.</p>
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
        <form class="frmLogin center-block" method="post">
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
                                    <input id="theme" name="theme" type="text" class="form-control">
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
                                    <input type="text" class="form-control">
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
                                    <input type="text" class="form-control">
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
                                <input id="firstName" name="firstName" type="text" class="form-control" placeholder="First Name" value="<?php echo $userInfo['FirstName'] ?>">
                            </div>
                            <div class="form-group">
                                <input id="lastName" name="lastName" type="text" class="form-control" placeholder="Last Name" value="<?php echo $userInfo['LastName'] ?>">                   
                            </div>
                            <div class="form-group">
                                <input id="jobTitle" name="jobTitle" type="text" class="form-control" placeholder="Job Title" value="<?php echo $userInfo['JobTitle'] ?>">                   
                            </div>
                            <div class="form-group">
                                <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone Number" value="<?php echo $userInfo['Phone'] ?>">                   
                            </div>
                            <div class="form-group">
                                <input id="adress" name="address" type="text" class="form-control" placeholder="Address" value="<?php echo $userInfo['Address'] ?>">                   
                            </div>
                            <div class="form-group">
                                <input id="city" name="city" type="text" class="form-control" placeholder="City" value="<?php echo $userInfo['City'] ?>">                   
                            </div>
                            <div class="form-group">
                                <input id="state" name="state" type="text" class="form-control" placeholder="State" value="<?php echo $userInfo['State'] ?>">                   
                            </div>
                            <div class="form-group">
                                <input id="zip" name="zip" type="text" class="form-control" placeholder="Zip" value="<?php echo $userInfo['Zip'] ?>">                   
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
                                    <input id="gitHub" name="gitHub" type="text" class="form-control" placeholder="Enter Url" value="<?php echo $userInfo['GitHub'] ?>">
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
                                    <input id="facebook" name="facebook" type="text" class="form-control" placeholder="Enter Url" value="<?php echo $userInfo['Facebook'] ?>">
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
                                    <input id="linkedIn" name="linkedIn" type="text" class="form-control" placeholder="Enter Url" value="<?php echo $userInfo['LinkedIn'] ?>">
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
                                <input id="skill1" name="skill1" type="text" class="form-control" placeholder="Skill One" value="<?php echo $userInfo['Skill1'] ?>">
                            </div>
                            <div class="form-group">
                                <input id="skill2" name="skill2" type="text" class="form-control" placeholder="Skill Two" value="<?php echo $userInfo['Skill2'] ?>">                   
                            </div>
                            <div class="form-group">
                                <input id="skill3" name="skill3" type="text" class="form-control" placeholder="Skill Three" value="<?php echo $userInfo['Skill3'] ?>">                   
                            </div>
                            <div class="form-group">
                                <input id="mostRecentJob" name="mostRecentJob" type="text" class="form-control" placeholder="Most recent job title" value="<?php echo $userInfo['MostRecentJob'] ?>">                   
                            </div>
                            <div class="form-group">
                                <input id="startDate" name="startDate" type="text" class="form-control" placeholder="Start Date" value="<?php echo $userInfo['StartDate'] ?>">                   
                            </div>
                            <div class="form-group">
                                <input id="endDate" name="endDate" type="text" class="form-control" placeholder="End Date" value="<?php echo $userInfo['EndDate'] ?>">                   
                            </div>
                            <div class="form-group">
                                <input id="jobResponsibilities" name="jobResponsibilities" class="form-control" placeholder="Breifly describe your job responsibilites" value="<?php echo $userInfo['JobResponsibilities'] ?>">                 
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
                                <input id="objective" name="objective" class="form-control" placeholder="Objective" value="<?php echo $userInfo['Objective'] ?>">                 
                            </div>
                            <div class="form-group">
                                <input id="summary" name="summary" class="form-control" placeholder="Summary" value="<?php echo $userInfo['Summary'] ?>">                 
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
                                <input id="schoolName" name="schoolName" type="text" class="form-control" placeholder="School Name" value="<?php echo $userInfo['SchoolName'] ?>">
                            </div>
                            <div class="form-group">
                                <input id="degreeProgram" name="degreeProgram" type="text" class="form-control" placeholder="Degree Program" value="<?php echo $userInfo['DegreeProgram'] ?>">                   
                            </div>
                            <div class="form-group">
                                <input id="degreeType" name="degreeType" type="text" class="form-control" placeholder="Degree Type" value="<?php echo $userInfo['DegreeType'] ?>">                   
                            </div>
                            <div class="form-group">
                                <input id="enterDate" name="enterDate" type="text" class="form-control" placeholder="Enter Date of Attendence" value="<?php echo $userInfo['EnterDate'] ?>">                   
                            </div>                                
                            <div class="form-group">
                                <input id="additionalDetail" name="additionalDetail" class="form-control" placeholder="Additional Detail" value="<?php echo $userInfo['AdditionalDetail'] ?>">                  
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
                        <button class="btn btn-primary btn-block" type="submit" value="Submit">Submit</button>
                        <a href="#"><div class="btn7 btn btn-success center-block">Back</a></div>                          
                    </div>
                </div>
            </div>
            </div>
        </form> 
    </div><!--{MAIN WRAPPER}################################################ -->
<!--{lOAD JAVASCRIPT}####################################################### -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.js"></script> 
<script src="js/landi.js"></script> 
<script src="js/formSlider.js"></script>
<!--{END JAVASCRIPT}######################################################## -->        
</body>
</html>