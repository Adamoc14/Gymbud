<?php
        $db_user = "Adam";
        $db_pass = "gaelic football";
        $db_name = "Gymbud";
        $db_host = "192.168.64.2";
                                        
        $mysqli = new mysqli ($db_host, $db_user , $db_pass , $db_name);


        // This code essentially just checks if we’re connected to the database or not and if not it prints an error message to the screen and exits the application
        if ($mysqli -> connect_errno) {
            printf( "Connect Failed: %s\n ", $mysqli -> connect_error);
            exit();
        }

     
                

