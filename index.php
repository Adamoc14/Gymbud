<?php 
   

//Handle Logins - basically checked if the form has been submitted
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $login_status   =  $login->verify_login($_POST); //Essentially passes the $_Post data to variable called $login_status
}

//Verify Session - checks to see if theres any session data relating to that user being logged in at that very moment 
if($login->verify_session() )   {
    $user   =   $login->user; //If it exists this checks it against the database 
    include(''); // if it does check out then we'll display the homepage to the user 
} else {
    include('LoginHomepage.php'); // if user isn't verified it loads the same page with an error 
}

