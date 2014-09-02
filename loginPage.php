<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
This page is where the user will login. if user is member, redirect to userEditPage.
If user is admin, redirect to adminPage. 
If user not found alert user ask if they forgot password or need to signup
-->

<html lang="en">    
<head><!--{LOAD CSS & GOOGLE FONTS}######################################### -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/loginSignupStyle.css" rel="stylesheet" media="all">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>get<i>N</i>OTICED</title> 
</head><!--{END CSS & GOOGLE FONTS}##########################################-->
<body>
<?php
/* {Global PHP}############################################################## */
$message = '';
    if ( ! isset($_SESSION['login']) ) {
        echo '<p>Makes login session false</p>';
        $_SESSION['login'] = false;
    }
    if ( Util::isPostRequest() ) {
        $checkCredentials = new Passcode();
        if ( $checkCredentials->isValidLogin($checkCredentials) ) {                    
            $_SESSION['login'] = true;
            echo '<p>Logged In</p>';
            //Util::redirect('admin');                   
        } else {                         
            $msg = 'Login Failed';
            $_SESSION['userID'] = 0;
        }
    }
    if ( !empty($msg)) {
        echo '<p>', $msg, '</p>';
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
                <li><a href="signupPage.php">Sign up</a></li>
                <li><a href="signupPage.php">Help</a></li> 
            </ul>
        </div>                  
        </div>              
    </nav><!--{END NAVIGATION}############################################## -->
    <div class="container"><!--{MAIN WRAPPER}############################### -->
        <form class="frmLogin center-block" method="post">
            <div class="frmHeader">
                <div class="row">
                    <div class="col-md-6">
                        <img class="profile-img" src="img/login_img.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-center">Welcome Back</h2>
                    </div>
                </div>
                <hr/>
            </div>
            <div class="frmCore">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="true">                   
                        </div>
                    </div>
                </div>
            </div>
            <div class="frmFooter">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" value="login">Login</button>                   
                        <a class="btn btn-lg btn-primary btn-block" href="loginPage.php">Forgot password?</a>
                        <a class="btn btn-lg btn-primary btn-block" href="signupPage.php">Not a member?</a>
                    </div>
                </div>
            </div>            
        </form>
    </div><!--{END MAIN WRAPPER}############################################ -->
<!--{lOAD JAVASCRIPT}####################################################### -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>         
<!--{END JAVASCRIPT}######################################################## -->  
</body>
</html>



