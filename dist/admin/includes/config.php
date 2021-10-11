<?php 
    require 'constant.php';
    // define('ROOT_URL', 'http://localhost/social p/dist');
    define('ROOT_URL', 'http://localhost/sammy-porfolio');

    $conn =new  MYSQLI($servername, $username, $password, $dbname);
    if($conn){
        // echo('connected');
    }else
    {
        die('Database connection error:' . $conn->connect_error);
    }
?>