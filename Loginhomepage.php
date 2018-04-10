<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Login | Gymbud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Delius|Give+You+Glory|La+Belle+Aurore|Oxygen+Mono|Schoolbell|Sirin+Stencil|Sue+Ellen+Francisco|The+Girl+Next+Door|Erica+One|Modak|Sigmar+One|Indie Flower|Yellowtail|Satisfy|Rancho|Dancing Script|VT323" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="Resources/CSS/Login.css" />
    <script src="Resources/JS/.js"></script>
</head>
<body>


<?php
    include('Loginheader.php');
?>





    <div id="inputContainer">
       <h1>Sign Into Your Account</h1> 
       <div id="WelcomeMessage">
            <div id="Gymbud_logoContainer">
                <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/819/712153819_c8f6ea8e-7948-4517-a3ac-1587e557ef6e.png?cb=1523085120" id="Gymbud_logo">
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <div id="LoginInfo">
            <form action="LoginHomepage.php" method="post">
                
                <input type="text" name="User_Username" id="UsersUsername" maxlength="30" placeholder="Username or Email" autocorrect="off" autocomplete="off" autocapitalize="off"  aria-describedby="" aria-label="Username or Email" aria-required="true"  value="" required>
                <br>
                <br>
                <br>
               
                <input type="password" name="User_Password" id="UsersPassword" maxlength="20"  placeholder="Password"  autocorrect="off" autocomplete="off" autocapitalize="off"  aria-describedby="" aria-label="Password" aria-required="true"  value="" required>
                <br>
            </form>
            <input type="submit" id="UserLoginButton" value="Login">
        </div>
    </div>

</body>
</html>