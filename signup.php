<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/getNOTICED.css" rel="stylesheet" media="all">
        <link href="css/forms.css" rel="stylesheet">
        <title>Sign up</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        
        <div class="container">
            <form class="form-signin" role="form">
                <h1 class="title">Welcome!</h1><h2>Please enter your info</h2>
                <label>Name:</label> <input type="text" class="form-control" placeholder="Name" required="true" autofocus="true"/> <br />
                <label>Email:</label> <input type="email" class="form-control" placeholder="email" required="true"/> <br />
                <label>Website:</label> <input type="text" class="form-control" placeholder="Website" required="true"/> <br />
                <label>Password:</label> <input type="password" class="form-control" placeholder="password" required="true"/> <br />
                <button class="btn btn-sm btn-primary btn-block" type="submit">Sign up</button>
                <p> Already a member, <a href="loginPage.php">Login</a></p>
            </form>
        </div>
    </body>
</html>
