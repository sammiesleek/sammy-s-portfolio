<?php
session_start();
include('../includes/config.php');

$root =
$output = "";
$sql = "SELECT * FROM message";
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
                          <span> '.$row['Pname'].'<?span>
                            <div class="">
                                <div class="">
                                    '.$row['Pmessage'].'
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            ';
        
        }
        echo $output;
	}else{
		echo 'no message';
	}
}else{
    echo 'error';
}