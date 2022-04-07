<?php
 require_once ('../includes/config.php');

//  print_r($_GET['timeP']);

 if(isset($_GET['timeP'])){

    $time = $_GET['timeP'];
    $stats = false;
    $query ="UPDATE review SET sts=?  WHERE timeofpost = ? ";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('is', $stats,$time);
    if($stmt->execute()){
        header("Location:../reviews.php");
    }


 }else{
print_r('error');
 }



?>