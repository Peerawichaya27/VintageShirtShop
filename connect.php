<?php
    $db_server = "localhost";
    $db_user   = "root";
    $db_pass   = "root";
    $db_name   = "project";

    $mysqli = new mysqli($db_server, 
                         $db_user, 
                         $db_pass,
                         $db_name);
                         
    if($mysqli->connect_errno){
        echo $mysqli->connect_errno.": ".$mysqli->connect_error;
    }
    
?>