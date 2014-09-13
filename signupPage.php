<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
Signup page. on user submit check db to make sure username is not taken.  If 
new user then create new record, and redirect to userContent page 
-->

<html lang="en">    
<head><!--{LOAD CSS & GOOGLE FONTS}##########################################-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/loginSignupStyle.css" rel="stylesheet" media="all">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
    <title>getNOTICED</title>
</head><!--{END CSS & GOOGLE FONTS}##########################################-->
<body>
<?php  
/* {Global PHP}############################################################## */
$member = new UserSignUp();  

 if ( Util::isPostRequest() ) {
      
      $memberModel = new UserSignUpModel(filter_input_array(INPUT_POST));
      $_SESSION['MemberID'] = $member->createSignIn($memberModel);
      var_dump($_SESSION['MemberID']);
      if ( null !== $_SESSION['MemberID'] ) {  
          $member->createMembers($memberModel);
          $_SESSION['login'] = true;
          echo '<p>User Created</p>';
          Util::redirect('userEditPage');
      } else {
          echo '<p>User could not be created</p>';
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
                <li><a href="loginPage.php">login</a></li>
                <li><a href="signupPage.php">Help</a></li> 
            </ul>
        </div>                  
        </div>              
    </nav><!--{END NAVIGATION}############################################## -->
    <div class="container centerAll"><!--{MAIN WRAPPER}############################### -->
        <form class="frmLogin center-block" method="post">
            <div class="frmHeader">
                <div class="row">
                    <div class="col-md-6">
                        <img class="profile-img" src="img/signUp_img.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-center titleFont">Free Membership</h2>
                    </div>
                </div>
                <hr/>
            </div>
            <div class="frmCore">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input id="email" name="email" type="email" class="form-control" placeholder="Email" required="true"/>
                        </div>                        
                        <div class="form-group">
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password" required="true"/>                   
                        </div>
                        <div class="form-group">
                            <input id="websiteURL" name="websiteURL" type="text" class="form-control nameTaken" placeholder="Website URL" required="true"/>
                        </div>
                        <div class="form-group">
                            <label class="nameTaken"></label>
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
    </div><!--{END MAIN WRAPPER}############################################ -->
<!--{lOAD JAVASCRIPT}####################################################### -->
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>  
        <script src="js/signupValidation.js.js"></script>
<!--{END JAVASCRIPT}######################################################## -->  
</body>
</html>