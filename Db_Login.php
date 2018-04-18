<?php
        $db_user = "Adam";
        $db_pass = "gaelic football";
        $db_name = "Gymbud_login";
        $db_host = "192.168.64.2";


        $mysqli = new mysqli ($db_host, $db_user , $db_pass , $db_name);


        // This code essentially just checks if we’re connected to the database or not and if not it prints an error message to the screen and exits the application
        if ($mysqli -> connect_errno) {
                printf( "Connect Failed: %s\n ", $mysqli -> connect_error);
                exit();
            }
        //Creates Table

        $Users_Table = 
        'CREATE TABLE IF NOT EXISTS Users (
            ID INT(6) UNSIGNED AUTO_INCREMENT,
            Username varchar(30) NOT NULL,
            Password varchar(255) NOT NULL,
            Name varchar (30),
            PRIMARY KEY (ID)
        )';


//This kind of has to be in this i have no clue why ?
        if($mysqli->query($Users_Table)=== TRUE){
          printf("This has been created, well done ");
        }

        

  
       