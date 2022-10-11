<?php

    session_start();
    
    $conn = new mysqli('localhost', 'u134858705_cimbalistad', 'groupieDJC1', 'u134858705_soundtrak');
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM capstone_users WHERE username='".$username."' AND password='".$password."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
        echo "success";
    else
        echo "failure";
?>