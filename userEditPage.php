<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
David Landi
6/14
Final PHP Project
Admin Page
-->
<html lang="en">
<!--{LOAD CSS & GOOGLE FONTS}..................................................................................... -->    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/adminStyle.css" rel="stylesheet" media="all">
        <title>Admin Page</title>
    </head>
    <body> 
<!--{END CSS & GOOGLE FONTS}...................................................................................... -->

<!--{GLOBAL PHP}.................................................................................................. -->
<!--
INFO

-->
        <?php
//        Util::checkLogout();
//        Util::confirmAccess();
//        
//        $content = new UserContent();
//        $newContent = $content->getContent();
//        
//        if(Util::isPostRequest()){
//           $content= filter_input_array(INPUT_POST);
//           $content['title'] = $updatedInfo['title'];  
//           $content['theme'] = $updatedInfo['theme'];  
//           $content['address'] = $updatedInfo['address'];  
//           $content['phone'] = $updatedInfo['phone'];  
//           $content['email'] = $updatedInfo['email'];              
//           $content['content'] = $updatedInfo['about']; 
//            
//        }

        ?>
<!--{END PHP}..................................................................................................... -->

<!--{MAIN NAVIGATION}............................................................................................. --> 
<!--
INFO

-->
        <div class="navbar navbar-inverse ">
            <div class="container">
                <div class="navbar-header">
                    <!-- When screen size in mobile nav becomes one btn with dropdown -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Portfolio Builder</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Inspiration</a></li>
                    </ul>
                </div>
            </div>
        </div>
<!--{End NAVIGATION CONTAINER}.................................................................................... -->

<!--{INNER CONTAINER}............................................................................................. -->
<!--
INFO

