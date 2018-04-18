<?php
        $db_user = "Adam";
        $db_pass = "gaelic football";
        $db_name = "Gymbud";
        $db_host = "192.168.64.2";


        $mysqli = new mysqli ($db_host, $db_user , $db_pass , $db_name);

        //Creates Table

          $Users_Table = 
                "CREATE TABLE IF NOT EXISTS Users (
                        ID INT(6) UNSIGNED AUTO_INCREMENT,
                        Username varchar(30) NOT NULL,
                        Password varchar(255) NOT NULL,
                        Name varchar (30),
                        PRIMARY KEY (ID)
                )";

  
       