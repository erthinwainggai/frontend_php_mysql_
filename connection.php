<?php 
    $servername = "localhost:3308";
    $username = "root";
    $password = "root";
    $db_name = "database6";  
    $conn = new mysqli ($servername, $username, $password, $db_name, 3308);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    echo " ";
    
    ?>