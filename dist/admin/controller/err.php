<?php
// $dbuser="root";
// $dbpass="";
// $host="localhost";
// $db="portfolio";
// $mysqli =new mysqli($host,$dbuser, $dbpass, $db);


// require '../config.php';

 require '../includes/config.php';
            $password= 'explore@96';
            $pass = password_hash($password,PASSWORD_DEFAULT);
            $name ='sammyajayi';
            $email ='connect@sammyajayi.info';
            $register = "INSERT INTO access (usernname, email, pass) VALUES(?, ?, ?)";
            $stmt = $conn->prepare($register);
            $stmt->bind_param('sss', $name, $email, $pass);
            if($stmt->execute()){
                echo 'done';
            }else{
                echo 'error'  ;
            }
        
    
?>