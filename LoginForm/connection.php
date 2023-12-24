<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name="LoginForm";
    $conn = new mysqli($servername,$username,$password,$db_name,3306);
    if($conn->connect_error){
        die("Connction failed".$conn->connect_error);
    }
    
?>