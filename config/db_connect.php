<?php

     //MYSQL or PDO (PHP Data Objects)

    //connect to database
    $conn = mysqli_connect('localhost', 'Shaun', 'test123', 'pizza_table');

    //check connection
    if(!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }
    
?>