<!-- <?php
// $dbuser="root";
// $dbpass="";
// $host="localhost";
// $db="hostel";
// $mysqli =new mysqli($host,$dbuser, $dbpass, $db);


require 'config.php';

 

        

            $password= 'explore@96';
            $pass = password_hash($password,PASSWORD_DEFAULT);
            $name ='sammyajayi';
            $email ='connect@sammyajayi.info';

            $register = "INSERT INTO access (username, email, pass) VALUES(?, ?, ?)";
            $stmt = $conn->prepare($register);
            $stmt->bind_param('sss', $name, $email, $pass);
            if($stmt->execute()){
                echo 'done';
            }else{
                echo 'error'  ;
            }
        
    
?> -->