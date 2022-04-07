<?php
session_start();
include('../includes/config.php');

$root =
$output = "";
$sql = "SELECT * FROM review";
$stmt =$conn->prepare($sql);
if($stmt->execute()){
	$result = $stmt->get_result();
	$count = $result->num_rows;
	if($count > 0){

        while($row =$result->fetch_assoc()){


            $output .= '
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="bo-x" ">
                          <img src="'.$row['img'].'">
                            <div class="">
                                <div class="">
                                    '.$row['review'].'</div>
                            </div>
                        </div>


                         <a id="approvebtn" class="approvebtn" href="controller/aprev.php?timeP='.$row['timeofpost'].'" class="block-anchor panel-footer">Approve
                            <i class="fa fa-arrow-right"></i></a>
                         <a class="turnoffbtn" href="controller/turnoff-review.php?timeP= '.$row['timeofpost'].'" id="delete_button" class=" block-anchor panel-footer"> Turn Off
                            <i class="dell fa fa-close"></i></a>
                   


                        
                    </div>
                </div>
            ';
        
        }
        echo $output;
	}else{
		echo 'no Review';
	}
}else{
    echo 'error';
}