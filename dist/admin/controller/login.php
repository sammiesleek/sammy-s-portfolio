<?php 
    session_start();
    require '../includes/config.php';


    $acess = mysqli_real_escape_string($conn,$_POST['username']);
    $Pass = mysqli_real_escape_string($conn,$_POST['Pass']);
    // if(isset($_POST['kp'])){
    //     $kp = true;
    // }else{
    //     $kp= false;
    // }


    if(!empty($_POST['username']) ){
        if(!empty($_POST['Pass'])){
            $query = "SELECT * FROM access WHERE email=? OR usernname=? LIMIT 1";
            $stmt=$conn->prepare($query);
            $stmt->bind_param('ss',$acess,$acess);
            $stmt->execute();

            $result = $stmt->get_result();
            $count = $result->num_rows;
            
            if($count >0 ){
                $user = $result->fetch_assoc();
                if(password_verify($Pass, $user ['pass'])){
                    $_SESSION['username'] = $user['usernname'];
                    echo 'success';
                }else{
                    echo 'wrong password';
                }
                
            }else{
                echo 'Email or phone not registered';
            }
        }else{
            echo 'Enter your password';
        }
    }else{
        echo "enter phone or email";
    }


?>