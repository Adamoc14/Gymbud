<?php
	$db_user = ‘root’;
	$db_pass = ‘root’;
	$db_name = ‘Gymbud’;
	$db_host = ‘localhost’
									
	$mysqli = new mysql ($db_host, $db_user , $db_pass , $db_name);


    <—This code essentially just checks if we’re connected to the database or not and if not it prints an error message to the screen and exits the application—->
    if ($mysqli -> connect_errno){
        printf(“Connect Failed :  #s\n” , $mysqli -> connect_error);
        exit();
    }

    $Post_table = 
                “CREATE TABLE IF NOT EXISTS Gymbud (
                    ID bigint (20) UNSIGNED NOT NULL AUTO_INCREMENT,
                    post_title text NOT NULL,
                    post_content longtext NOT NULL,
                    post_name varchar (20) NOT NULL,
                    post_date date time NOT NULL,
                    PRIMARY KEY (ID)
                )”;


            if ($mysqli->query($Post_table) === true) {
                printf(“Post table successfully created.\n”);
                } 

    $Post_meta_table = 
                “CREATE TABLE IF NOT EXISTS Post_meta (
                    Meta_ID bigint (20) UNSIGNED NOT NULL AUTO_INCREMENT,
                    Post_ID bigint (20) UNSIGNED NOT NULL,
                    Meta_key varchar (255),
                    Meta_value longtext,
                    PRIMARY KEY (Meta_ID)
                )”;


            if ($mysqli->query($Post_Meta_table) === true) {
                printf(“Post Meta table successfully created.\n”);
                } 


    $Post_Tags_table = 
                “CREATE TABLE IF NOT EXISTS Gymbud (
                   ID bigint (20) UNSIGNED NOT NULL AUTO_INCREMENT,
                   Post_ID bigint (20) UNSIGNED  NOT NULL,
                   Tag_ID bigint (20) UNSIGNED  NOT NULL,
                   PRIMARY KEY (ID)
                )”;


            if ($mysqli->query($Post_Tags_table) === true) {
                printf(“Post Tags table successfully created.\n”);
              } 
    
    ?>