-->
        <form name="mainform" action="#" method="post" class="container main">
            
            <div class="row margB"><!--{HEADER SECTION}-->
                <div class="col-lg-12">
                    <div class="headerBox  text-center">
                        <h1>Once you have filled out all of the required fields, your web portfolio will be complete.</h1>
                    </div>
                </div>
            </div><!--{END HEADER SECTION}-->
            <div class="row"><!--{Theme Selection}-->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="title margB">
                        <p class="padL">Select a theme</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <img src="img/Theme1Admin.png" alt="" class="img-responsive">
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <img src="img/Theme2Admin.png" alt="" class="img-responsive">
                    
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <img src="img/theme3Admin.png" alt="" class="img-responsive">
                   
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 margTop" >
                    <select class="form-control margB">
                        <option>Theme 1</option>
                        <option>Theme 2</option>
                        <option>Theme 3 </option>
                    </select>
                </div>              
            </div><!--{End Theme Selection-->
            <div class="row margTop"><!--{NAME & TITLE SECTION}-->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="title margB">
                        <p class="padL">Enter name and title</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="First & Last Name">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 margB">
                    <div class="form-group">
                        <label for="jobTitle">Title</label>
                        <input type="text" class="form-control" id="jobTitle" placeholder="Ex. Jr .NET Programmer">
                    </div>
                </div>
            </div><!--{END NAME & TITLE SECTION}-->
            <div class="row "><!--{EXPERIENCE SECTION}-->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="title margB">
                        <p class="padL">Experience</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4>Skills</h4>
                    <p>Enter your top 3 skills</p>
                    <hr>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <input type="text" class="form-control" id="skillOne" placeholder="Skill 1">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="skillTwo" placeholder="Skill 2">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="skillThree" placeholder="Skill 3">
                    </div>
                    <hr>
                </div>  
                <div class="col-md-6 col-sm-6 col-xs-12 margTop">
                    <h4>Job History</h4>
                    <p>Enter your current or last position<br>
                    If you enter your current position we recommend that you add "Present"</p>
                    <p>Please limit your text with in the Responsibilities section to 150 characters.</p>
                    <hr>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="jTitle">Title</label>
                        <input type="text" class="form-control" id="jTitle" placeholder="Job Title">
                    </div>
                    <div class="form-group">
                        <label for="sDate">Start Date</label>
                        <input type="text" class="form-control" id="sDate" placeholder="Ex. Oct. 2014">
                    </div>
                    <div class="form-group">
                        <label for="eDate">End Date</label>
                        <input type="text" class="form-control" id="eDate" placeholder="Ex. Dec. 2014">
                    </div>
                    <div class="form-group">
                        <label for="jDetail">Responsibilities</label>
                        <textarea class="form-control" id="jDetail" rows="3"></textarea>
                    </div>
                    <hr>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 margTop">
                    <h4>Education</h4>
                    <p>Enter your education information.</p>
                    <p>With in the additional detail section you can enter major projects you have completed, 
                       classes that you have taken, or you can leave it blank.</p>
                    <p>Please limit your text with in the Responsibilities section to 150 characters.</p>
                    <hr>
                      
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="schoolName">School Name</label>
                        <input type="text" class="form-control" id="schoolName" placeholder="Ex. New England Tech">
                    </div>
                    <div class="form-group">
                        <label for="program">Degree Program</label>
                        <input type="text" class="form-control" id="program" placeholder="Ex. Softwear Engineering">
                    </div>
                    <div class="form-group">
                        <label for="degreeType">Degree Type</label>
                        <select id="degreeType">
                            <option>Associates</option>
                            <option>Bachelor's</option>
                            <option>Masters</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Degree Status</label>
                        <select id="status">
                            <option>graduated</option>
                            <option>in progress</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="schoolComments">Additional Detail</label>
                        <textarea class="form-control" id="schoolComments" rows="3"></textarea>
                    </div>
                </div>
            </div><!--{END EXPERIENCE SECTION}-->
            
            <!--{ABOUT SECTION}-->
            <div class="row margTop">
                <div class="col-md-12 col-sm-12 col-xs-12 margTop">
                    <div class="title">
                        <p class="padL">About</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4>Summary</h4>
                    <p>With in the summary section provide a brief description about your professional background.<br>
                    If you are still in school and have little experience this would be a good section for you to highlight 
                    why you believe that you are a good candidate for any potential company's that may be viewing your webpage.</p>
                    <p>Please limit your text with in the Responsibilities section to 150 characters.</p>
                                       
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="summary" class="margTop">Summary</label>
                        <textarea class="form-control" id="summary" rows="3"></textarea>
                    </div>
                <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 margTop">
                    <h4>Objective</h4>
                    <p>With in the objective section provide a brief explanation about the type of position you are looking for.</p>
                    <p>Please limit your text with in the Responsibilities section to 150 characters.</p>                     
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="objective">Objective</label>
                        <textarea class="form-control" id="objective" rows="3"></textarea>
                    </div>
                </div>  
            </div>
            <!--{END ABOUT SECTION}-->
            
            <!--{CONTACT SECTION}-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 margTop">
                    <div class="title">
                        <p class="padL">Contact</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 margTop">
                   <h4>Social Media Icons</h4>
                   <p>Included on your webpage there are 3 social media icons: Facebook, Github and LinkedIn.
                   If you would like to have these icons linked to your personal sites you will need to provide the url's.
                   This is not required however the icons will appear on your page even if the url is not provided.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 margTop">
                    <div class="form-group">
                        <label for="gitHub">Git Hub </label>
                        <input type="text" class="form-control" id="gitHub" placeholder="url">
                    </div>
                    <div class="form-group">
                        <label for="fbook">Facebook</label>
                        <input type="text" class="form-control" id="fbook" placeholder="url">
                    </div>
                    <div class="form-group">
                        <label for="linkedin">LinkedIn</label>
                        <input type="text" class="form-control" id="linkedin" placeholder="url">
                    </div>
                    <hr>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                   <h4>Contact Info</h4>
                   <p>Be sure to enter accurate contact information so that employers are able to contact you.</p>
                   <p>This is a required section.</p>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="###-###-####">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="sample@sample.com">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" placeholder="Ex. Providence">
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" placeholder="Ex. Rhode Island">
                    </div>
                </div>
            </div>
            <!--{END CONTACT SECTION}-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 mainBtn">
                    <button class="btn btn-lg btn-success btn-block" type="submit">Submit</button>
                </div>
            </div>
        </form>
<!--{END INNER CONTAINER}......................................................................................... -->

<!--{lOAD JAVASCRIPT}............................................................................................. -->
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script> 
        <script src="js/landi.js"></script> 
<!--{END JAVASCRIPT}.............................................................................................. -->        
    </body>
</html>
