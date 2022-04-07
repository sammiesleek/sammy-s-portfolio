<?php 
    session_start();
    require '../includes/config.php';


    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $message = mysqli_real_escape_string($conn,$_POST['mssg']);
    

    if(!empty($name)){
        if(!empty($message)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                $query = "INSERT INTO message (Pname, Pemail, Pmessage) VALUES(?,?,?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param('sss', $name, $email, $message  );
                if($stmt->execute()){
                    echo " your message has been sent.";
                }
                else{
                    echo " An error occured, try again.";
                }


            }
            else{
                echo "invalid email.";
            }
        }
        else{
            echo "Enter your message.";
        }
    }
    else{
        echo "Enter your name.";
    }


    

?>