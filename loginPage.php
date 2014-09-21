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
    <link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
    <title>getNOTICED</title> 
</head><!--{END CSS & GOOGLE FONTS}##########################################-->
<body>
<?php
/* {Global PHP}############################################################## */
$message = '';

    if ( !isset($_SESSION['login']) ) {
        $_SESSION['login'] = false;
    }
    if ( Util::isPostRequest() ) {
        $checkCredentials = new Passcode();
        if ( $checkCredentials->isMemberLogin($checkCredentials) ) {                    
            $_SESSION['login'] = true;
            Util::redirect('userEditPage');                   
        } else if ( $checkCredentials->isAdminLogin($checkCredentials) ) {                         
            $_SESSION['login'] = true;
            Util::redirect('adminPage');
        } else {
            $msg = 'Login Failed';
            $_SESSION['MemberID'] = 0;
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
                <li><a href="signupPage.php">Sign up</a></li>
                <li><a href="#loginInHelpModal" role="button" data-toggle="modal">Help</a></li> 
            </ul>
        </div>                  
        </div>              
    </nav><!--{END NAVIGATION}############################################## -->
    <div class="container centerAll"><!--{MAIN WRAPPER}##################### -->      
        <form class="frmLogin center-block" method="post">
            <div class="frmHeader">
                <div class="row">
                    <div class="col-md-6">
                        <img class="profile-img" src="img/login_img.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-center titleFont">Welcome Back</h2>
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
                            <?php if ( !empty($msg)) {echo '<p>', $msg, '</p>';}?>
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
 <!--{MODALS}################################################################-->   
<div id="loginInHelpModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content text-justify help">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Help</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="modContent center-block">
                            <p>
                            Currently, functionality to reset your password online 
                            is not available.  We hope to have this feature rolled 
                            out in the near future.  In the mean time please contact 
                            us directly and we will reset your password. 
                            </p>
                            <p>
                            Both fields are required to login.
                            </p>
                            <p>
                            If you need further support, please contact us at <br>
                            tlgaskell@email.neit.edu<br>
                            djlandi@email.neit.edu<br>
                            jabarreira@email.neit.edu
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--{END MODALS}#############################################################-->
<!--{lOAD JAVASCRIPT}####################################################### -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>         
<!--{END JAVASCRIPT}######################################################## -->  
</body>
</html>